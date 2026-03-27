# Rental Mobil Ihsan

Sistem manajemen rental mobil berbasis web, dikembangkan dengan PHP menggunakan framework CodeIgniter 3.

## 🔍 Deskripsi Proyek

`rental_mobil_ihsan` adalah aplikasi CRUD untuk bisnis rental mobil:

- Autentikasi admin (login/logout)
- Manajemen data rental (input, edit, hapus, tampilan)
- Laporan transaksi
- Database sederhana menggunakan MySQL
- UI bootstrap + datatables

Kodenya tertata di folder:
- `application/controllers` → alur request
- `application/models` → akses database (contoh: `M_rental.php`)
- `application/views` → tampilan (`v_login.php`, `admin/…`, `welcome_message.php`)
- `assets/` → CSS, JS, gambar, datatable

---

## 📦 Fitur Utama

1. Autentikasi admin
2. Tambah/ubah/hapus data mobil
3. Input transaksi sewa (rental)
4. Daftar history penyewa/rental
5. Pengaturan data dasar (jika ada modul admin)
6. Output responsive (Bootstrap + DataTables)

---

## 🛠 Teknologi

- PHP 5.6+ (disarankan)
- CodeIgniter 3
- MySQL / MariaDB
- Bootstrap 3
- jQuery + DataTables

---

## ⚙️ Struktur Folder Penting

```
application/
  controllers/
    admin.php
    Welcome.php
  models/
    M_rental.php
  views/
    v_login.php
    welcome_message.php
    admin/
assets/
  css/
  js/
system/ (framework CodeIgniter)
```

---

## 🚀 Instalasi dan Setup

1. Copy repo ke `htdocs`:
   - `c:\xampp\htdocs\rental_mobil_ihsan`

2. Setting base URL (`application/config/config.php`):
   - `$config['base_url'] = 'http://localhost/rental_mobil_ihsan/';`

3. Database:
   - Buat DB misal `rental_db`
   - Import SQL jika tersedia (`db.sql` bukan otomatis dari repository)
   - Ubah di `application/config/database.php`:
     - `hostname`, `username`, `password`, `database`

4. Enable mod_rewrite (opsional) jika pakai `.htaccess`

5. Jalankan:
   - `http://localhost/rental_mobil_ihsan`

---

## 🗂 Setup Database (Contoh skema)

> Contoh umum tabel untuk rental mobil:

- `users` (admin):
  - `id`, `username`, `password`, `role`
- `mobil` (kendaraan)
  - `id`, `nama`, `jenis`, `harga_sewa`, `status`, `gambar`
- `rental`
  - `id`, `mobil_id`, `user_id`, `tanggal_pinjam`, `tanggal_kembali`, `total_bayar`, `status`

(Bila sudah ada script SQL, letakkan di README bagian ini)

---

## 🧩 Peran File Utama

- `application/controllers/admin.php` = logika utama panel admin (login, CRUD, laporan)
- `application/models/M_rental.php` = query CRUD rental
- `application/views/v_login.php` = form login
- `assets/js/datatables.js` = tabel dinamis

---

## 🧪 Testing & Debug

1. `application/config/config.php`
   - `$config['base_url']`
   - `$config['encryption_key']` (jika dipakai)
   - `$config['log_threshold'] = 4` (dev)
2. `application/config/database.php`
3. Aktifkan error display di `php.ini` saat dev:
   - `display_errors = On`
4. Cek `application/logs/` jika ada bug

---

## 👤 Username Password Default

Biasanya:
- admin / admin
- admin / 123456

Kalau tidak, cek method login di `controllers/admin.php`.

---

## 📌 Tips Pengembangan

- Sembarangkan form validasi (CodeIgniter Form Validation)
- Non-aktifkan `magic_quotes` / `register_globals`
- Gunakan hashing password (`password_hash`/`password_verify`)
- Tambah `ACL` (hak akses)
- Buat modul pemeliharaan (backup DB, export PDF/Excel)

---

## 📜 Lisensi

- Default: MIT/BSD (sesuaikan yang Anda pilih)
- Jika bawaan CodeIgniter: open-source (MIT-like)

---

## 📚 Referensi

- CodeIgniter 3 guide: https://codeigniter.com/userguide3/
- Dokumentasi DataTables: https://datatables.net/
- Bootstrap 3: https://getbootstrap.com/docs/3.4/

---

## 🎯 Kesimpulan

README ini memberikan gambaran lengkap, instalasi, dan panduan pengembangan untuk `rental_mobil_ihsan`. Semoga membantu mempercepat deploy dan maintain aplikasi Anda.