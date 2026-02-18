#!/bin/bash
set -e

cd /var/www/html

# Sistem paketleri, PHP eklentileri ve PostgreSQL (aynı container'da)
apt-get update
apt-get install -y --no-install-recommends \
    libpq-dev libzip-dev unzip curl \
    libfreetype-dev libjpeg62-turbo-dev libpng-dev libwebp-dev \
    libxml2-dev \
    postgresql-15
docker-php-ext-configure gd --with-freetype --with-jpeg
docker-php-ext-install -j$(nproc) pdo pdo_pgsql zip gd
a2enmod rewrite

# PostgreSQL: volume bos ise init (pg_createcluster postinst bazen mount'tan sonra calismis olur)
if [ ! -f /var/lib/postgresql/15/main/PG_VERSION ]; then
    su postgres -c "/usr/lib/postgresql/15/bin/initdb -D /var/lib/postgresql/15/main"
fi
service postgresql start
until pg_isready -U postgres; do sleep 1; done
# Kullanici ve veritabani (env'den; varsa hata yoksayilir; sifre icin tek tirnak escape)
SAFE_PASS="${POSTGRES_PASSWORD//\'/\'\'}"
su postgres -c "psql -U postgres -c \"CREATE USER \\\"${POSTGRES_USER}\\\" WITH PASSWORD '\''${SAFE_PASS}'\'';\" 2>/dev/null" || true
su postgres -c "psql -U postgres -c \"CREATE DATABASE \\\"${POSTGRES_DB}\\\" OWNER \\\"${POSTGRES_USER}\\\";\" 2>/dev/null" || true

rm -rf /var/lib/apt/lists/*

# PHP ayarları (Dockerfile ile aynı)
echo "upload_max_filesize = 50M
post_max_size = 60M
memory_limit = 256M
max_execution_time = 300
max_input_time = 300" > /usr/local/etc/php/conf.d/imageio.ini

# Composer (yoksa kur)
if ! command -v composer &>/dev/null; then
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
fi

# Bağımlılıklar (vendor yoksa veya boşsa)
if [ ! -f /var/www/html/vendor/autoload.php ]; then
    export COMPOSER_ALLOW_SUPERUSER=1
    php -d memory_limit=-1 /usr/local/bin/composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs
fi

# Apache DocumentRoot -> public (sabit config; sed tekrarda path bozulmasin diye kullanilmiyor)
cp /var/www/html/apache-imageio.conf /etc/apache2/sites-available/imageio.conf
a2dissite 000-default.conf 2>/dev/null || true
a2ensite imageio.conf

# Storage dizini
mkdir -p /var/www/html/storage
chown -R www-data:www-data /var/www/html/storage
chmod -R 775 /var/www/html/storage

exec apache2-foreground
