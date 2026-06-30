# Project Kantin UPB

Project aplikasi kantin berbasis web yang dibangun menggunakan **CodeIgniter 4** sebagai framework PHP utama dan **Bootstrap 5** untuk frontend.

## Tentang Project

Project ini adalah sistem manajemen kantin yang mencakup fitur-fitur seperti:
- Manajemen user (Admin, Mahasiswa, Penjual)
- Manajemen produk
- Transaksi pembelian
- Laporan penjualan

## Tech Stack

- **Backend**: CodeIgniter 4 (PHP Framework)
- **Frontend**: Bootstrap 5
- **Database**: MySQL
- **Session Management**: CodeIgniter 4 Built-in Session

## Persyaratan Sistem

- PHP version 8.2 atau higher
- Composer
- MySQL Database
- Extensions: intl, mbstring, json, mysqlnd, libcurl

## Git Workflow

Sebelum memulai pengerjaan, ikuti langkah-langkah berikut:

```bash
# 1. Pull dari branch master
git pull origin master

# 2. Buat branch baru dengan nama mahasiswa
git checkout -b <nama_mahasiswa>

# 3. Kerjakan fitur, lalu commit
git add .
git commit -m "<deskripsi fitur yang dikerjakan>"

# 4. Pull lagi dari master sebelum push (untuk sinkronisasi terbaru)
git pull origin master

# 5. Jika ada masalah rebase conflict, gunakan --no-rebase
git pull origin master --no-rebase

# 6. Push branch ke remote
git push origin <nama_mahasiswa>
```

### Contoh Workflow
```bash
git checkout -b john_doe
# Setelah mengerjakan fitur login
git add .
git commit -m "fitur: implementasi login user dengan session"

# Sebelum push, pull lagi dari master
git pull origin master

# Jika ada conflict rebase, gunakan --no-rebase
git pull origin master --no-rebase

# Push branch ke remote
git push origin john_doe
```

### Catatan Penting
- Selalu pull dari master sebelum push untuk menghindari conflict
- Jika mengalami masalah rebase, gunakan flag `--no-rebase` untuk bypass rebase otomatis

## Frontend Setup

### Bootstrap Framework
Project ini menggunakan **Bootstrap 5** sebagai framework CSS utama. Tidak perlu instalasi tambahan karena Bootstrap sudah di-load melalui CDN.

### Session Management
Project ini menggunakan **CodeIgniter 4 Built-in Session** untuk manajemen session.

**Contoh Penggunaan Session:**
```php
// Set session
$session = session();
$session->set('username', 'Admin');
$session->set('isLoggedIn', true);

// Get session
$username = $session->get('username');
$isLoggedIn = $session->get('isLoggedIn');

// Remove session
$session->remove('username');

// Destroy all session
$session->destroy();

// Flash message (untuk notifikasi one-time)
$session->setFlashdata('success', 'Data berhasil disimpan');
```

**Contoh di View (menampilkan flash message):**
```php
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
```

## Helper Functions

**PENTING:** Selalu baca file `app/Helpers/Func_helper.php` sebelum memulai pengerjaan. File ini berisi fungsi-fungsi bantu yang tersedia, termasuk fungsi logging yang akan dibuat oleh 'Opini'.

Fungsi-fungsi ini dapat mempermudah development dan menjaga konsistensi kode dalam project.

### Penggunaan Helper
Untuk menggunakan fungsi helper, cukup panggil fungsi tersebut langsung di controller atau view:
```php
// Contoh penggunaan helper
$harga = 50000;
echo formatRupiah($harga); // Output: Rp 50.000
```

## Dokumentasi Perintah Umum

### Migration
```bash
php spark migrate
php spark migrate:rollback
```

### Seeder
```bash
php spark db:seed UserSeeder
```

### Generate Code
```bash
php spark make:model ModelName
php spark make:controller ControllerName
php spark make:migration MigrationName
```

## Setup Project

Untuk instruksi setup lengkap, silakan lihat file [SETUP.md](SETUP.md)