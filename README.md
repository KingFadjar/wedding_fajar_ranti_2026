# Fajar & Ranti — Laravel 13 implementation

Source ini mengonversi file HTML Stitch yang diberikan menjadi aplikasi Laravel 13 dengan:

- Cover undangan
- Halaman undangan utama
- Galeri + link dua folder Google Drive
- Form RSVP tersimpan ke database
- Rekap RSVP dinamis
- Filter status
- Export CSV
- Proteksi admin dengan HTTP Basic Auth

## 1. Buat project Laravel 13

```bash
composer create-project laravel/laravel:^13.0 fajar-ranti
cd fajar-ranti
```

## 2. Copy source project-specific ini ke root Laravel
Copy seluruh isi folder `fajar-ranti-laravel13-source/` ke root project Laravel dan izinkan replace file yang sama.

Linux/macOS:
```bash
cp -R /path/fajar-ranti-laravel13-source/. /path/fajar-ranti/
```

Git Bash Windows:
```bash
cp -R /c/path/fajar-ranti-laravel13-source/. /c/path/fajar-ranti/
```

## 3. Konfigurasi .env

```bash
cp .env.example .env
php artisan key:generate
```

Tambahkan isi `.env.example.additions` ke `.env`, lalu atur database MySQL:

```env
APP_NAME="Fajar & Ranti Wedding"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fajar_ranti
DB_USERNAME=root
DB_PASSWORD=

WEDDING_DRIVE_ADAT=https://drive.google.com/drive/folders/1qNZKQ1sOoCgs85AVJyJlKHDSJ9Q8-DXQ
WEDDING_DRIVE_MODERN=https://drive.google.com/drive/folders/1Lw3ywzYd4bHm3IfHg8B_N0jIC_jM4HZv
RSVP_ADMIN_USER=admin
RSVP_ADMIN_PASSWORD=GANTI_PASSWORD_KUAT
```

## 4. Buat database

MySQL CLI:
```sql
CREATE DATABASE fajar_ranti CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Lalu:
```bash
php artisan migrate
php artisan optimize:clear
```

## 5. Jalankan

Karena source desain menggunakan Tailwind CDN, build frontend tidak diwajibkan untuk tahap ini.

```bash
php artisan serve
```

Buka:
- `http://127.0.0.1:8000/` — cover
- `http://127.0.0.1:8000/undangan` — undangan
- `http://127.0.0.1:8000/galeri` — galeri
- `http://127.0.0.1:8000/admin/rsvp` — rekap RSVP (Basic Auth)
- `http://127.0.0.1:8000/up` — health check

## 6. Production cache

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Struktur utama

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── WeddingController.php
│   │   └── RsvpController.php
│   └── Middleware/
│       └── RsvpAdminBasicAuth.php
└── Models/
    └── Rsvp.php
bootstrap/app.php
config/wedding.php
database/migrations/2026_09_14_000000_create_rsvps_table.php
public/assets/images/
├── adat/
└── modern/
resources/views/
├── wedding/
│   ├── cover.blade.php
│   ├── invitation.blade.php
│   └── gallery.blade.php
└── admin/
    └── rsvp.blade.php
routes/web.php
```

## Catatan aset foto

HTML dari ZIP sudah membawa foto melalui URL `lh3.googleusercontent.com/aida-public/...`, sehingga visual aslinya dari source tetap tampil. Dua link folder Drive user juga sudah dipasang sebagai tombol galeri. Untuk production jangka panjang, salin foto Drive ke `public/assets/images/adat` dan `public/assets/images/modern`, lalu ganti URL remote di Blade menjadi `asset(...)`.
