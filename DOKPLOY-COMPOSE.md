# Dokploy – Docker Compose ile Deploy

Proje yapısı:
- **Dockerfile** — Web imajı (PHP/Apache); tek container veya Compose ile kullanılır.
- **docker-compose.yml** — Web + PostgreSQL; `build: context: ., dockerfile: Dockerfile` ile aynı Dockerfile kullanır.

## 1. Build Type

- **Build Type:** **Docker Compose** seçin (Compose ile deploy için).
- **Compose File Path:** `docker-compose.yml` (veya varsayılan).
- Build, kök dizindeki `Dockerfile` ile yapılır; `docker-compose.yml` Dockerfile olarak okunmamalı.

## 2. Environment (Ortam değişkenleri)

Proje / uygulama ayarlarında **Environment** bölümüne ekleyin:

| Değişken            | Değer |
|---------------------|--------|
| `POSTGRES_PASSWORD` | Güçlü bir şifre (örn. `Imageio_Pg_K9mN2xR7qL4vW8`) |
| `APP_URL`           | Domain’iniz (örn. `https://imageio-web-3kznhf-356693-72-60-178-115.traefik.me`) |

`POSTGRES_HOST`, `POSTGRES_DB`, `POSTGRES_USER` compose içinde tanımlı; ekstra yazmanız gerekmez.

## 3. Domain

- **Domains** (veya **Ports / Networking**) kısmında bu uygulama için domain ekleyin.
- Domain’i **web** servisine, **port 80**’e bağlayın (proxy / forward: `web:80`).

## 4. Network

- `dokploy-network` Dokploy tarafından sağlanır (compose’ta `external: true`).  
- İlk deploy’da “network not found” hatası alırsanız, Dokploy’da önce bu network’ü oluşturmanız gerekebilir.

## 5. Deploy

- **Deploy** / **Redeploy** ile build ve çalıştırma yapın.
- Hem **web** hem **postgres** aynı projede ayağa kalkar; web, `postgres` host adıyla veritabanına bağlanır.
