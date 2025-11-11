<<<<<<< HEAD
# CRUD Barang Laravel

A simple CRUD (Create, Read, Update, Delete) application for managing items using Laravel.  
This project demonstrates routing, controllers, models, migrations, Blade templates, and database operations.

## ✅ Features
- Create new item
- Edit item
- Delete item
- List all items
- Form validation
- Bootstrap UI

## ✅ Tech Stack
- Laravel 10/11
- PHP 8.1+
- MySQL
- Bootstrap 5

## ✅ How to Run
1. Clone this repository:
git clone https://github.com/alamverdian/crud-data-barang.git

2. Install dependencies:
composer install

3. Copy `.env.example` to `.env`:
cp .env.example .env

4. Generate app key:
php artisan key:generate

5. Setup database in `.env`:
DB_DATABASE=crud_barang
DB_USERNAME=root
DB_PASSWORD=

6. Run migration:
php artisan migrate

7. Start the server:
php artisan serve

## 📸 Screenshots

### ✅ 1. Halaman Daftar Barang (Index)
Tampilan seluruh data barang yang sudah tersimpan di database, lengkap dengan tombol Edit dan Delete.
![Index Page](https://github.com/user-attachments/assets/9c8bd3ac-7abb-45ed-a0c7-8b1955a86fa1)

---

### ✅ 2. Halaman Tambah Barang (Create)
Form untuk menambah data barang baru dengan validasi sederhana.
![Create Page](https://github.com/user-attachments/assets/79bcb3a8-535a-444e-b8c9-dbb448267029)

---

### ✅ 3. Halaman Edit Barang
Digunakan untuk memperbarui data barang tertentu.
![Edit Page](https://github.com/user-attachments/assets/80267eee-1b7c-49e6-8050-a3e5a3ab90f9)

---

### ✅ 4. Notifikasi Berhasil (Flash Message)
Muncul saat melakukan create, update, atau delete.
![Success Message](https://github.com/user-attachments/assets/98538aeb-988a-4fb2-8828-3bbbd5cbf3de)
=======
# CRUD Data Barang

Proyek sederhana untuk mengelola data barang menggunakan PHP dan MySQL.

## ✅ Tech Stack
- PHP
- MySQL
- HTML
- CSS
- Bootstrap

## ✅ Fitur
- Tambah data
- Edit data
- Hapus data
- Tampilkan data dalam tabel

## ✅ Cara Menjalankan
1. Import database.sql ke phpMyAdmin
2. Jalankan XAMPP
3. Simpan folder proyek ke htdocs
4. Buka di browser: http://localhost/crud-data-barang/
>>>>>>> 7d1d723833c77dc32eb939e21eb5b502dc10c514
