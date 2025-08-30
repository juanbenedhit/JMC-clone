# Proyek Tes Teknis - JMC Clone

Proyek ini dibuat untuk memenuhi **Tes Teknis Web Developer (Internship)** dengan membuat sebuah website company profile sederhana menggunakan **PHP murni** dan beberapa teknologi pendukung.

## Teknologi yang Digunakan

- **Backend**: PHP Murni (Tanpa Framework)
- **Frontend**: Bootstrap (CSS) & jQuery (JavaScript)
- **Database**: MySQL / MariaDB (PDO)
- **Template Engine**: Plates

## Panduan Instalasi

1. **Clone repositori**

   ```bash
   git clone https://github.com/username/jmc-clone.git

   ```

2. **Masuk ke direktori proyek**

   ```bash
   cd jmc-clone
   ```

3. **Install dependency dengan Composer**

   ```bash
   composer install
   ```

4. **Buat database baru di MySQL/MariaDB**
   SQL

   CREATE DATABASE jmc_clone;

5. **Import struktur tabel untuk form kontak**
   SQL

   CREATE TABLE contacts (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   message TEXT NOT NULL,
   submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

6. **Jalankan proyek**

   ```bash
   php -S localhost:8000 -t public
   ```

7. **Akes proyek di browser**
   http://localhost:8000
