# Joupit Webstore

Website toko online sederhana berbasis PHP & MySQL.

## Fitur

- Login sederhana (admin/user)
- Manajemen produk (sepatu, jaket, polo)
- Layanan kontak (Shopee, Instagram, WhatsApp)
- Responsive dengan Tailwind CSS

## Instalasi

1. **Clone/copy project ke folder XAMPP:**  
   `c:\xampp\htdocs\project web klmpk\`

2. **Import database:**

   - Buka phpMyAdmin
   - Import file `database/joutpit.sql`

3. **Konfigurasi environment:**

   - Salin `.env.example` menjadi `.env`
   - Sesuaikan DB_USERNAME dan DB_PASSWORD jika perlu

4. **Install dependency composer (opsional):**  
   Jalankan di terminal:

   ```
   composer install
   ```

5. **Akses website:**  
   Buka di browser:  
   `http://localhost/project%20web%20klmpk/public/project%20web%20lama.html`

## Default Login

- Username: `admin`
- Password: `admin`

## Struktur Folder

- `public/` : file HTML, CSS, JS, gambar
- `database/` : file SQL
- `src/` : backend PHP
