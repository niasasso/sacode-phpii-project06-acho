# Project06 - MySQL Database & PHPMyAdmin

## Tutorial Video

[MySQL Database & PHPMyAdmin](url_here)

## Gambaran Umum

Mengenal dan mampu mengoperasikan PHPMyAdmin. Menuliskan perintah-perintah SQL di PHPMyAdmin. Membuat koneksi database ke dalam project PHP.

## Garis Besar

✅ Pengantar PHPMyAdmin <br>
✅ SQL Commands di PHPMyAdmin <br>
✅ Koneksi Database di PHP <br>
✅ SQL Commands di PHP <br>


## 📚 Repository GitHub

Buat repository baru di GitHub dengan format nama ``` sacode-phpii-project06-namadepan ```

Gunakan Git Bash untuk melakukan proses download dan update repository dari komputer

```git clone <remote_repository>```

```
git clone https://github.com/username/sacode-phpii-project06-namadepan.git
```

Perintah-perintah Git dasar
```
git clone
git add .
git commit -m "pesan commit"
git push
```



## 📚 Pengantar PHPMyAdmin

PHPMyAdmin merupakan aplikasi berbasis web yang berfungsi untuk mengelolah database MySQL

## 📚 SQL Commands di PHPMyAdmin

Perintah-perintah SQL bisa dituliskan dan dijalankan pada PHPMyAdmin pada menu SQL.

### 📚 Buat Database

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
CREATE DATABASE sacode
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---

### 📚 Hapus Database

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
DROP DATABASE sacode
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---

### 📚 Buat Tabel

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
CREATE TABLE kategori_anggota(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR(50) NOT NULL
)

CREATE TABLE anggota (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    id_kategori in(11) NOT NULL,
    nama_depan VARCHAR(50) NOT NULL,
    nama_belakang VARCHAR(50) NULL,
    email VARCHAR(50) NULL,
    kata_sandi VARCHAR(50) NULL,
    foto VARCHAR(100) NULL,
    created_at TIMESTAMP
)
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---

### 📚 Hapus Tabel

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
DROP TABLE kategori_anggota
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---

### 📚 Tambah Data

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
INSERT INTO `kategori_anggota`(`id`, `kategori`) VALUES ('','Speaker')
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---

### 📚 Ubah Data

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
UPDATE `kategori_anggota` SET `nama_depan`='Ellyakim Ansek' WHERE `id`=1
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---

### 📚 Hapus Data

Tulis perintah SQL berikut di dalam kolom Query PHPMyAdmin

```sql
DELETE FROM `kategori_anggota` WHERE `id`=1
```

🚀 Klik tombol <b>Go</b> untuk proses query.

---



## 📚 SQL Commands di PHP

Kali ini perintah-perintah SQL dituliskan pada file/dokumen PHP.

Berikut struktur folder dan file yang perlu dipersiapkan

## 📚 Struktur Folder & File
    .
    ├── ...
    ├── config                  # Folder configurasi
    │   ├── config.php          # Variabel konfigurasi database
    │   ├── koneksi1.php        # Koneksi database tanpa nama database
    │   ├── koneksi2.php        # Koneksi database dengan nama database
    │   └── ...                 # etc.
    ├── buat-database.php
    ├── hapus-database.php
    ├── buat-table.php
    ├── hapus-table.php
    ├── tambah-data.php
    ├── ubah-data.php
    ├── hapus-data.php
    └── ...

### 📚 Buat Konfigurasi

Di dalam folder ```config``` buat file baru dengan nama ```config.php```

```config.php``` digunakan untuk menuliskan variabel-variabel configurasi database

```php
<?php 
    // Buat variabel untuk koneksi database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sacode';
?>
```

### 📚 Buat Koneksi

Buat file baru dengan nama ```koneksi1.php```. File ini digunakan untuk membuat koneksi database tanpa nama database

```php
<?php 

    // KONEKSI TANPA DATABASE

    // Integrasi config
    require_once('config.php');

    // Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password);

    // Periksa koneksi
    if($koneksi->connect_error){
        echo "Koneksi Gagal!";
    } else {
        echo "Koneksi Berhasil!";
    }

?>
```

💾 Simpan dan jalankan di web browser.

---


### 📚 Buat Koneksi Fengan Nama Database

Buat file baru dengan nama ```koneksi2.php```. File ini digunakan untuk membuat koneksi database dengan nama database

```php
<?php 

    // KONEKSI DENGAN DATABASE

    // Integrasi config
    require_once('config.php');

    // Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $database);

    // Periksa koneksi
    if($koneksi->connect_error){
        echo "Koneksi Gagal!";
    } else {
        echo "Koneksi Berhasil!";
    }

?>
```

