# Asset foto asli

Taruh foto asli dari Google Drive di folder berikut:

- `public/assets/images/adat/` → folder Drive adat/prewedding Minang
- `public/assets/images/modern/` → folder Drive modern

Dua link Drive sudah disimpan pada `config/wedding.php` dan `.env`.

> Catatan: source HTML yang diberikan memakai URL `lh3.googleusercontent.com/aida-public/...` sebagai gambar tampilan. View Laravel mempertahankan URL tersebut agar desain langsung tampil. Setelah file Drive asli disalin ke folder di atas, ganti `src` gambar di `resources/views/wedding/*.blade.php` dengan `{{ asset('assets/images/...') }}` agar aset sepenuhnya lokal dan stabil.
