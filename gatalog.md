Initializing deployment
Cloning Repo github.com/pgeynt/imageio.git to /etc/dokploy/compose/imageio-app-g2kjh1/code: ✅
Cloning into '/etc/dokploy/compose/imageio-app-g2kjh1/code'...
remote: Enumerating objects: 23, done.
remote: Counting objects:   4% (1/23)        
remote: Counting objects:   8% (2/23)        
remote: Counting objects:  13% (3/23)        
remote: Counting objects:  17% (4/23)        
remote: Counting objects:  21% (5/23)        
remote: Counting objects:  26% (6/23)        
remote: Counting objects:  30% (7/23)        
remote: Counting objects:  34% (8/23)        
remote: Counting objects:  39% (9/23)        
remote: Counting objects:  43% (10/23)        
remote: Counting objects:  47% (11/23)        
remote: Counting objects:  52% (12/23)        
remote: Counting objects:  56% (13/23)        
remote: Counting objects:  60% (14/23)        
remote: Counting objects:  65% (15/23)        
remote: Counting objects:  69% (16/23)        
remote: Counting objects:  73% (17/23)        
remote: Counting objects:  78% (18/23)        
remote: Counting objects:  82% (19/23)        
remote: Counting objects:  86% (20/23)        
remote: Counting objects:  91% (21/23)        
remote: Counting objects:  95% (22/23)        
remote: Counting objects: 100% (23/23)        
remote: Counting objects: 100% (23/23), done.
remote: Compressing objects:   5% (1/19)        
remote: Compressing objects:  10% (2/19)        
remote: Compressing objects:  15% (3/19)        
remote: Compressing objects:  21% (4/19)        
remote: Compressing objects:  26% (5/19)        
remote: Compressing objects:  31% (6/19)        
remote: Compressing objects:  36% (7/19)        
remote: Compressing objects:  42% (8/19)        
remote: Compressing objects:  47% (9/19)        
remote: Compressing objects:  52% (10/19)        
remote: Compressing objects:  57% (11/19)        
remote: Compressing objects:  63% (12/19)        
remote: Compressing objects:  68% (13/19)        
remote: Compressing objects:  73% (14/19)        
remote: Compressing objects:  78% (15/19)        
remote: Compressing objects:  84% (16/19)        
remote: Compressing objects:  89% (17/19)        
remote: Compressing objects:  94% (18/19)        
remote: Compressing objects: 100% (19/19)        
remote: Compressing objects: 100% (19/19), done.
Receiving objects:   4% (1/23)
Receiving objects:   8% (2/23)
Receiving objects:  13% (3/23)
Receiving objects:  17% (4/23)
Receiving objects:  21% (5/23)
Receiving objects:  26% (6/23)
Receiving objects:  30% (7/23)
Receiving objects:  34% (8/23)
Receiving objects:  39% (9/23)
Receiving objects:  43% (10/23)
Receiving objects:  47% (11/23)
Receiving objects:  52% (12/23)
Receiving objects:  56% (13/23)
Receiving objects:  60% (14/23)
Receiving objects:  65% (15/23)
Receiving objects:  69% (16/23)
Receiving objects:  73% (17/23)
Receiving objects:  78% (18/23)
Receiving objects:  82% (19/23)
Receiving objects:  86% (20/23)
Receiving objects:  91% (21/23)
Receiving objects:  95% (22/23)
Receiving objects: 100% (23/23)
Receiving objects: 100% (23/23), 23.55 KiB | 23.55 MiB/s, done.
remote: Total 23 (delta 0), reused 17 (delta 0), pack-reused 0 (from 0)
╔══════════════════════════════════════════════════════════════════════════════╗
║                                                                              ║
║ App Name: imageio-app-g2kjh1                                                 ║
║ Build Compose 🐳                                                             ║
║ Detected: 0 mounts 📂                                                        ║
║ Command: docker compose -p imageio-app-g2kjh1 -f ./docker-compose.yml up -d  ║
║ --build --remove-orphans                                                     ║
║ Source Type: docker github ✅                                                ║
║ Compose Type: docker-compose ✅                                              ║
║                                                                              ║
╚══════════════════════════════════════════════════════════════════════════════╝
Image imageio-app-g2kjh1-web Building
#1 [internal] load local bake definitions
#1 reading from stdin 2.19kB done
#1 DONE 0.0s
#2 [internal] load build definition from Dockerfile
#2 transferring dockerfile: 1.52kB done
#2 DONE 0.0s
#3 [internal] load metadata for docker.io/library/php:8.2-apache
#3 DONE 0.7s
#4 [internal] load .dockerignore
#4 transferring context: 100B done
#4 DONE 0.0s
#5 [ 1/10] FROM docker.io/library/php:8.2-apache@sha256:46d9dd4b58c0f3803ab637ae1fb93e979cc63f8ddaf73d149741f14e68f44494
#5 resolve docker.io/library/php:8.2-apache@sha256:46d9dd4b58c0f3803ab637ae1fb93e979cc63f8ddaf73d149741f14e68f44494 0.0s done
#5 CACHED
#6 [internal] load build context
#6 transferring context: 109.98kB done
#6 DONE 0.0s
#7 [ 2/10] RUN apt-get update && apt-get install -y     libpq-dev libzip-dev unzip curl     libfreetype-dev libjpeg62-turbo-dev libpng-dev libwebp-dev     libxml2-dev     && docker-php-ext-configure gd --with-freetype --with-jpeg     && docker-php-ext-install pdo pdo_pgsql zip gd dom xml     && a2enmod rewrite     && rm -rf /var/lib/apt/lists/*
#7 0.386 Hit:1 http://deb.debian.org/debian trixie InRelease
#7 0.387 Get:2 http://deb.debian.org/debian trixie-updates InRelease [47.3 kB]
#7 0.390 Get:3 http://deb.debian.org/debian-security trixie-security InRelease [43.4 kB]
#7 0.409 Get:4 http://deb.debian.org/debian trixie/main amd64 Packages [9670 kB]
#7 0.518 Get:5 http://deb.debian.org/debian trixie-updates/main amd64 Packages [5412 B]
#7 0.520 Get:6 http://deb.debian.org/debian-security trixie-security/main amd64 Packages [104 kB]
#7 1.192 Fetched 9870 kB in 1s (11.9 MB/s)
#7 1.192 Reading package lists...
#7 1.819 Reading package lists...
#7 2.383 Building dependency tree...
#7 2.526 Reading state information...
#7 2.682 curl is already the newest version (8.14.1-2+deb13u2).
#7 2.682 The following additional packages will be installed:
#7 2.683   bzip2-doc libbrotli-dev libbz2-dev libfreetype6 libjpeg62-turbo libpng-tools
#7 2.685   libpng16-16t64 libpq5 libsharpyuv-dev libsharpyuv0 libssl-dev libwebp7
#7 2.685   libwebpdecoder3 libwebpdemux2 libwebpmux3 libzip5 zipcmp zipmerge ziptool
#7 2.685   zlib1g-dev
#7 2.685 Suggested packages:
#7 2.686   freetype2-doc postgresql-doc-17 libssl-doc zip
#7 2.800 The following NEW packages will be installed:
#7 2.802   bzip2-doc libbrotli-dev libbz2-dev libfreetype-dev libfreetype6
#7 2.802   libjpeg62-turbo libjpeg62-turbo-dev libpng-dev libpng-tools libpng16-16t64
#7 2.802   libpq-dev libpq5 libsharpyuv-dev libsharpyuv0 libssl-dev libwebp-dev
#7 2.802   libwebp7 libwebpdecoder3 libwebpdemux2 libwebpmux3 libxml2-dev libzip-dev
#7 2.802   libzip5 unzip zipcmp zipmerge ziptool zlib1g-dev
#7 2.829 0 upgraded, 28 newly installed, 0 to remove and 1 not upgraded.
#7 2.829 Need to get 10.1 MB of archives.
#7 2.829 After this operation, 36.2 MB of additional disk space will be used.
#7 2.829 Get:1 http://deb.debian.org/debian trixie/main amd64 bzip2-doc all 1.0.8-6 [505 kB]
#7 2.841 Get:2 http://deb.debian.org/debian trixie/main amd64 libbrotli-dev amd64 1.1.0-2+b7 [316 kB]
#7 2.848 Get:3 http://deb.debian.org/debian trixie/main amd64 libbz2-dev amd64 1.0.8-6 [31.4 kB]
#7 2.849 Get:4 http://deb.debian.org/debian trixie/main amd64 libpng16-16t64 amd64 1.6.48-1+deb13u1 [283 kB]
#7 2.852 Get:5 http://deb.debian.org/debian trixie/main amd64 libfreetype6 amd64 2.13.3+dfsg-1 [452 kB]
#7 2.858 Get:6 http://deb.debian.org/debian trixie/main amd64 zlib1g-dev amd64 1:1.3.dfsg+really1.3.1-1+b1 [920 kB]
#7 2.872 Get:7 http://deb.debian.org/debian trixie/main amd64 libpng-dev amd64 1.6.48-1+deb13u1 [367 kB]
#7 2.879 Get:8 http://deb.debian.org/debian trixie/main amd64 libfreetype-dev amd64 2.13.3+dfsg-1 [622 kB]
#7 2.884 Get:9 http://deb.debian.org/debian trixie/main amd64 libjpeg62-turbo amd64 1:2.1.5-4 [168 kB]
#7 2.887 Get:10 http://deb.debian.org/debian trixie/main amd64 libjpeg62-turbo-dev amd64 1:2.1.5-4 [292 kB]
#7 2.889 Get:11 http://deb.debian.org/debian trixie/main amd64 libpng-tools amd64 1.6.48-1+deb13u1 [130 kB]
#7 2.893 Get:12 http://deb.debian.org/debian trixie/main amd64 libpq5 amd64 17.7-0+deb13u1 [228 kB]
#7 2.896 Get:13 http://deb.debian.org/debian-security trixie-security/main amd64 libssl-dev amd64 3.5.4-1~deb13u2 [2958 kB]
#7 2.930 Get:14 http://deb.debian.org/debian trixie/main amd64 libpq-dev amd64 17.7-0+deb13u1 [151 kB]
#7 2.932 Get:15 http://deb.debian.org/debian trixie/main amd64 libsharpyuv0 amd64 1.5.0-0.1 [116 kB]
#7 2.934 Get:16 http://deb.debian.org/debian trixie/main amd64 libsharpyuv-dev amd64 1.5.0-0.1 [120 kB]
#7 2.936 Get:17 http://deb.debian.org/debian trixie/main amd64 libwebp7 amd64 1.5.0-0.1 [318 kB]
#7 2.940 Get:18 http://deb.debian.org/debian trixie/main amd64 libwebpdemux2 amd64 1.5.0-0.1 [113 kB]
#7 2.941 Get:19 http://deb.debian.org/debian trixie/main amd64 libwebpmux3 amd64 1.5.0-0.1 [126 kB]
#7 2.945 Get:20 http://deb.debian.org/debian trixie/main amd64 libwebpdecoder3 amd64 1.5.0-0.1 [208 kB]
#7 2.946 Get:21 http://deb.debian.org/debian trixie/main amd64 libwebp-dev amd64 1.5.0-0.1 [450 kB]
#7 2.950 Get:22 http://deb.debian.org/debian trixie/main amd64 libxml2-dev amd64 2.12.7+dfsg+really2.9.14-2.1+deb13u2 [794 kB]
#7 2.957 Get:23 http://deb.debian.org/debian trixie/main amd64 libzip5 amd64 1.11.3-2 [62.6 kB]
#7 2.958 Get:24 http://deb.debian.org/debian trixie/main amd64 zipcmp amd64 1.11.3-2 [19.8 kB]
#7 2.959 Get:25 http://deb.debian.org/debian trixie/main amd64 zipmerge amd64 1.11.3-2 [14.5 kB]
#7 2.960 Get:26 http://deb.debian.org/debian trixie/main amd64 ziptool amd64 1.11.3-2 [22.6 kB]
#7 2.961 Get:27 http://deb.debian.org/debian trixie/main amd64 libzip-dev amd64 1.11.3-2 [181 kB]
#7 2.962 Get:28 http://deb.debian.org/debian trixie/main amd64 unzip amd64 6.0-29 [173 kB]
#7 3.125 debconf: unable to initialize frontend: Dialog
#7 3.126 debconf: (TERM is not set, so the dialog frontend is not usable.)
#7 3.126 debconf: falling back to frontend: Readline
#7 3.134 debconf: unable to initialize frontend: Readline
#7 3.134 debconf: (This frontend requires a controlling tty.)
#7 3.134 debconf: falling back to frontend: Teletype
#7 3.138 debconf: unable to initialize frontend: Teletype
#7 3.139 debconf: (This frontend requires a controlling tty.)
#7 3.139 debconf: falling back to frontend: Noninteractive
#7 3.754 Fetched 10.1 MB in 0s (67.1 MB/s)
#7 3.775 Selecting previously unselected package bzip2-doc.
#7 3.775 (Reading database ... 
(Reading database ... 5%
(Reading database ... 10%
(Reading database ... 15%
(Reading database ... 20%
(Reading database ... 25%
(Reading database ... 30%
(Reading database ... 35%
(Reading database ... 40%
(Reading database ... 45%
(Reading database ... 50%
(Reading database ... 55%
(Reading database ... 60%
(Reading database ... 65%
(Reading database ... 70%
(Reading database ... 75%
(Reading database ... 80%
(Reading database ... 85%
(Reading database ... 90%
(Reading database ... 95%
(Reading database ... 100%
(Reading database ... 15584 files and directories currently installed.)
#7 3.830 Preparing to unpack .../00-bzip2-doc_1.0.8-6_all.deb ...
#7 3.833 Unpacking bzip2-doc (1.0.8-6) ...
#7 3.864 Selecting previously unselected package libbrotli-dev:amd64.
#7 3.866 Preparing to unpack .../01-libbrotli-dev_1.1.0-2+b7_amd64.deb ...
#7 3.869 Unpacking libbrotli-dev:amd64 (1.1.0-2+b7) ...
#7 3.911 Selecting previously unselected package libbz2-dev:amd64.
#7 3.914 Preparing to unpack .../02-libbz2-dev_1.0.8-6_amd64.deb ...
#7 3.917 Unpacking libbz2-dev:amd64 (1.0.8-6) ...
#7 3.942 Selecting previously unselected package libpng16-16t64:amd64.
#7 3.943 Preparing to unpack .../03-libpng16-16t64_1.6.48-1+deb13u1_amd64.deb ...
#7 3.948 Unpacking libpng16-16t64:amd64 (1.6.48-1+deb13u1) ...
#7 3.978 Selecting previously unselected package libfreetype6:amd64.
#7 3.980 Preparing to unpack .../04-libfreetype6_2.13.3+dfsg-1_amd64.deb ...
#7 3.984 Unpacking libfreetype6:amd64 (2.13.3+dfsg-1) ...
#7 4.023 Selecting previously unselected package zlib1g-dev:amd64.
#7 4.026 Preparing to unpack .../05-zlib1g-dev_1%3a1.3.dfsg+really1.3.1-1+b1_amd64.deb ...
#7 4.030 Unpacking zlib1g-dev:amd64 (1:1.3.dfsg+really1.3.1-1+b1) ...
#7 4.073 Selecting previously unselected package libpng-dev:amd64.
#7 4.075 Preparing to unpack .../06-libpng-dev_1.6.48-1+deb13u1_amd64.deb ...
#7 4.079 Unpacking libpng-dev:amd64 (1.6.48-1+deb13u1) ...
#7 4.116 Selecting previously unselected package libfreetype-dev:amd64.
#7 4.117 Preparing to unpack .../07-libfreetype-dev_2.13.3+dfsg-1_amd64.deb ...
#7 4.120 Unpacking libfreetype-dev:amd64 (2.13.3+dfsg-1) ...
#7 4.184 Selecting previously unselected package libjpeg62-turbo:amd64.
#7 4.185 Preparing to unpack .../08-libjpeg62-turbo_1%3a2.1.5-4_amd64.deb ...
#7 4.189 Unpacking libjpeg62-turbo:amd64 (1:2.1.5-4) ...
#7 4.216 Selecting previously unselected package libjpeg62-turbo-dev:amd64.
#7 4.218 Preparing to unpack .../09-libjpeg62-turbo-dev_1%3a2.1.5-4_amd64.deb ...
#7 4.222 Unpacking libjpeg62-turbo-dev:amd64 (1:2.1.5-4) ...
#7 4.274 Selecting previously unselected package libpng-tools.
#7 4.274 Preparing to unpack .../10-libpng-tools_1.6.48-1+deb13u1_amd64.deb ...
#7 4.277 Unpacking libpng-tools (1.6.48-1+deb13u1) ...
#7 4.309 Selecting previously unselected package libpq5:amd64.
#7 4.310 Preparing to unpack .../11-libpq5_17.7-0+deb13u1_amd64.deb ...
#7 4.313 Unpacking libpq5:amd64 (17.7-0+deb13u1) ...
#7 4.344 Selecting previously unselected package libssl-dev:amd64.
#7 4.346 Preparing to unpack .../12-libssl-dev_3.5.4-1~deb13u2_amd64.deb ...
#7 4.348 Unpacking libssl-dev:amd64 (3.5.4-1~deb13u2) ...
#7 4.558 Selecting previously unselected package libpq-dev.
#7 4.561 Preparing to unpack .../13-libpq-dev_17.7-0+deb13u1_amd64.deb ...
#7 4.564 Unpacking libpq-dev (17.7-0+deb13u1) ...
#7 4.602 Selecting previously unselected package libsharpyuv0:amd64.
#7 4.604 Preparing to unpack .../14-libsharpyuv0_1.5.0-0.1_amd64.deb ...
#7 4.607 Unpacking libsharpyuv0:amd64 (1.5.0-0.1) ...
#7 4.634 Selecting previously unselected package libsharpyuv-dev:amd64.
#7 4.636 Preparing to unpack .../15-libsharpyuv-dev_1.5.0-0.1_amd64.deb ...
#7 4.638 Unpacking libsharpyuv-dev:amd64 (1.5.0-0.1) ...
#7 4.664 Selecting previously unselected package libwebp7:amd64.
#7 4.665 Preparing to unpack .../16-libwebp7_1.5.0-0.1_amd64.deb ...
#7 4.668 Unpacking libwebp7:amd64 (1.5.0-0.1) ...
#7 4.701 Selecting previously unselected package libwebpdemux2:amd64.
#7 4.701 Preparing to unpack .../17-libwebpdemux2_1.5.0-0.1_amd64.deb ...
#7 4.705 Unpacking libwebpdemux2:amd64 (1.5.0-0.1) ...
#7 4.729 Selecting previously unselected package libwebpmux3:amd64.
#7 4.730 Preparing to unpack .../18-libwebpmux3_1.5.0-0.1_amd64.deb ...
#7 4.732 Unpacking libwebpmux3:amd64 (1.5.0-0.1) ...
#7 4.758 Selecting previously unselected package libwebpdecoder3:amd64.
#7 4.758 Preparing to unpack .../19-libwebpdecoder3_1.5.0-0.1_amd64.deb ...
#7 4.760 Unpacking libwebpdecoder3:amd64 (1.5.0-0.1) ...
#7 4.785 Selecting previously unselected package libwebp-dev:amd64.
#7 4.787 Preparing to unpack .../20-libwebp-dev_1.5.0-0.1_amd64.deb ...
#7 4.790 Unpacking libwebp-dev:amd64 (1.5.0-0.1) ...
#7 4.834 Selecting previously unselected package libxml2-dev:amd64.
#7 4.836 Preparing to unpack .../21-libxml2-dev_2.12.7+dfsg+really2.9.14-2.1+deb13u2_amd64.deb ...
#7 4.838 Unpacking libxml2-dev:amd64 (2.12.7+dfsg+really2.9.14-2.1+deb13u2) ...
#7 4.918 Selecting previously unselected package libzip5:amd64.
#7 4.919 Preparing to unpack .../22-libzip5_1.11.3-2_amd64.deb ...
#7 4.922 Unpacking libzip5:amd64 (1.11.3-2) ...
#7 4.946 Selecting previously unselected package zipcmp.
#7 4.947 Preparing to unpack .../23-zipcmp_1.11.3-2_amd64.deb ...
#7 4.950 Unpacking zipcmp (1.11.3-2) ...
#7 4.970 Selecting previously unselected package zipmerge.
#7 4.972 Preparing to unpack .../24-zipmerge_1.11.3-2_amd64.deb ...
#7 4.975 Unpacking zipmerge (1.11.3-2) ...
#7 4.996 Selecting previously unselected package ziptool.
#7 4.997 Preparing to unpack .../25-ziptool_1.11.3-2_amd64.deb ...
#7 4.999 Unpacking ziptool (1.11.3-2) ...
#7 5.022 Selecting previously unselected package libzip-dev:amd64.
#7 5.022 Preparing to unpack .../26-libzip-dev_1.11.3-2_amd64.deb ...
#7 5.024 Unpacking libzip-dev:amd64 (1.11.3-2) ...
#7 5.053 Selecting previously unselected package unzip.
#7 5.055 Preparing to unpack .../27-unzip_6.0-29_amd64.deb ...
#7 5.058 Unpacking unzip (6.0-29) ...
#7 5.094 Setting up bzip2-doc (1.0.8-6) ...
#7 5.101 Setting up libsharpyuv0:amd64 (1.5.0-0.1) ...
#7 5.106 Setting up libzip5:amd64 (1.11.3-2) ...
#7 5.112 Setting up unzip (6.0-29) ...
#7 5.117 Setting up libpq5:amd64 (17.7-0+deb13u1) ...
#7 5.122 Setting up libwebpdecoder3:amd64 (1.5.0-0.1) ...
#7 5.128 Setting up zipmerge (1.11.3-2) ...
#7 5.133 Setting up libxml2-dev:amd64 (2.12.7+dfsg+really2.9.14-2.1+deb13u2) ...
#7 5.138 Setting up libjpeg62-turbo:amd64 (1:2.1.5-4) ...
#7 5.145 Setting up libjpeg62-turbo-dev:amd64 (1:2.1.5-4) ...
#7 5.150 Setting up libssl-dev:amd64 (3.5.4-1~deb13u2) ...
#7 5.156 Setting up libpng16-16t64:amd64 (1.6.48-1+deb13u1) ...
#7 5.163 Setting up libwebp7:amd64 (1.5.0-0.1) ...
#7 5.168 Setting up zlib1g-dev:amd64 (1:1.3.dfsg+really1.3.1-1+b1) ...
#7 5.174 Setting up zipcmp (1.11.3-2) ...
#7 5.179 Setting up libsharpyuv-dev:amd64 (1.5.0-0.1) ...
#7 5.184 Setting up ziptool (1.11.3-2) ...
#7 5.189 Setting up libwebpmux3:amd64 (1.5.0-0.1) ...
#7 5.195 Setting up libbrotli-dev:amd64 (1.1.0-2+b7) ...
#7 5.200 Setting up libbz2-dev:amd64 (1.0.8-6) ...
#7 5.205 Setting up libzip-dev:amd64 (1.11.3-2) ...
#7 5.210 Setting up libpng-tools (1.6.48-1+deb13u1) ...
#7 5.215 Setting up libwebpdemux2:amd64 (1.5.0-0.1) ...
#7 5.220 Setting up libpng-dev:amd64 (1.6.48-1+deb13u1) ...
#7 5.226 Setting up libpq-dev (17.7-0+deb13u1) ...
#7 5.231 Setting up libwebp-dev:amd64 (1.5.0-0.1) ...
#7 5.236 Setting up libfreetype6:amd64 (2.13.3+dfsg-1) ...
#7 5.241 Setting up libfreetype-dev:amd64 (2.13.3+dfsg-1) ...
#7 5.247 Processing triggers for libc-bin (2.41-12+deb13u1) ...
#7 8.358 Configuring for:
#7 8.358 PHP Api Version:         20220829
#7 8.358 Zend Module Api No:      20220829
#7 8.358 Zend Extension Api No:   420220829
#7 9.069 checking for grep that handles long lines and -e... /usr/bin/grep
#7 9.072 checking for egrep... /usr/bin/grep -E
#7 9.075 checking for a sed that does not truncate output... /usr/bin/sed
#7 9.111 checking for pkg-config... /usr/bin/pkg-config
#7 9.112 checking pkg-config is at least version 0.9.0... yes
#7 9.114 checking for cc... cc
#7 9.143 checking whether the C compiler works... yes
#7 9.191 checking for C compiler default output file name... a.out
#7 9.193 checking for suffix of executables...
#7 9.232 checking whether we are cross compiling... no
#7 9.288 checking for suffix of object files... o
#7 9.311 checking whether the compiler supports GNU C... yes
#7 9.332 checking whether cc accepts -g... yes
#7 9.353 checking for cc option to enable C11 features... none needed
#7 9.397 checking how to run the C preprocessor... cc -E
#7 9.455 checking for egrep -e... (cached) /usr/bin/grep -E
#7 9.457 checking for icc... no
#7 9.468 checking for suncc... no
#7 9.480 checking for system library directory... lib
#7 9.480 checking if compiler supports -Wl,-rpath,... yes
#7 9.529 checking build system type... x86_64-pc-linux-gnu
#7 9.535 checking host system type... x86_64-pc-linux-gnu
#7 9.535 checking target system type... x86_64-pc-linux-gnu
#7 9.575 checking for PHP prefix... /usr/local
#7 9.575 checking for PHP includes... -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib
#7 9.575 checking for PHP extension directory... /usr/local/lib/php/extensions/no-debug-non-zts-20220829
#7 9.575 checking for PHP installed headers prefix... /usr/local/include/php
#7 9.575 checking if debug is enabled... no
#7 9.601 checking if zts is enabled... no
#7 9.621 checking for gawk... no
#7 9.621 checking for nawk... nawk
#7 9.622 checking if nawk is broken... no
#7 9.624 checking for GD support... yes, shared
#7 9.625 checking for external libgd... no
#7 9.625 checking for libavif... no
#7 9.625 checking for libwebp... no
#7 9.625 checking for libjpeg... yes
#7 9.626 checking for libXpm... no
#7 9.626 checking for FreeType 2... yes
#7 9.627 checking whether to enable JIS-mapped Japanese font support in GD... no
#7 9.630 checking for fabsf... no
#7 9.676 checking for floorf... no
#7 9.721 checking for zlib... yes
#7 9.732 checking for libpng... yes
#7 9.747 checking for libjpeg... yes
#7 9.757 checking for freetype2... yes
#7 9.885 checking for a sed that does not truncate output... /usr/bin/sed
#7 9.891 checking for ld used by cc... /usr/bin/ld
#7 9.898 checking if the linker (/usr/bin/ld) is GNU ld... yes
#7 9.902 checking for /usr/bin/ld option to reload object files... -r
#7 9.902 checking for BSD-compatible nm... /usr/bin/nm -B
#7 9.906 checking whether ln -s works... yes
#7 9.907 checking how to recognize dependent libraries... pass_all
#7 9.928 checking for stdio.h... yes
#7 9.948 checking for stdlib.h... yes
#7 9.974 checking for string.h... yes
#7 10.000 checking for inttypes.h... yes
#7 10.03 checking for stdint.h... yes
#7 10.05 checking for strings.h... yes
#7 10.08 checking for sys/stat.h... yes
#7 10.10 checking for sys/types.h... yes
#7 10.13 checking for unistd.h... yes
#7 10.17 checking for dlfcn.h... yes
#7 10.21 checking the maximum length of command line arguments... 1572864
#7 10.22 checking command to parse /usr/bin/nm -B output from cc object... ok
#7 10.30 checking for objdir... .libs
#7 10.30 checking for ar... ar
#7 10.30 checking for ranlib... ranlib
#7 10.30 checking for strip... strip
#7 10.36 checking if cc supports -fno-rtti -fno-exceptions... no
#7 10.39 checking for cc option to produce PIC... -fPIC
#7 10.39 checking if cc PIC flag -fPIC works... yes
#7 10.41 checking if cc static flag -static works... yes
#7 10.52 checking if cc supports -c -o file.o... yes
#7 10.56 checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
#7 10.59 checking whether -lc should be explicitly linked in... no
#7 10.62 checking dynamic linker characteristics... GNU/Linux ld.so
#7 10.64 checking how to hardcode library paths into programs... immediate
#7 10.65 checking whether stripping libraries is possible... yes
#7 10.65 checking if libtool supports shared libraries... yes
#7 10.65 checking whether to build shared libraries... yes
#7 10.65 checking whether to build static libraries... no
#7 10.83
#7 10.83 creating libtool
#7 10.85 appending configuration tag "CXX" to libtool
#7 10.94 configure: patching config.h.in
#7 10.95 configure: creating ./config.status
#7 11.07 config.status: creating config.h
#7 11.15 Configuring for:
#7 11.15 PHP Api Version:         20220829
#7 11.15 Zend Module Api No:      20220829
#7 11.15 Zend Extension Api No:   420220829
#7 11.78 checking for grep that handles long lines and -e... /usr/bin/grep
#7 11.78 checking for egrep... /usr/bin/grep -E
#7 11.78 checking for a sed that does not truncate output... /usr/bin/sed
#7 11.82 checking for pkg-config... /usr/bin/pkg-config
#7 11.82 checking pkg-config is at least version 0.9.0... yes
#7 11.82 checking for cc... cc
#7 11.85 checking whether the C compiler works... yes
#7 11.89 checking for C compiler default output file name... a.out
#7 11.89 checking for suffix of executables...
#7 11.93 checking whether we are cross compiling... no
#7 11.98 checking for suffix of object files... o
#7 12.00 checking whether the compiler supports GNU C... yes
#7 12.02 checking whether cc accepts -g... yes
#7 12.04 checking for cc option to enable C11 features... none needed
#7 12.10 checking how to run the C preprocessor... cc -E
#7 12.16 checking for egrep -e... (cached) /usr/bin/grep -E
#7 12.16 checking for icc... no
#7 12.17 checking for suncc... no
#7 12.19 checking for system library directory... lib
#7 12.19 checking if compiler supports -Wl,-rpath,... yes
#7 12.24 checking build system type... x86_64-pc-linux-gnu
#7 12.24 checking host system type... x86_64-pc-linux-gnu
#7 12.24 checking target system type... x86_64-pc-linux-gnu
#7 12.28 checking for PHP prefix... /usr/local
#7 12.28 checking for PHP includes... -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib
#7 12.28 checking for PHP extension directory... /usr/local/lib/php/extensions/no-debug-non-zts-20220829
#7 12.28 checking for PHP installed headers prefix... /usr/local/include/php
#7 12.28 checking if debug is enabled... no
#7 12.30 checking if zts is enabled... no
#7 12.32 checking for gawk... no
#7 12.32 checking for nawk... nawk
#7 12.32 checking if nawk is broken... no
#7 12.33 checking whether to enable PDO support... yes, shared
#7 12.34 checking for a sed that does not truncate output... /usr/bin/sed
#7 12.35 checking for ld used by cc... /usr/bin/ld
#7 12.35 checking if the linker (/usr/bin/ld) is GNU ld... yes
#7 12.36 checking for /usr/bin/ld option to reload object files... -r
#7 12.36 checking for BSD-compatible nm... /usr/bin/nm -B
#7 12.36 checking whether ln -s works... yes
#7 12.36 checking how to recognize dependent libraries... pass_all
#7 12.38 checking for stdio.h... yes
#7 12.41 checking for stdlib.h... yes
#7 12.43 checking for string.h... yes
#7 12.46 checking for inttypes.h... yes
#7 12.49 checking for stdint.h... yes
#7 12.52 checking for strings.h... yes
#7 12.54 checking for sys/stat.h... yes
#7 12.57 checking for sys/types.h... yes
#7 12.60 checking for unistd.h... yes
#7 12.63 checking for dlfcn.h... yes
#7 12.71 checking the maximum length of command line arguments... 1572864
#7 12.73 checking command to parse /usr/bin/nm -B output from cc object... ok
#7 12.90 checking for objdir... .libs
#7 12.91 checking for ar... ar
#7 12.91 checking for ranlib... ranlib
#7 12.91 checking for strip... strip
#7 13.05 checking if cc supports -fno-rtti -fno-exceptions... no
#7 13.10 checking for cc option to produce PIC... -fPIC
#7 13.10 checking if cc PIC flag -fPIC works... yes
#7 13.15 checking if cc static flag -static works... yes
#7 13.27 checking if cc supports -c -o file.o... yes
#7 13.30 checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
#7 13.31 checking whether -lc should be explicitly linked in... no
#7 13.34 checking dynamic linker characteristics... GNU/Linux ld.so
#7 13.37 checking how to hardcode library paths into programs... immediate
#7 13.37 checking whether stripping libraries is possible... yes
#7 13.37 checking if libtool supports shared libraries... yes
#7 13.37 checking whether to build shared libraries... yes
#7 13.37 checking whether to build static libraries... no
#7 13.55
#7 13.55 creating libtool
#7 13.57 appending configuration tag "CXX" to libtool
#7 13.65 configure: patching config.h.in
#7 13.65 configure: creating ./config.status
#7 13.71 config.status: creating config.h
#7 13.75 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo.c -o pdo.lo  -MMD -MF pdo.dep -MT pdo.lo
#7 13.87 mkdir .libs
#7 13.87  cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo.c -MMD -MF pdo.dep -MT pdo.lo  -fPIC -DPIC -o .libs/pdo.o
#7 14.10 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_dbh.c -o pdo_dbh.lo  -MMD -MF pdo_dbh.dep -MT pdo_dbh.lo
#7 14.21  cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_dbh.c -MMD -MF pdo_dbh.dep -MT pdo_dbh.lo  -fPIC -DPIC -o .libs/pdo_dbh.o
#7 14.85 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_stmt.c -o pdo_stmt.lo  -MMD -MF pdo_stmt.dep -MT pdo_stmt.lo
#7 14.96  cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_stmt.c -MMD -MF pdo_stmt.dep -MT pdo_stmt.lo  -fPIC -DPIC -o .libs/pdo_stmt.o
#7 15.70 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_sql_parser.c -o pdo_sql_parser.lo  -MMD -MF pdo_sql_parser.dep -MT pdo_sql_parser.lo
#7 15.81  cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_sql_parser.c -MMD -MF pdo_sql_parser.dep -MT pdo_sql_parser.lo  -fPIC -DPIC -o .libs/pdo_sql_parser.o
#7 16.04 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_sqlstate.c -o pdo_sqlstate.lo  -MMD -MF pdo_sqlstate.dep -MT pdo_sqlstate.lo
#7 16.24  cc -I. -I/usr/src/php/ext/pdo -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo/pdo_sqlstate.c -MMD -MF pdo_sqlstate.dep -MT pdo_sqlstate.lo  -fPIC -DPIC -o .libs/pdo_sqlstate.o
#7 16.35 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=link cc -shared -I/usr/src/php/ext/pdo/include -I/usr/src/php/ext/pdo/main -I/usr/src/php/ext/pdo -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE  -Wl,-O1 -pie  -o pdo.la -export-dynamic -avoid-version -prefer-pic -module -rpath /usr/src/php/ext/pdo/modules  pdo.lo pdo_dbh.lo pdo_stmt.lo pdo_sql_parser.lo pdo_sqlstate.lo
#7 16.49 cc -shared  .libs/pdo.o .libs/pdo_dbh.o .libs/pdo_stmt.o .libs/pdo_sql_parser.o .libs/pdo_sqlstate.o   -Wl,-O1 -Wl,-soname -Wl,pdo.so -o .libs/pdo.so
#7 16.51 creating pdo.la
#7 16.52 (cd .libs && rm -f pdo.la && ln -s ../pdo.la pdo.la)
#7 16.52 /bin/bash /usr/src/php/ext/pdo/libtool --tag=CC --mode=install cp ./pdo.la /usr/src/php/ext/pdo/modules
#7 16.56 cp ./.libs/pdo.so /usr/src/php/ext/pdo/modules/pdo.so
#7 16.57 cp ./.libs/pdo.lai /usr/src/php/ext/pdo/modules/pdo.la
#7 16.58 PATH="$PATH:/sbin" ldconfig -n /usr/src/php/ext/pdo/modules
#7 16.59 ----------------------------------------------------------------------
#7 16.59 Libraries have been installed in:
#7 16.59    /usr/src/php/ext/pdo/modules
#7 16.59
#7 16.59 If you ever happen to want to link against installed libraries
#7 16.59 in a given directory, LIBDIR, you must either use libtool, and
#7 16.59 specify the full pathname of the library, or use the `-LLIBDIR'
#7 16.59 flag during linking and do at least one of the following:
#7 16.59    - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
#7 16.59      during execution
#7 16.59    - add LIBDIR to the `LD_RUN_PATH' environment variable
#7 16.59      during linking
#7 16.59    - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
#7 16.59    - have your system administrator add LIBDIR to `/etc/ld.so.conf'
#7 16.59
#7 16.59 See any operating system documentation about shared libraries for
#7 16.59 more information, such as the ld(1) and ld.so(8) manual pages.
#7 16.59 ----------------------------------------------------------------------
#7 16.59
#7 16.59 Build complete.
#7 16.60 Don't forget to run 'make test'.
#7 16.60
#7 16.63 + strip --strip-all modules/pdo.so
#7 16.65 Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20220829/
#7 16.78 Installing header files:          /usr/local/include/php/
#7 16.87 Installing PDO headers:           /usr/local/include/php/ext/pdo/
#7 17.01
#7 17.01 warning: pdo (pdo) is already loaded!
#7 17.01
#7 17.01 find . -name \*.gcno -o -name \*.gcda | xargs rm -f
#7 17.02 find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
#7 17.03 find . -name \*.la -o -name \*.a | xargs rm -f
#7 17.03 find . -name \*.so | xargs rm -f
#7 17.03 find . -name .libs -a -type d|xargs rm -rf
#7 17.04 rm -f libphp.la      modules/* libs/*
#7 17.04 rm -f ext/opcache/jit/zend_jit_x86.c
#7 17.04 rm -f ext/opcache/jit/zend_jit_arm64.c
#7 17.05 rm -f ext/opcache/minilua
#7 17.08 Configuring for:
#7 17.08 PHP Api Version:         20220829
#7 17.08 Zend Module Api No:      20220829
#7 17.08 Zend Extension Api No:   420220829
#7 17.68 checking for grep that handles long lines and -e... /usr/bin/grep
#7 17.68 checking for egrep... /usr/bin/grep -E
#7 17.69 checking for a sed that does not truncate output... /usr/bin/sed
#7 17.72 checking for pkg-config... /usr/bin/pkg-config
#7 17.72 checking pkg-config is at least version 0.9.0... yes
#7 17.73 checking for cc... cc
#7 17.76 checking whether the C compiler works... yes
#7 17.80 checking for C compiler default output file name... a.out
#7 17.80 checking for suffix of executables...
#7 17.84 checking whether we are cross compiling... no
#7 17.89 checking for suffix of object files... o
#7 17.91 checking whether the compiler supports GNU C... yes
#7 17.93 checking whether cc accepts -g... yes
#7 17.96 checking for cc option to enable C11 features... none needed
#7 18.00 checking how to run the C preprocessor... cc -E
#7 18.06 checking for egrep -e... (cached) /usr/bin/grep -E
#7 18.06 checking for icc... no
#7 18.07 checking for suncc... no
#7 18.08 checking for system library directory... lib
#7 18.08 checking if compiler supports -Wl,-rpath,... yes
#7 18.13 checking build system type... x86_64-pc-linux-gnu
#7 18.14 checking host system type... x86_64-pc-linux-gnu
#7 18.14 checking target system type... x86_64-pc-linux-gnu
#7 18.18 checking for PHP prefix... /usr/local
#7 18.18 checking for PHP includes... -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib
#7 18.18 checking for PHP extension directory... /usr/local/lib/php/extensions/no-debug-non-zts-20220829
#7 18.18 checking for PHP installed headers prefix... /usr/local/include/php
#7 18.18 checking if debug is enabled... no
#7 18.20 checking if zts is enabled... no
#7 18.22 checking for gawk... no
#7 18.22 checking for nawk... nawk
#7 18.22 checking if nawk is broken... no
#7 18.23 checking for PostgreSQL support for PDO... yes, shared
#7 18.23 checking for pg_config... /usr/bin/pg_config
#7 18.24 checking for PQlibVersion in -lpq... yes
#7 18.31 checking for PDO includes... /usr/local/include/php/ext
#7 18.32 checking for a sed that does not truncate output... /usr/bin/sed
#7 18.33 checking for ld used by cc... /usr/bin/ld
#7 18.33 checking if the linker (/usr/bin/ld) is GNU ld... yes
#7 18.34 checking for /usr/bin/ld option to reload object files... -r
#7 18.34 checking for BSD-compatible nm... /usr/bin/nm -B
#7 18.34 checking whether ln -s works... yes
#7 18.34 checking how to recognize dependent libraries... pass_all
#7 18.36 checking for stdio.h... yes
#7 18.37 checking for stdlib.h... yes
#7 18.40 checking for string.h... yes
#7 18.42 checking for inttypes.h... yes
#7 18.44 checking for stdint.h... yes
#7 18.48 checking for strings.h... yes
#7 18.50 checking for sys/stat.h... yes
#7 18.53 checking for sys/types.h... yes
#7 18.56 checking for unistd.h... yes
#7 18.59 checking for dlfcn.h... yes
#7 18.61 checking the maximum length of command line arguments... 1572864
#7 18.62 checking command to parse /usr/bin/nm -B output from cc object... ok
#7 18.69 checking for objdir... .libs
#7 18.69 checking for ar... ar
#7 18.69 checking for ranlib... ranlib
#7 18.70 checking for strip... strip
#7 18.75 checking if cc supports -fno-rtti -fno-exceptions... no
#7 18.77 checking for cc option to produce PIC... -fPIC
#7 18.77 checking if cc PIC flag -fPIC works... yes
#7 18.80 checking if cc static flag -static works... yes
#7 18.87 checking if cc supports -c -o file.o... yes
#7 18.90 checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
#7 18.92 checking whether -lc should be explicitly linked in... no
#7 18.94 checking dynamic linker characteristics... GNU/Linux ld.so
#7 18.96 checking how to hardcode library paths into programs... immediate
#7 18.97 checking whether stripping libraries is possible... yes
#7 18.97 checking if libtool supports shared libraries... yes
#7 18.97 checking whether to build shared libraries... yes
#7 18.97 checking whether to build static libraries... no
#7 19.15
#7 19.15 creating libtool
#7 19.17 appending configuration tag "CXX" to libtool
#7 19.25 configure: patching config.h.in
#7 19.25 configure: creating ./config.status
#7 19.32 config.status: creating config.h
#7 19.36 /bin/bash /usr/src/php/ext/pdo_pgsql/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo_pgsql -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/local/include/php/ext -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo_pgsql/pdo_pgsql.c -o pdo_pgsql.lo  -MMD -MF pdo_pgsql.dep -MT pdo_pgsql.lo
#7 19.47 mkdir .libs
#7 19.48  cc -I. -I/usr/src/php/ext/pdo_pgsql -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/local/include/php/ext -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo_pgsql/pdo_pgsql.c -MMD -MF pdo_pgsql.dep -MT pdo_pgsql.lo  -fPIC -DPIC -o .libs/pdo_pgsql.o
#7 19.60 /bin/bash /usr/src/php/ext/pdo_pgsql/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo_pgsql -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/local/include/php/ext -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo_pgsql/pgsql_driver.c -o pgsql_driver.lo  -MMD -MF pgsql_driver.dep -MT pgsql_driver.lo
#7 19.71  cc -I. -I/usr/src/php/ext/pdo_pgsql -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/local/include/php/ext -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo_pgsql/pgsql_driver.c -MMD -MF pgsql_driver.dep -MT pgsql_driver.lo  -fPIC -DPIC -o .libs/pgsql_driver.o
#7 20.14 /bin/bash /usr/src/php/ext/pdo_pgsql/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/pdo_pgsql -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/local/include/php/ext -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo_pgsql/pgsql_statement.c -o pgsql_statement.lo  -MMD -MF pgsql_statement.dep -MT pgsql_statement.lo
#7 20.27  cc -I. -I/usr/src/php/ext/pdo_pgsql -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/local/include/php/ext -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/pdo_pgsql/pgsql_statement.c -MMD -MF pgsql_statement.dep -MT pgsql_statement.lo  -fPIC -DPIC -o .libs/pgsql_statement.o
#7 20.54 /bin/bash /usr/src/php/ext/pdo_pgsql/libtool --tag=CC --mode=link cc -shared -I/usr/src/php/ext/pdo_pgsql/include -I/usr/src/php/ext/pdo_pgsql/main -I/usr/src/php/ext/pdo_pgsql -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/postgresql  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE  -Wl,-O1 -pie  -o pdo_pgsql.la -export-dynamic -avoid-version -prefer-pic -module -rpath /usr/src/php/ext/pdo_pgsql/modules  pdo_pgsql.lo pgsql_driver.lo pgsql_statement.lo -Wl,-rpath,/usr/lib/x86_64-linux-gnu -L/usr/lib/x86_64-linux-gnu -lpq
#7 20.67 cc -shared  .libs/pdo_pgsql.o .libs/pgsql_driver.o .libs/pgsql_statement.o  -L/usr/lib/x86_64-linux-gnu -lpq  -Wl,-O1 -Wl,-rpath -Wl,/usr/lib/x86_64-linux-gnu -Wl,-soname -Wl,pdo_pgsql.so -o .libs/pdo_pgsql.so
#7 20.72 creating pdo_pgsql.la
#7 20.73 (cd .libs && rm -f pdo_pgsql.la && ln -s ../pdo_pgsql.la pdo_pgsql.la)
#7 20.74 /bin/bash /usr/src/php/ext/pdo_pgsql/libtool --tag=CC --mode=install cp ./pdo_pgsql.la /usr/src/php/ext/pdo_pgsql/modules
#7 20.77 cp ./.libs/pdo_pgsql.so /usr/src/php/ext/pdo_pgsql/modules/pdo_pgsql.so
#7 20.77 cp ./.libs/pdo_pgsql.lai /usr/src/php/ext/pdo_pgsql/modules/pdo_pgsql.la
#7 20.79 PATH="$PATH:/sbin" ldconfig -n /usr/src/php/ext/pdo_pgsql/modules
#7 20.80 ----------------------------------------------------------------------
#7 20.80 Libraries have been installed in:
#7 20.80    /usr/src/php/ext/pdo_pgsql/modules
#7 20.80
#7 20.80 If you ever happen to want to link against installed libraries
#7 20.80 in a given directory, LIBDIR, you must either use libtool, and
#7 20.80 specify the full pathname of the library, or use the `-LLIBDIR'
#7 20.80 flag during linking and do at least one of the following:
#7 20.80    - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
#7 20.80      during execution
#7 20.80    - add LIBDIR to the `LD_RUN_PATH' environment variable
#7 20.80      during linking
#7 20.80    - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
#7 20.80    - have your system administrator add LIBDIR to `/etc/ld.so.conf'
#7 20.80
#7 20.80 See any operating system documentation about shared libraries for
#7 20.80 more information, such as the ld(1) and ld.so(8) manual pages.
#7 20.80 ----------------------------------------------------------------------
#7 20.80
#7 20.80 Build complete.
#7 20.80 Don't forget to run 'make test'.
#7 20.81
#7 20.82 + strip --strip-all modules/pdo_pgsql.so
#7 20.85 Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20220829/
#7 20.92 find . -name \*.gcno -o -name \*.gcda | xargs rm -f
#7 20.93 find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
#7 20.93 find . -name \*.la -o -name \*.a | xargs rm -f
#7 20.94 find . -name \*.so | xargs rm -f
#7 20.94 find . -name .libs -a -type d|xargs rm -rf
#7 20.95 rm -f libphp.la      modules/* libs/*
#7 20.95 rm -f ext/opcache/jit/zend_jit_x86.c
#7 20.95 rm -f ext/opcache/jit/zend_jit_arm64.c
#7 20.95 rm -f ext/opcache/minilua
#7 20.98 Configuring for:
#7 20.98 PHP Api Version:         20220829
#7 20.99 Zend Module Api No:      20220829
#7 20.99 Zend Extension Api No:   420220829
#7 21.72 checking for grep that handles long lines and -e... /usr/bin/grep
#7 21.73 checking for egrep... /usr/bin/grep -E
#7 21.73 checking for a sed that does not truncate output... /usr/bin/sed
#7 21.76 checking for pkg-config... /usr/bin/pkg-config
#7 21.76 checking pkg-config is at least version 0.9.0... yes
#7 21.77 checking for cc... cc
#7 21.80 checking whether the C compiler works... yes
#7 21.84 checking for C compiler default output file name... a.out
#7 21.84 checking for suffix of executables...
#7 21.89 checking whether we are cross compiling... no
#7 21.95 checking for suffix of object files... o
#7 21.97 checking whether the compiler supports GNU C... yes
#7 22.00 checking whether cc accepts -g... yes
#7 22.02 checking for cc option to enable C11 features... none needed
#7 22.07 checking how to run the C preprocessor... cc -E
#7 22.12 checking for egrep -e... (cached) /usr/bin/grep -E
#7 22.12 checking for icc... no
#7 22.14 checking for suncc... no
#7 22.15 checking for system library directory... lib
#7 22.15 checking if compiler supports -Wl,-rpath,... yes
#7 22.19 checking build system type... x86_64-pc-linux-gnu
#7 22.20 checking host system type... x86_64-pc-linux-gnu
#7 22.20 checking target system type... x86_64-pc-linux-gnu
#7 22.24 checking for PHP prefix... /usr/local
#7 22.24 checking for PHP includes... -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib
#7 22.24 checking for PHP extension directory... /usr/local/lib/php/extensions/no-debug-non-zts-20220829
#7 22.24 checking for PHP installed headers prefix... /usr/local/include/php
#7 22.24 checking if debug is enabled... no
#7 22.26 checking if zts is enabled... no
#7 22.28 checking for gawk... no
#7 22.28 checking for nawk... nawk
#7 22.28 checking if nawk is broken... no
#7 22.28 checking for zip archive read/write support... yes, shared
#7 22.29 checking for libzip >= 0.11 libzip != 1.3.1 libzip != 1.7.0... yes
#7 22.30 checking for zip_file_set_mtime in -lzip... yes
#7 22.36 checking for zip_file_set_encryption in -lzip... yes
#7 22.41 checking for zip_libzip_version in -lzip... yes
#7 22.47 checking for zip_register_progress_callback_with_state in -lzip... yes
#7 22.53 checking for zip_register_cancel_callback_with_state in -lzip... yes
#7 22.59 checking for zip_compression_method_supported in -lzip... yes
#7 22.65 checking for a sed that does not truncate output... /usr/bin/sed
#7 22.65 checking for ld used by cc... /usr/bin/ld
#7 22.66 checking if the linker (/usr/bin/ld) is GNU ld... yes
#7 22.66 checking for /usr/bin/ld option to reload object files... -r
#7 22.66 checking for BSD-compatible nm... /usr/bin/nm -B
#7 22.67 checking whether ln -s works... yes
#7 22.67 checking how to recognize dependent libraries... pass_all
#7 22.69 checking for stdio.h... yes
#7 22.71 checking for stdlib.h... yes
#7 22.73 checking for string.h... yes
#7 22.75 checking for inttypes.h... yes
#7 22.78 checking for stdint.h... yes
#7 22.81 checking for strings.h... yes
#7 22.83 checking for sys/stat.h... yes
#7 22.86 checking for sys/types.h... yes
#7 22.89 checking for unistd.h... yes
#7 22.92 checking for dlfcn.h... yes
#7 22.95 checking the maximum length of command line arguments... 1572864
#7 22.95 checking command to parse /usr/bin/nm -B output from cc object... ok
#7 23.03 checking for objdir... .libs
#7 23.03 checking for ar... ar
#7 23.03 checking for ranlib... ranlib
#7 23.03 checking for strip... strip
#7 23.09 checking if cc supports -fno-rtti -fno-exceptions... no
#7 23.11 checking for cc option to produce PIC... -fPIC
#7 23.11 checking if cc PIC flag -fPIC works... yes
#7 23.13 checking if cc static flag -static works... yes
#7 23.22 checking if cc supports -c -o file.o... yes
#7 23.26 checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
#7 23.27 checking whether -lc should be explicitly linked in... no
#7 23.31 checking dynamic linker characteristics... GNU/Linux ld.so
#7 23.33 checking how to hardcode library paths into programs... immediate
#7 23.33 checking whether stripping libraries is possible... yes
#7 23.34 checking if libtool supports shared libraries... yes
#7 23.34 checking whether to build shared libraries... yes
#7 23.34 checking whether to build static libraries... no
#7 23.52
#7 23.52 creating libtool
#7 23.54 appending configuration tag "CXX" to libtool
#7 23.63 configure: patching config.h.in
#7 23.63 configure: creating ./config.status
#7 23.71 config.status: creating config.h
#7 23.79 /bin/bash /usr/src/php/ext/zip/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/zip -I/usr/src/php/ext/zip/include -I/usr/src/php/ext/zip/main -I/usr/src/php/ext/zip -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/zip/php_zip.c -o php_zip.lo  -MMD -MF php_zip.dep -MT php_zip.lo
#7 23.97 mkdir .libs
#7 23.98  cc -I. -I/usr/src/php/ext/zip -I/usr/src/php/ext/zip/include -I/usr/src/php/ext/zip/main -I/usr/src/php/ext/zip -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/zip/php_zip.c -MMD -MF php_zip.dep -MT php_zip.lo  -fPIC -DPIC -o .libs/php_zip.o
#7 25.10 /bin/bash /usr/src/php/ext/zip/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/zip -I/usr/src/php/ext/zip/include -I/usr/src/php/ext/zip/main -I/usr/src/php/ext/zip -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/zip/zip_stream.c -o zip_stream.lo  -MMD -MF zip_stream.dep -MT zip_stream.lo
#7 25.21  cc -I. -I/usr/src/php/ext/zip -I/usr/src/php/ext/zip/include -I/usr/src/php/ext/zip/main -I/usr/src/php/ext/zip -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/zip/zip_stream.c -MMD -MF zip_stream.dep -MT zip_stream.lo  -fPIC -DPIC -o .libs/zip_stream.o
#7 25.40 /bin/bash /usr/src/php/ext/zip/libtool --tag=CC --mode=link cc -shared -I/usr/src/php/ext/zip/include -I/usr/src/php/ext/zip/main -I/usr/src/php/ext/zip -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE  -Wl,-O1 -pie  -o zip.la -export-dynamic -avoid-version -prefer-pic -module -rpath /usr/src/php/ext/zip/modules  php_zip.lo zip_stream.lo -lzip
#7 25.51 cc -shared  .libs/php_zip.o .libs/zip_stream.o  -lzip  -Wl,-O1 -Wl,-soname -Wl,zip.so -o .libs/zip.so
#7 25.53 creating zip.la
#7 25.54 (cd .libs && rm -f zip.la && ln -s ../zip.la zip.la)
#7 25.54 /bin/bash /usr/src/php/ext/zip/libtool --tag=CC --mode=install cp ./zip.la /usr/src/php/ext/zip/modules
#7 25.57 cp ./.libs/zip.so /usr/src/php/ext/zip/modules/zip.so
#7 25.58 cp ./.libs/zip.lai /usr/src/php/ext/zip/modules/zip.la
#7 25.60 PATH="$PATH:/sbin" ldconfig -n /usr/src/php/ext/zip/modules
#7 25.60 ----------------------------------------------------------------------
#7 25.60 Libraries have been installed in:
#7 25.60    /usr/src/php/ext/zip/modules
#7 25.60
#7 25.60 If you ever happen to want to link against installed libraries
#7 25.60 in a given directory, LIBDIR, you must either use libtool, and
#7 25.60 specify the full pathname of the library, or use the `-LLIBDIR'
#7 25.60 flag during linking and do at least one of the following:
#7 25.60    - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
#7 25.60      during execution
#7 25.60    - add LIBDIR to the `LD_RUN_PATH' environment variable
#7 25.60      during linking
#7 25.60    - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
#7 25.60    - have your system administrator add LIBDIR to `/etc/ld.so.conf'
#7 25.60
#7 25.60 See any operating system documentation about shared libraries for
#7 25.60 more information, such as the ld(1) and ld.so(8) manual pages.
#7 25.60 ----------------------------------------------------------------------
#7 25.60
#7 25.61 Build complete.
#7 25.61 Don't forget to run 'make test'.
#7 25.61
#7 25.63 + strip --strip-all modules/zip.so
#7 25.65 Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20220829/
#7 25.73 find . -name \*.gcno -o -name \*.gcda | xargs rm -f
#7 25.74 find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
#7 25.74 find . -name \*.la -o -name \*.a | xargs rm -f
#7 25.75 find . -name \*.so | xargs rm -f
#7 25.75 find . -name .libs -a -type d|xargs rm -rf
#7 25.76 rm -f libphp.la      modules/* libs/*
#7 25.76 rm -f ext/opcache/jit/zend_jit_x86.c
#7 25.76 rm -f ext/opcache/jit/zend_jit_arm64.c
#7 25.76 rm -f ext/opcache/minilua
#7 25.77 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/gd.c -o gd.lo  -MMD -MF gd.dep -MT gd.lo
#7 25.88 mkdir .libs
#7 25.89  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/gd.c -MMD -MF gd.dep -MT gd.lo  -fPIC -DPIC -o .libs/gd.o
#7 26.76 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd.c -o libgd/gd.lo  -MMD -MF libgd/gd.dep -MT libgd/gd.lo
#7 26.87 mkdir libgd/.libs
#7 26.87  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd.c -MMD -MF libgd/gd.dep -MT libgd/gd.lo  -fPIC -DPIC -o libgd/.libs/gd.o
#7 27.66 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gd.c -o libgd/gd_gd.lo  -MMD -MF libgd/gd_gd.dep -MT libgd/gd_gd.lo
#7 27.78  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gd.c -MMD -MF libgd/gd_gd.dep -MT libgd/gd_gd.lo  -fPIC -DPIC -o libgd/.libs/gd_gd.o
#7 27.87 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gd2.c -o libgd/gd_gd2.lo  -MMD -MF libgd/gd_gd2.dep -MT libgd/gd_gd2.lo
#7 27.98  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gd2.c -MMD -MF libgd/gd_gd2.dep -MT libgd/gd_gd2.lo  -fPIC -DPIC -o libgd/.libs/gd_gd2.o
#7 28.24 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io.c -o libgd/gd_io.lo  -MMD -MF libgd/gd_io.dep -MT libgd/gd_io.lo
#7 28.36  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io.c -MMD -MF libgd/gd_io.dep -MT libgd/gd_io.lo  -fPIC -DPIC -o libgd/.libs/gd_io.o
#7 28.44 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io_dp.c -o libgd/gd_io_dp.lo  -MMD -MF libgd/gd_io_dp.dep -MT libgd/gd_io_dp.lo
#7 28.55  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io_dp.c -MMD -MF libgd/gd_io_dp.dep -MT libgd/gd_io_dp.lo  -fPIC -DPIC -o libgd/.libs/gd_io_dp.o
#7 28.69 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io_file.c -o libgd/gd_io_file.lo  -MMD -MF libgd/gd_io_file.dep -MT libgd/gd_io_file.lo
#7 28.82  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io_file.c -MMD -MF libgd/gd_io_file.dep -MT libgd/gd_io_file.lo  -fPIC -DPIC -o libgd/.libs/gd_io_file.o
#7 28.94 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_ss.c -o libgd/gd_ss.lo  -MMD -MF libgd/gd_ss.dep -MT libgd/gd_ss.lo
#7 29.07  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_ss.c -MMD -MF libgd/gd_ss.dep -MT libgd/gd_ss.lo  -fPIC -DPIC -o libgd/.libs/gd_ss.o
#7 29.13 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io_ss.c -o libgd/gd_io_ss.lo  -MMD -MF libgd/gd_io_ss.dep -MT libgd/gd_io_ss.lo
#7 29.25  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_io_ss.c -MMD -MF libgd/gd_io_ss.dep -MT libgd/gd_io_ss.lo  -fPIC -DPIC -o libgd/.libs/gd_io_ss.o
#7 29.39 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_webp.c -o libgd/gd_webp.lo  -MMD -MF libgd/gd_webp.dep -MT libgd/gd_webp.lo
#7 29.51  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_webp.c -MMD -MF libgd/gd_webp.dep -MT libgd/gd_webp.lo  -fPIC -DPIC -o libgd/.libs/gd_webp.o
#7 29.63 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_avif.c -o libgd/gd_avif.lo  -MMD -MF libgd/gd_avif.dep -MT libgd/gd_avif.lo
#7 29.75  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_avif.c -MMD -MF libgd/gd_avif.dep -MT libgd/gd_avif.lo  -fPIC -DPIC -o libgd/.libs/gd_avif.o
#7 29.87 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_png.c -o libgd/gd_png.lo  -MMD -MF libgd/gd_png.dep -MT libgd/gd_png.lo
#7 29.99  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_png.c -MMD -MF libgd/gd_png.dep -MT libgd/gd_png.lo  -fPIC -DPIC -o libgd/.libs/gd_png.o
#7 30.25 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_jpeg.c -o libgd/gd_jpeg.lo  -MMD -MF libgd/gd_jpeg.dep -MT libgd/gd_jpeg.lo
#7 30.37  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_jpeg.c -MMD -MF libgd/gd_jpeg.dep -MT libgd/gd_jpeg.lo  -fPIC -DPIC -o libgd/.libs/gd_jpeg.o
#7 30.57 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdxpm.c -o libgd/gdxpm.lo  -MMD -MF libgd/gdxpm.dep -MT libgd/gdxpm.lo
#7 30.69  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdxpm.c -MMD -MF libgd/gdxpm.dep -MT libgd/gdxpm.lo  -fPIC -DPIC -o libgd/.libs/gdxpm.o
#7 30.80 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontt.c -o libgd/gdfontt.lo  -MMD -MF libgd/gdfontt.dep -MT libgd/gdfontt.lo
#7 30.91  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontt.c -MMD -MF libgd/gdfontt.dep -MT libgd/gdfontt.lo  -fPIC -DPIC -o libgd/.libs/gdfontt.o
#7 30.96 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfonts.c -o libgd/gdfonts.lo  -MMD -MF libgd/gdfonts.dep -MT libgd/gdfonts.lo
#7 31.07  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfonts.c -MMD -MF libgd/gdfonts.dep -MT libgd/gdfonts.lo  -fPIC -DPIC -o libgd/.libs/gdfonts.o
#7 31.11 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontmb.c -o libgd/gdfontmb.lo  -MMD -MF libgd/gdfontmb.dep -MT libgd/gdfontmb.lo
#7 31.22  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontmb.c -MMD -MF libgd/gdfontmb.dep -MT libgd/gdfontmb.lo  -fPIC -DPIC -o libgd/.libs/gdfontmb.o
#7 31.28 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontl.c -o libgd/gdfontl.lo  -MMD -MF libgd/gdfontl.dep -MT libgd/gdfontl.lo
#7 31.40  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontl.c -MMD -MF libgd/gdfontl.dep -MT libgd/gdfontl.lo  -fPIC -DPIC -o libgd/.libs/gdfontl.o
#7 31.51 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontg.c -o libgd/gdfontg.lo  -MMD -MF libgd/gdfontg.dep -MT libgd/gdfontg.lo
#7 31.63  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdfontg.c -MMD -MF libgd/gdfontg.dep -MT libgd/gdfontg.lo  -fPIC -DPIC -o libgd/.libs/gdfontg.o
#7 31.69 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdtables.c -o libgd/gdtables.lo  -MMD -MF libgd/gdtables.dep -MT libgd/gdtables.lo
#7 31.80  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdtables.c -MMD -MF libgd/gdtables.dep -MT libgd/gdtables.lo  -fPIC -DPIC -o libgd/.libs/gdtables.o
#7 31.83 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdft.c -o libgd/gdft.lo  -MMD -MF libgd/gdft.dep -MT libgd/gdft.lo
#7 31.94  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdft.c -MMD -MF libgd/gdft.dep -MT libgd/gdft.lo  -fPIC -DPIC -o libgd/.libs/gdft.o
#7 32.32 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdcache.c -o libgd/gdcache.lo  -MMD -MF libgd/gdcache.dep -MT libgd/gdcache.lo
#7 32.43  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdcache.c -MMD -MF libgd/gdcache.dep -MT libgd/gdcache.lo  -fPIC -DPIC -o libgd/.libs/gdcache.o
#7 32.56 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdkanji.c -o libgd/gdkanji.lo  -MMD -MF libgd/gdkanji.dep -MT libgd/gdkanji.lo
#7 32.69  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdkanji.c -MMD -MF libgd/gdkanji.dep -MT libgd/gdkanji.lo  -fPIC -DPIC -o libgd/.libs/gdkanji.o
#7 32.86 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/wbmp.c -o libgd/wbmp.lo  -MMD -MF libgd/wbmp.dep -MT libgd/wbmp.lo
#7 32.98  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/wbmp.c -MMD -MF libgd/wbmp.dep -MT libgd/wbmp.lo  -fPIC -DPIC -o libgd/.libs/wbmp.o
#7 33.12 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_wbmp.c -o libgd/gd_wbmp.lo  -MMD -MF libgd/gd_wbmp.dep -MT libgd/gd_wbmp.lo
#7 33.23  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_wbmp.c -MMD -MF libgd/gd_wbmp.dep -MT libgd/gd_wbmp.lo  -fPIC -DPIC -o libgd/.libs/gd_wbmp.o
#7 33.30 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdhelpers.c -o libgd/gdhelpers.lo  -MMD -MF libgd/gdhelpers.dep -MT libgd/gdhelpers.lo
#7 33.45  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gdhelpers.c -MMD -MF libgd/gdhelpers.dep -MT libgd/gdhelpers.lo  -fPIC -DPIC -o libgd/.libs/gdhelpers.o
#7 33.56 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_topal.c -o libgd/gd_topal.lo  -MMD -MF libgd/gd_topal.dep -MT libgd/gd_topal.lo
#7 33.68  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_topal.c -MMD -MF libgd/gd_topal.dep -MT libgd/gd_topal.lo  -fPIC -DPIC -o libgd/.libs/gd_topal.o
#7 33.98 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gif_in.c -o libgd/gd_gif_in.lo  -MMD -MF libgd/gd_gif_in.dep -MT libgd/gd_gif_in.lo
#7 34.10  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gif_in.c -MMD -MF libgd/gd_gif_in.dep -MT libgd/gd_gif_in.lo  -fPIC -DPIC -o libgd/.libs/gd_gif_in.o
#7 34.29 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_xbm.c -o libgd/gd_xbm.lo  -MMD -MF libgd/gd_xbm.dep -MT libgd/gd_xbm.lo
#7 34.42  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_xbm.c -MMD -MF libgd/gd_xbm.dep -MT libgd/gd_xbm.lo  -fPIC -DPIC -o libgd/.libs/gd_xbm.o
#7 34.57 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gif_out.c -o libgd/gd_gif_out.lo  -MMD -MF libgd/gd_gif_out.dep -MT libgd/gd_gif_out.lo
#7 34.69  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_gif_out.c -MMD -MF libgd/gd_gif_out.dep -MT libgd/gd_gif_out.lo  -fPIC -DPIC -o libgd/.libs/gd_gif_out.o
#7 34.80 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_security.c -o libgd/gd_security.lo  -MMD -MF libgd/gd_security.dep -MT libgd/gd_security.lo
#7 34.91  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_security.c -MMD -MF libgd/gd_security.dep -MT libgd/gd_security.lo  -fPIC -DPIC -o libgd/.libs/gd_security.o
#7 34.95 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_filter.c -o libgd/gd_filter.lo  -MMD -MF libgd/gd_filter.dep -MT libgd/gd_filter.lo
#7 35.07  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_filter.c -MMD -MF libgd/gd_filter.dep -MT libgd/gd_filter.lo  -fPIC -DPIC -o libgd/.libs/gd_filter.o
#7 35.24 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_pixelate.c -o libgd/gd_pixelate.lo  -MMD -MF libgd/gd_pixelate.dep -MT libgd/gd_pixelate.lo
#7 35.37  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_pixelate.c -MMD -MF libgd/gd_pixelate.dep -MT libgd/gd_pixelate.lo  -fPIC -DPIC -o libgd/.libs/gd_pixelate.o
#7 35.42 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_rotate.c -o libgd/gd_rotate.lo  -MMD -MF libgd/gd_rotate.dep -MT libgd/gd_rotate.lo
#7 35.56  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_rotate.c -MMD -MF libgd/gd_rotate.dep -MT libgd/gd_rotate.lo  -fPIC -DPIC -o libgd/.libs/gd_rotate.o
#7 35.68 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_color_match.c -o libgd/gd_color_match.lo  -MMD -MF libgd/gd_color_match.dep -MT libgd/gd_color_match.lo
#7 35.81  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_color_match.c -MMD -MF libgd/gd_color_match.dep -MT libgd/gd_color_match.lo  -fPIC -DPIC -o libgd/.libs/gd_color_match.o
#7 35.93 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_transform.c -o libgd/gd_transform.lo  -MMD -MF libgd/gd_transform.dep -MT libgd/gd_transform.lo
#7 36.06  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_transform.c -MMD -MF libgd/gd_transform.dep -MT libgd/gd_transform.lo  -fPIC -DPIC -o libgd/.libs/gd_transform.o
#7 36.11 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_crop.c -o libgd/gd_crop.lo  -MMD -MF libgd/gd_crop.dep -MT libgd/gd_crop.lo
#7 36.23  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_crop.c -MMD -MF libgd/gd_crop.dep -MT libgd/gd_crop.lo  -fPIC -DPIC -o libgd/.libs/gd_crop.o
#7 36.34 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_interpolation.c -o libgd/gd_interpolation.lo  -MMD -MF libgd/gd_interpolation.dep -MT libgd/gd_interpolation.lo
#7 36.45  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_interpolation.c -MMD -MF libgd/gd_interpolation.dep -MT libgd/gd_interpolation.lo  -fPIC -DPIC -o libgd/.libs/gd_interpolation.o
#7 37.31 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_matrix.c -o libgd/gd_matrix.lo  -MMD -MF libgd/gd_matrix.dep -MT libgd/gd_matrix.lo
#7 37.43  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_matrix.c -MMD -MF libgd/gd_matrix.dep -MT libgd/gd_matrix.lo  -fPIC -DPIC -o libgd/.libs/gd_matrix.o
#7 37.52 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_bmp.c -o libgd/gd_bmp.lo  -MMD -MF libgd/gd_bmp.dep -MT libgd/gd_bmp.lo
#7 37.64  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_bmp.c -MMD -MF libgd/gd_bmp.dep -MT libgd/gd_bmp.lo  -fPIC -DPIC -o libgd/.libs/gd_bmp.o
#7 37.97 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_tga.c -o libgd/gd_tga.lo  -MMD -MF libgd/gd_tga.dep -MT libgd/gd_tga.lo
#7 38.08  cc -I. -I/usr/src/php/ext/gd -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -I/usr/src/php/ext/gd/libgd -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/gd/libgd/gd_tga.c -MMD -MF libgd/gd_tga.dep -MT libgd/gd_tga.lo  -fPIC -DPIC -o libgd/.libs/gd_tga.o
#7 38.28 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=link cc -shared -I/usr/src/php/ext/gd/include -I/usr/src/php/ext/gd/main -I/usr/src/php/ext/gd -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libpng16 -I/usr/include/freetype2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE  -Wl,-O1 -pie  -o gd.la -export-dynamic -avoid-version -prefer-pic -module -rpath /usr/src/php/ext/gd/modules  gd.lo libgd/gd.lo libgd/gd_gd.lo libgd/gd_gd2.lo libgd/gd_io.lo libgd/gd_io_dp.lo libgd/gd_io_file.lo libgd/gd_ss.lo libgd/gd_io_ss.lo libgd/gd_webp.lo libgd/gd_avif.lo libgd/gd_png.lo libgd/gd_jpeg.lo libgd/gdxpm.lo libgd/gdfontt.lo libgd/gdfonts.lo libgd/gdfontmb.lo libgd/gdfontl.lo libgd/gdfontg.lo libgd/gdtables.lo libgd/gdft.lo libgd/gdcache.lo libgd/gdkanji.lo libgd/wbmp.lo libgd/gd_wbmp.lo libgd/gdhelpers.lo libgd/gd_topal.lo libgd/gd_gif_in.lo libgd/gd_xbm.lo libgd/gd_gif_out.lo libgd/gd_security.lo libgd/gd_filter.lo libgd/gd_pixelate.lo libgd/gd_rotate.lo libgd/gd_color_match.lo libgd/gd_transform.lo libgd/gd_crop.lo libgd/gd_interpolation.lo libgd/gd_matrix.lo libgd/gd_bmp.lo libgd/gd_tga.lo -lz -lpng16 -ljpeg -lfreetype
#7 38.66 cc -shared  .libs/gd.o libgd/.libs/gd.o libgd/.libs/gd_gd.o libgd/.libs/gd_gd2.o libgd/.libs/gd_io.o libgd/.libs/gd_io_dp.o libgd/.libs/gd_io_file.o libgd/.libs/gd_ss.o libgd/.libs/gd_io_ss.o libgd/.libs/gd_webp.o libgd/.libs/gd_avif.o libgd/.libs/gd_png.o libgd/.libs/gd_jpeg.o libgd/.libs/gdxpm.o libgd/.libs/gdfontt.o libgd/.libs/gdfonts.o libgd/.libs/gdfontmb.o libgd/.libs/gdfontl.o libgd/.libs/gdfontg.o libgd/.libs/gdtables.o libgd/.libs/gdft.o libgd/.libs/gdcache.o libgd/.libs/gdkanji.o libgd/.libs/wbmp.o libgd/.libs/gd_wbmp.o libgd/.libs/gdhelpers.o libgd/.libs/gd_topal.o libgd/.libs/gd_gif_in.o libgd/.libs/gd_xbm.o libgd/.libs/gd_gif_out.o libgd/.libs/gd_security.o libgd/.libs/gd_filter.o libgd/.libs/gd_pixelate.o libgd/.libs/gd_rotate.o libgd/.libs/gd_color_match.o libgd/.libs/gd_transform.o libgd/.libs/gd_crop.o libgd/.libs/gd_interpolation.o libgd/.libs/gd_matrix.o libgd/.libs/gd_bmp.o libgd/.libs/gd_tga.o  -lz -lpng16 -ljpeg -lfreetype  -Wl,-O1 -Wl,-soname -Wl,gd.so -o .libs/gd.so
#7 38.69 creating gd.la
#7 38.70 (cd .libs && rm -f gd.la && ln -s ../gd.la gd.la)
#7 38.71 /bin/bash /usr/src/php/ext/gd/libtool --tag=CC --mode=install cp ./gd.la /usr/src/php/ext/gd/modules
#7 38.76 cp ./.libs/gd.so /usr/src/php/ext/gd/modules/gd.so
#7 38.77 cp ./.libs/gd.lai /usr/src/php/ext/gd/modules/gd.la
#7 38.81 PATH="$PATH:/sbin" ldconfig -n /usr/src/php/ext/gd/modules
#7 38.82 ----------------------------------------------------------------------
#7 38.82 Libraries have been installed in:
#7 38.82    /usr/src/php/ext/gd/modules
#7 38.82
#7 38.82 If you ever happen to want to link against installed libraries
#7 38.82 in a given directory, LIBDIR, you must either use libtool, and
#7 38.82 specify the full pathname of the library, or use the `-LLIBDIR'
#7 38.82 flag during linking and do at least one of the following:
#7 38.82    - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
#7 38.82      during execution
#7 38.82    - add LIBDIR to the `LD_RUN_PATH' environment variable
#7 38.82      during linking
#7 38.82    - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
#7 38.82    - have your system administrator add LIBDIR to `/etc/ld.so.conf'
#7 38.82
#7 38.82 See any operating system documentation about shared libraries for
#7 38.82 more information, such as the ld(1) and ld.so(8) manual pages.
#7 38.82 ----------------------------------------------------------------------
#7 38.83
#7 38.83 Build complete.
#7 38.83 Don't forget to run 'make test'.
#7 38.84
#7 38.88 + strip --strip-all modules/gd.so
#7 38.97 Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20220829/
#7 39.18 Installing header files:          /usr/local/include/php/
#7 39.58 find . -name \*.gcno -o -name \*.gcda | xargs rm -f
#7 39.59 find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
#7 39.60 find . -name \*.la -o -name \*.a | xargs rm -f
#7 39.60 find . -name \*.so | xargs rm -f
#7 39.61 find . -name .libs -a -type d|xargs rm -rf
#7 39.61 rm -f libphp.la      modules/* libs/*
#7 39.62 rm -f ext/opcache/jit/zend_jit_x86.c
#7 39.62 rm -f ext/opcache/jit/zend_jit_arm64.c
#7 39.62 rm -f ext/opcache/minilua
#7 39.65 Configuring for:
#7 39.65 PHP Api Version:         20220829
#7 39.65 Zend Module Api No:      20220829
#7 39.65 Zend Extension Api No:   420220829
#7 40.25 checking for grep that handles long lines and -e... /usr/bin/grep
#7 40.26 checking for egrep... /usr/bin/grep -E
#7 40.26 checking for a sed that does not truncate output... /usr/bin/sed
#7 40.29 checking for pkg-config... /usr/bin/pkg-config
#7 40.29 checking pkg-config is at least version 0.9.0... yes
#7 40.29 checking for cc... cc
#7 40.32 checking whether the C compiler works... yes
#7 40.37 checking for C compiler default output file name... a.out
#7 40.37 checking for suffix of executables...
#7 40.41 checking whether we are cross compiling... no
#7 40.46 checking for suffix of object files... o
#7 40.49 checking whether the compiler supports GNU C... yes
#7 40.51 checking whether cc accepts -g... yes
#7 40.53 checking for cc option to enable C11 features... none needed
#7 40.57 checking how to run the C preprocessor... cc -E
#7 40.64 checking for egrep -e... (cached) /usr/bin/grep -E
#7 40.64 checking for icc... no
#7 40.65 checking for suncc... no
#7 40.67 checking for system library directory... lib
#7 40.67 checking if compiler supports -Wl,-rpath,... yes
#7 40.73 checking build system type... x86_64-pc-linux-gnu
#7 40.73 checking host system type... x86_64-pc-linux-gnu
#7 40.73 checking target system type... x86_64-pc-linux-gnu
#7 40.77 checking for PHP prefix... /usr/local
#7 40.77 checking for PHP includes... -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib
#7 40.77 checking for PHP extension directory... /usr/local/lib/php/extensions/no-debug-non-zts-20220829
#7 40.77 checking for PHP installed headers prefix... /usr/local/include/php
#7 40.77 checking if debug is enabled... no
#7 40.79 checking if zts is enabled... no
#7 40.81 checking for gawk... no
#7 40.81 checking for nawk... nawk
#7 40.81 checking if nawk is broken... no
#7 40.81 checking whether to enable DOM support... yes, shared
#7 40.81 checking for libxml-2.0 >= 2.9.0... yes
#7 40.85 checking for a sed that does not truncate output... /usr/bin/sed
#7 40.86 checking for ld used by cc... /usr/bin/ld
#7 40.86 checking if the linker (/usr/bin/ld) is GNU ld... yes
#7 40.87 checking for /usr/bin/ld option to reload object files... -r
#7 40.87 checking for BSD-compatible nm... /usr/bin/nm -B
#7 40.87 checking whether ln -s works... yes
#7 40.87 checking how to recognize dependent libraries... pass_all
#7 40.89 checking for stdio.h... yes
#7 40.91 checking for stdlib.h... yes
#7 40.94 checking for string.h... yes
#7 40.97 checking for inttypes.h... yes
#7 40.99 checking for stdint.h... yes
#7 41.02 checking for strings.h... yes
#7 41.05 checking for sys/stat.h... yes
#7 41.07 checking for sys/types.h... yes
#7 41.10 checking for unistd.h... yes
#7 41.13 checking for dlfcn.h... yes
#7 41.15 checking the maximum length of command line arguments... 1572864
#7 41.16 checking command to parse /usr/bin/nm -B output from cc object... ok
#7 41.23 checking for objdir... .libs
#7 41.24 checking for ar... ar
#7 41.24 checking for ranlib... ranlib
#7 41.24 checking for strip... strip
#7 41.30 checking if cc supports -fno-rtti -fno-exceptions... no
#7 41.32 checking for cc option to produce PIC... -fPIC
#7 41.32 checking if cc PIC flag -fPIC works... yes
#7 41.34 checking if cc static flag -static works... yes
#7 41.44 checking if cc supports -c -o file.o... yes
#7 41.47 checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
#7 41.49 checking whether -lc should be explicitly linked in... no
#7 41.52 checking dynamic linker characteristics... GNU/Linux ld.so
#7 41.54 checking how to hardcode library paths into programs... immediate
#7 41.54 checking whether stripping libraries is possible... yes
#7 41.55 checking if libtool supports shared libraries... yes
#7 41.55 checking whether to build shared libraries... yes
#7 41.55 checking whether to build static libraries... no
#7 41.83
#7 41.83 creating libtool
#7 41.86 appending configuration tag "CXX" to libtool
#7 41.93 configure: patching config.h.in
#7 41.93 configure: creating ./config.status
#7 41.99 config.status: creating config.h
#7 42.04 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/php_dom.c -o php_dom.lo  -MMD -MF php_dom.dep -MT php_dom.lo
#7 42.15 mkdir .libs
#7 42.15  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/php_dom.c -MMD -MF php_dom.dep -MT php_dom.lo  -fPIC -DPIC -o .libs/php_dom.o
#7 42.90 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/attr.c -o attr.lo  -MMD -MF attr.dep -MT attr.lo
#7 43.01  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/attr.c -MMD -MF attr.dep -MT attr.lo  -fPIC -DPIC -o .libs/attr.o
#7 43.20 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/document.c -o document.lo  -MMD -MF document.dep -MT document.lo
#7 43.32  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/document.c -MMD -MF document.dep -MT document.lo  -fPIC -DPIC -o .libs/document.o
#7 43.83 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/domexception.c -o domexception.lo  -MMD -MF domexception.dep -MT domexception.lo
#7 43.94  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/domexception.c -MMD -MF domexception.dep -MT domexception.lo  -fPIC -DPIC -o .libs/domexception.o
#7 44.09 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/parentnode.c -o parentnode.lo  -MMD -MF parentnode.dep -MT parentnode.lo
#7 44.20  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/parentnode.c -MMD -MF parentnode.dep -MT parentnode.lo  -fPIC -DPIC -o .libs/parentnode.o
#7 44.41 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/processinginstruction.c -o processinginstruction.lo  -MMD -MF processinginstruction.dep -MT processinginstruction.lo
#7 44.51  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/processinginstruction.c -MMD -MF processinginstruction.dep -MT processinginstruction.lo  -fPIC -DPIC -o .libs/processinginstruction.o
#7 44.68 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/cdatasection.c -o cdatasection.lo  -MMD -MF cdatasection.dep -MT cdatasection.lo
#7 44.79  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/cdatasection.c -MMD -MF cdatasection.dep -MT cdatasection.lo  -fPIC -DPIC -o .libs/cdatasection.o
#7 44.90 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/documentfragment.c -o documentfragment.lo  -MMD -MF documentfragment.dep -MT documentfragment.lo
#7 45.02  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/documentfragment.c -MMD -MF documentfragment.dep -MT documentfragment.lo  -fPIC -DPIC -o .libs/documentfragment.o
#7 45.16 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/domimplementation.c -o domimplementation.lo  -MMD -MF domimplementation.dep -MT domimplementation.lo
#7 45.27  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/domimplementation.c -MMD -MF domimplementation.dep -MT domimplementation.lo  -fPIC -DPIC -o .libs/domimplementation.o
#7 45.42 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/element.c -o element.lo  -MMD -MF element.dep -MT element.lo
#7 45.52  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/element.c -MMD -MF element.dep -MT element.lo  -fPIC -DPIC -o .libs/element.o
#7 45.87 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/node.c -o node.lo  -MMD -MF node.dep -MT node.lo
#7 45.98  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/node.c -MMD -MF node.dep -MT node.lo  -fPIC -DPIC -o .libs/node.o
#7 46.47 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/characterdata.c -o characterdata.lo  -MMD -MF characterdata.dep -MT characterdata.lo
#7 46.58  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/characterdata.c -MMD -MF characterdata.dep -MT characterdata.lo  -fPIC -DPIC -o .libs/characterdata.o
#7 46.85 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/documenttype.c -o documenttype.lo  -MMD -MF documenttype.dep -MT documenttype.lo
#7 46.97  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/documenttype.c -MMD -MF documenttype.dep -MT documenttype.lo  -fPIC -DPIC -o .libs/documenttype.o
#7 47.17 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/entity.c -o entity.lo  -MMD -MF entity.dep -MT entity.lo
#7 47.28  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/entity.c -MMD -MF entity.dep -MT entity.lo  -fPIC -DPIC -o .libs/entity.o
#7 47.57 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/nodelist.c -o nodelist.lo  -MMD -MF nodelist.dep -MT nodelist.lo
#7 47.68  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/nodelist.c -MMD -MF nodelist.dep -MT nodelist.lo  -fPIC -DPIC -o .libs/nodelist.o
#7 47.84 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/text.c -o text.lo  -MMD -MF text.dep -MT text.lo
#7 47.94  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/text.c -MMD -MF text.dep -MT text.lo  -fPIC -DPIC -o .libs/text.o
#7 48.10 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/comment.c -o comment.lo  -MMD -MF comment.dep -MT comment.lo
#7 48.22  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/comment.c -MMD -MF comment.dep -MT comment.lo  -fPIC -DPIC -o .libs/comment.o
#7 48.35 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/entityreference.c -o entityreference.lo  -MMD -MF entityreference.dep -MT entityreference.lo
#7 48.46  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/entityreference.c -MMD -MF entityreference.dep -MT entityreference.lo  -fPIC -DPIC -o .libs/entityreference.o
#7 48.60 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/notation.c -o notation.lo  -MMD -MF notation.dep -MT notation.lo
#7 48.72  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/notation.c -MMD -MF notation.dep -MT notation.lo  -fPIC -DPIC -o .libs/notation.o
#7 48.87 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/xpath.c -o xpath.lo  -MMD -MF xpath.dep -MT xpath.lo
#7 48.98  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/xpath.c -MMD -MF xpath.dep -MT xpath.lo  -fPIC -DPIC -o .libs/xpath.o
#7 49.25 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/dom_iterators.c -o dom_iterators.lo  -MMD -MF dom_iterators.dep -MT dom_iterators.lo
#7 49.37  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/dom_iterators.c -MMD -MF dom_iterators.dep -MT dom_iterators.lo  -fPIC -DPIC -o .libs/dom_iterators.o
#7 49.56 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE    -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/namednodemap.c -o namednodemap.lo  -MMD -MF namednodemap.dep -MT namednodemap.lo
#7 49.66  cc -I. -I/usr/src/php/ext/dom -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/dom/namednodemap.c -MMD -MF namednodemap.dep -MT namednodemap.lo  -fPIC -DPIC -o .libs/namednodemap.o
#7 49.84 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=link cc -shared -I/usr/src/php/ext/dom/include -I/usr/src/php/ext/dom/main -I/usr/src/php/ext/dom -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE  -Wl,-O1 -pie  -o dom.la -export-dynamic -avoid-version -prefer-pic -module -rpath /usr/src/php/ext/dom/modules  php_dom.lo attr.lo document.lo domexception.lo parentnode.lo processinginstruction.lo cdatasection.lo documentfragment.lo domimplementation.lo element.lo node.lo characterdata.lo documenttype.lo entity.lo nodelist.lo text.lo comment.lo entityreference.lo notation.lo xpath.lo dom_iterators.lo namednodemap.lo -lxml2
#7 50.07 cc -shared  .libs/php_dom.o .libs/attr.o .libs/document.o .libs/domexception.o .libs/parentnode.o .libs/processinginstruction.o .libs/cdatasection.o .libs/documentfragment.o .libs/domimplementation.o .libs/element.o .libs/node.o .libs/characterdata.o .libs/documenttype.o .libs/entity.o .libs/nodelist.o .libs/text.o .libs/comment.o .libs/entityreference.o .libs/notation.o .libs/xpath.o .libs/dom_iterators.o .libs/namednodemap.o  -lxml2  -Wl,-O1 -Wl,-soname -Wl,dom.so -o .libs/dom.so
#7 50.10 creating dom.la
#7 50.11 (cd .libs && rm -f dom.la && ln -s ../dom.la dom.la)
#7 50.12 /bin/bash /usr/src/php/ext/dom/libtool --tag=CC --mode=install cp ./dom.la /usr/src/php/ext/dom/modules
#7 50.15 cp ./.libs/dom.so /usr/src/php/ext/dom/modules/dom.so
#7 50.15 cp ./.libs/dom.lai /usr/src/php/ext/dom/modules/dom.la
#7 50.17 PATH="$PATH:/sbin" ldconfig -n /usr/src/php/ext/dom/modules
#7 50.17 ----------------------------------------------------------------------
#7 50.17 Libraries have been installed in:
#7 50.17    /usr/src/php/ext/dom/modules
#7 50.17
#7 50.17 If you ever happen to want to link against installed libraries
#7 50.18 in a given directory, LIBDIR, you must either use libtool, and
#7 50.18 specify the full pathname of the library, or use the `-LLIBDIR'
#7 50.18 flag during linking and do at least one of the following:
#7 50.18    - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
#7 50.18      during execution
#7 50.18    - add LIBDIR to the `LD_RUN_PATH' environment variable
#7 50.18      during linking
#7 50.18    - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
#7 50.18    - have your system administrator add LIBDIR to `/etc/ld.so.conf'
#7 50.18
#7 50.18 See any operating system documentation about shared libraries for
#7 50.18 more information, such as the ld(1) and ld.so(8) manual pages.
#7 50.18 ----------------------------------------------------------------------
#7 50.18
#7 50.18 Build complete.
#7 50.19 Don't forget to run 'make test'.
#7 50.19
#7 50.22 + strip --strip-all modules/dom.so
#7 50.26 Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20220829/
#7 50.33 Installing header files:          /usr/local/include/php/
#7 50.43
#7 50.43 warning: dom (dom) is already loaded!
#7 50.43
#7 50.43 find . -name \*.gcno -o -name \*.gcda | xargs rm -f
#7 50.44 find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
#7 50.44 find . -name \*.la -o -name \*.a | xargs rm -f
#7 50.45 find . -name \*.so | xargs rm -f
#7 50.46 find . -name .libs -a -type d|xargs rm -rf
#7 50.46 rm -f libphp.la      modules/* libs/*
#7 50.46 rm -f ext/opcache/jit/zend_jit_x86.c
#7 50.47 rm -f ext/opcache/jit/zend_jit_arm64.c
#7 50.47 rm -f ext/opcache/minilua
#7 50.50 Configuring for:
#7 50.50 PHP Api Version:         20220829
#7 50.50 Zend Module Api No:      20220829
#7 50.50 Zend Extension Api No:   420220829
#7 51.13 checking for grep that handles long lines and -e... /usr/bin/grep
#7 51.13 checking for egrep... /usr/bin/grep -E
#7 51.14 checking for a sed that does not truncate output... /usr/bin/sed
#7 51.17 checking for pkg-config... /usr/bin/pkg-config
#7 51.17 checking pkg-config is at least version 0.9.0... yes
#7 51.17 checking for cc... cc
#7 51.20 checking whether the C compiler works... yes
#7 51.24 checking for C compiler default output file name... a.out
#7 51.24 checking for suffix of executables...
#7 51.28 checking whether we are cross compiling... no
#7 51.32 checking for suffix of object files... o
#7 51.35 checking whether the compiler supports GNU C... yes
#7 51.37 checking whether cc accepts -g... yes
#7 51.39 checking for cc option to enable C11 features... none needed
#7 51.43 checking how to run the C preprocessor... cc -E
#7 51.49 checking for egrep -e... (cached) /usr/bin/grep -E
#7 51.49 checking for icc... no
#7 51.50 checking for suncc... no
#7 51.51 checking for system library directory... lib
#7 51.51 checking if compiler supports -Wl,-rpath,... yes
#7 51.56 checking build system type... x86_64-pc-linux-gnu
#7 51.56 checking host system type... x86_64-pc-linux-gnu
#7 51.56 checking target system type... x86_64-pc-linux-gnu
#7 51.60 checking for PHP prefix... /usr/local
#7 51.60 checking for PHP includes... -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib
#7 51.60 checking for PHP extension directory... /usr/local/lib/php/extensions/no-debug-non-zts-20220829
#7 51.60 checking for PHP installed headers prefix... /usr/local/include/php
#7 51.60 checking if debug is enabled... no
#7 51.62 checking if zts is enabled... no
#7 51.64 checking for gawk... no
#7 51.64 checking for nawk... nawk
#7 51.64 checking if nawk is broken... no
#7 51.64 checking whether to enable XML support... yes, shared
#7 51.64 checking whether to build with expat support... no
#7 51.64 checking for libxml-2.0 >= 2.9.0... yes
#7 51.67 checking for a sed that does not truncate output... /usr/bin/sed
#7 51.68 checking for ld used by cc... /usr/bin/ld
#7 51.68 checking if the linker (/usr/bin/ld) is GNU ld... yes
#7 51.69 checking for /usr/bin/ld option to reload object files... -r
#7 51.69 checking for BSD-compatible nm... /usr/bin/nm -B
#7 51.69 checking whether ln -s works... yes
#7 51.69 checking how to recognize dependent libraries... pass_all
#7 51.71 checking for stdio.h... yes
#7 51.73 checking for stdlib.h... yes
#7 51.75 checking for string.h... yes
#7 51.77 checking for inttypes.h... yes
#7 51.80 checking for stdint.h... yes
#7 51.82 checking for strings.h... yes
#7 51.85 checking for sys/stat.h... yes
#7 51.91 checking for sys/types.h... yes
#7 51.99 checking for unistd.h... yes
#7 52.03 checking for dlfcn.h... yes
#7 52.06 checking the maximum length of command line arguments... 1572864
#7 52.06 checking command to parse /usr/bin/nm -B output from cc object... ok
#7 52.14 checking for objdir... .libs
#7 52.14 checking for ar... ar
#7 52.14 checking for ranlib... ranlib
#7 52.14 checking for strip... strip
#7 52.20 checking if cc supports -fno-rtti -fno-exceptions... no
#7 52.22 checking for cc option to produce PIC... -fPIC
#7 52.22 checking if cc PIC flag -fPIC works... yes
#7 52.24 checking if cc static flag -static works... yes
#7 52.32 checking if cc supports -c -o file.o... yes
#7 52.35 checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
#7 52.37 checking whether -lc should be explicitly linked in... no
#7 52.40 checking dynamic linker characteristics... GNU/Linux ld.so
#7 52.42 checking how to hardcode library paths into programs... immediate
#7 52.42 checking whether stripping libraries is possible... yes
#7 52.43 checking if libtool supports shared libraries... yes
#7 52.43 checking whether to build shared libraries... yes
#7 52.43 checking whether to build static libraries... no
#7 52.60
#7 52.60 creating libtool
#7 52.62 appending configuration tag "CXX" to libtool
#7 52.69 configure: patching config.h.in
#7 52.70 configure: creating ./config.status
#7 52.75 config.status: creating config.h
#7 52.79 /bin/bash /usr/src/php/ext/xml/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/xml -I/usr/src/php/ext/xml/include -I/usr/src/php/ext/xml/main -I/usr/src/php/ext/xml -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/xml/xml.c -o xml.lo  -MMD -MF xml.dep -MT xml.lo
#7 52.90 mkdir .libs
#7 52.91  cc -I. -I/usr/src/php/ext/xml -I/usr/src/php/ext/xml/include -I/usr/src/php/ext/xml/main -I/usr/src/php/ext/xml -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/xml/xml.c -MMD -MF xml.dep -MT xml.lo  -fPIC -DPIC -o .libs/xml.o
#7 53.42 /bin/bash /usr/src/php/ext/xml/libtool --tag=CC --mode=compile cc -I. -I/usr/src/php/ext/xml -I/usr/src/php/ext/xml/include -I/usr/src/php/ext/xml/main -I/usr/src/php/ext/xml -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE   -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/xml/compat.c -o compat.lo  -MMD -MF compat.dep -MT compat.lo
#7 53.54  cc -I. -I/usr/src/php/ext/xml -I/usr/src/php/ext/xml/include -I/usr/src/php/ext/xml/main -I/usr/src/php/ext/xml -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2 -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /usr/src/php/ext/xml/compat.c -MMD -MF compat.dep -MT compat.lo  -fPIC -DPIC -o .libs/compat.o
#7 53.76 /bin/bash /usr/src/php/ext/xml/libtool --tag=CC --mode=link cc -shared -I/usr/src/php/ext/xml/include -I/usr/src/php/ext/xml/main -I/usr/src/php/ext/xml -I/usr/local/include/php -I/usr/local/include/php/main -I/usr/local/include/php/TSRM -I/usr/local/include/php/Zend -I/usr/local/include/php/ext -I/usr/local/include/php/ext/date/lib -I/usr/include/libxml2  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_CONFIG_H  -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64 -D_GNU_SOURCE  -Wl,-O1 -pie  -o xml.la -export-dynamic -avoid-version -prefer-pic -module -rpath /usr/src/php/ext/xml/modules  xml.lo compat.lo -lxml2
#7 53.89 cc -shared  .libs/xml.o .libs/compat.o  -lxml2  -Wl,-O1 -Wl,-soname -Wl,xml.so -o .libs/xml.so
#7 53.93 creating xml.la
#7 53.95 (cd .libs && rm -f xml.la && ln -s ../xml.la xml.la)
#7 53.95 /bin/bash /usr/src/php/ext/xml/libtool --tag=CC --mode=install cp ./xml.la /usr/src/php/ext/xml/modules
#7 53.99 cp ./.libs/xml.so /usr/src/php/ext/xml/modules/xml.so
#7 54.00 cp ./.libs/xml.lai /usr/src/php/ext/xml/modules/xml.la
#7 54.02 PATH="$PATH:/sbin" ldconfig -n /usr/src/php/ext/xml/modules
#7 54.03 ----------------------------------------------------------------------
#7 54.03 Libraries have been installed in:
#7 54.03    /usr/src/php/ext/xml/modules
#7 54.03
#7 54.03 If you ever happen to want to link against installed libraries
#7 54.03 in a given directory, LIBDIR, you must either use libtool, and
#7 54.03 specify the full pathname of the library, or use the `-LLIBDIR'
#7 54.03 flag during linking and do at least one of the following:
#7 54.03    - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
#7 54.03      during execution
#7 54.03    - add LIBDIR to the `LD_RUN_PATH' environment variable
#7 54.03      during linking
#7 54.03    - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
#7 54.03    - have your system administrator add LIBDIR to `/etc/ld.so.conf'
#7 54.03
#7 54.03 See any operating system documentation about shared libraries for
#7 54.03 more information, such as the ld(1) and ld.so(8) manual pages.
#7 54.03 ----------------------------------------------------------------------
#7 54.03
#7 54.03 Build complete.
#7 54.04 Don't forget to run 'make test'.
#7 54.04
#7 54.05 + strip --strip-all modules/xml.so
#7 54.08 Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20220829/
#7 54.17 Installing header files:          /usr/local/include/php/
#7 54.36
#7 54.36 warning: xml (xml) is already loaded!
#7 54.36
#7 54.36 find . -name \*.gcno -o -name \*.gcda | xargs rm -f
#7 54.37 find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
#7 54.37 find . -name \*.la -o -name \*.a | xargs rm -f
#7 54.38 find . -name \*.so | xargs rm -f
#7 54.38 find . -name .libs -a -type d|xargs rm -rf
#7 54.39 rm -f libphp.la      modules/* libs/*
#7 54.39 rm -f ext/opcache/jit/zend_jit_x86.c
#7 54.40 rm -f ext/opcache/jit/zend_jit_arm64.c
#7 54.40 rm -f ext/opcache/minilua
#7 55.41 Enabling module rewrite.
#7 55.42 To activate the new configuration, you need to run:
#7 55.42   service apache2 restart
#7 DONE 55.5s
#8 [ 3/10] RUN mkdir -p /usr/local/include/php/ext/dom     && cp /usr/src/php/ext/dom/*.h /usr/local/include/php/ext/dom/     && docker-php-ext-install xmlreader xmlwriter
#8 0.299 cp: cannot stat '/usr/src/php/ext/dom/*.h': No such file or directory
#8 ERROR: process "/bin/sh -c mkdir -p /usr/local/include/php/ext/dom     && cp /usr/src/php/ext/dom/*.h /usr/local/include/php/ext/dom/     && docker-php-ext-install xmlreader xmlwriter" did not complete successfully: exit code: 1
------
> [ 3/10] RUN mkdir -p /usr/local/include/php/ext/dom     && cp /usr/src/php/ext/dom/*.h /usr/local/include/php/ext/dom/     && docker-php-ext-install xmlreader xmlwriter:
cannot stat '/usr/src/php/ext/dom/*.h': No such file or directory
------
Dockerfile:12
--------------------
|
| >>> RUN mkdir -p /usr/local/include/php/ext/dom \
| >>>     && cp /usr/src/php/ext/dom/*.h /usr/local/include/php/ext/dom/ \
| >>>     && docker-php-ext-install xmlreader xmlwriter
|
--------------------
failed to solve: process "/bin/sh -c mkdir -p /usr/local/include/php/ext/dom     && cp /usr/src/php/ext/dom/*.h /usr/local/include/php/ext/dom/     && docker-php-ext-install xmlreader xmlwriter" did not complete successfully: exit code: 1
Error: ❌ Docker command failed
Error occurred ❌, check the logs for details.