💾 Simpan dan jalankan di web browser.

---


## 📚 Buat Database

Buat file ```buat-database.php```

Tuliskan code berikut di dalamnya

```php
<?php 

    /*
    BUAT DATABASE
    */

    // Integrasi koneksi
    require_once('./config/koneksi1.php');

    // Perintah SQL untuk buat database
    $sql = "CREATE DATABASE sacode";

    // Melakukan permintaan ke database
    $query = $koneksi->query($sql);

    // Periksa permintaan berhasil atau gagal
    if ($query === TRUE) {
        echo "<b>Berhasil!</b> Database sudah jadi...";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

?>
```

💾 Simpan dan jalankan di web browser.

---

## 📚 Hapus Database

Buat file ```hapus-database.php```

Tuliskan code berikut di dalamnya

```php
<?php 

    /*
    HAPUS DATABASE 
    */

    // Integrasi koneksi
    require_once('./config/koneksi1.php');

    // Perintah SQL untuk hapus database
    $sql = "DROP DATABASE sacode";

    // Melakukan permintaan ke database
    $query = $koneksi->query($sql);

    // Periksa permintaan berhasil atau gagal
    if ($query === TRUE) {
        echo "<b>Berhasil!</b> Database sudah terhapus...";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

?>
```

💾 Simpan dan jalankan di web browser.

---


## 📚 Buat Tabel

Buat file ```buat-tabel.php```

Tuliskan code berikut di dalamnya

```php
<?php 

    /*
    BUAT TABLE
    */

    // Integrasi koneksi
    require_once('./config/koneksi2.php');

    // Perintah SQL untuk buat table
    $sql = "CREATE TABLE anggota (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                id_kategori in(11) NOT NULL,
                nama_depan VARCHAR(50) NOT NULL,
                nama_belakang VARCHAR(50) NULL,
                email VARCHAR(50) NULL,
                kata_sandi VARCHAR(50) NULL,
                foto VARCHAR(100) NULL,
                created_at TIMESTAMP
            )";

    // Melakukan permintaan ke database
    $query = $koneksi->query($sql);

    // Periksa permintaan berhasil atau gagal
    if ($query === TRUE) {
        echo "<b>Berhasil!</b> Tabel sudah jadi...";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

?>
```

💾 Simpan dan jalankan di web browser.

---


## 📚 Hapus Tabel

Buat file ```hapus-tabel.php```

Tuliskan code berikut di dalamnya

```php
<?php 

    /*
    HAPUS TABLE
    */

    // Integrasi koneksi
    require_once('./config/koneksi2.php');

    // Perintah SQL untuk hapus table
    $sql = "DROP TABLE sacode";

    // Melakukan permintaan ke database
    $query = $koneksi->query($sql);

    // Periksa permintaan berhasil atau gagal
    if ($query === TRUE) {
        echo "<b>Berhasil!</b> Tabel terhapus...";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

?>
```

💾 Simpan dan jalankan di web browser.

---


## 📚 Tambah Data

Buat file ```tambah-data.php```

Tuliskan code berikut di dalamnya

```php
<?php 

    /*
    TAMBAH DATA
    */

    // Integrasi koneksi
    require_once('./config/koneksi2.php');

    // Perintah SQL untuk buat table
    $sql = "INSERT INTO anggota(
                            id, 
                            id_kategori, 
                            nama_depan, 
                            nama_belakang, 
                            email, 
                            kata_sandi, 
                            foto
                            ) 
                    VALUES ('',
                            '1', 
                            'Samuel', 
                            'Bosawer', 
                            'samuel.bosawer@gmail.com',
                            'SaCode@2022',
                            'samuel.jpg')";

    // Melakukan permintaan ke database
    $query = $koneksi->query($sql);

    // Periksa permintaan berhasil atau gagal
    if ($query === TRUE) {
        echo "<b>Berhasil!</b> Tabel sudah jadi...";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

?>
```

💾 Simpan dan jalankan di web browser.

---


## 📚 Ubah Data

Buat file ```ubah-data.php```

Tuliskan code berikut di dalamnya

```php
// codes
```

💾 Simpan dan jalankan di web browser.

---


## 📚 Hapus Data

Buat file ```hapus-data.php```

Tuliskan code berikut di dalamnya

```php
// codes
```

💾 Simpan dan jalankan di web browser.

---

| <br>
| <br>
| Happy Coding! <br>
| by <b>Janzen Faidiban </b><br>
| <br>
| <br>