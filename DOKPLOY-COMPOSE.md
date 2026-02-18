# Dokploy – Sadece YML ile Tek Container Deploy

Bu proje **Dockerfile kullanmadan**, sadece `docker-compose.yml` ve bir entrypoint script ile **tek container** içinde çalışır. **Aynı container’da hem uygulama (PHP/Apache) hem PostgreSQL** çalışır; ayrı bir veritabanı servisi oluşturmanız gerekmez.

## Proje yapısı

- **docker-compose.yml** — Tek servis: `web`. Build yok; `image: php:8.2-apache` ve `entrypoint.sh` kullanılır.
- **entrypoint.sh** — Container açılışında PostgreSQL kurulumu/başlatması, PHP eklentileri, Composer, Apache ayarları ve storage’ı hazırlar; sonra Apache’i başlatır (PostgreSQL arka planda çalışmaya devam eder).
- **Veritabanı** — Aynı container içinde PostgreSQL 15; veri `pg_data` volume’unda kalıcıdır.

---

## 1. Dokploy kurulumu

- **Build Type / Application Type:** **Docker Compose** seçin.
- **Compose File Path:** `docker-compose.yml`
- **Dockerfile / Docker File** alanı: **Boş bırakın** (kullanılmıyor).

## 2. Environment (Ortam değişkenleri)

Proje ayarlarında **Environment** bölümüne ekleyin:

| Değişken             | Zorunlu | Açıklama |
|----------------------|--------|----------|
| `APP_URL`            | Evet   | Uygulamanın dış erişim adresi; Dokploy domain’iniz (örn. `https://imageio-xxx.traefik.me`). Excel/ZIP linkleri için kullanılır. |
| `POSTGRES_PASSWORD`  | Hayır  | Veritabanı şifresi. Verilmezse varsayılan `imageio_secret_change_me` kullanılır (üretimde mutlaka değiştirin). |
| `POSTGRES_DB`        | Hayır  | Veritabanı adı (varsayılan: `imageio`). |
| `POSTGRES_USER`      | Hayır  | Veritabanı kullanıcısı (varsayılan: `imageio`). |

`POSTGRES_HOST` container içinde otomatik `localhost` olarak ayarlıdır; değiştirmeniz gerekmez.

## 3. Domain

- **Domains** (veya **Ports / Networking**) kısmında bu uygulama için domain ekleyin.
- Domain’i **web** servisine, **port 80**’e bağlayın (proxy / forward: `web:80`).

## 4. Network

- `dokploy-network` compose’ta `external: true` ile tanımlı; Dokploy tarafından sağlanır.
- İlk deploy’da “network not found” hatası alırsanız, Dokploy’da bu network’ü önce oluşturmanız gerekebilir.

## 5. Deploy

- **Deploy** / **Redeploy** ile çalıştırın. Build yapılmaz.
- Tek container (**web**) ayağa kalkar; içinde hem Apache hem PostgreSQL çalışır. İlk açılışta entrypoint PHP eklentileri, PostgreSQL ve Composer kurulumunu yaptığı için ilk start birkaç dakika sürebilir.
