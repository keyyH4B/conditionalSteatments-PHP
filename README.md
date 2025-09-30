Tentu, ini adalah dokumentasi README.md yang lengkap dan menarik untuk kedua file PHP Anda.

# Kumpulan Tugas Pemrograman Web dengan PHP

Selamat datang di repositori kumpulan tugas pemrograman web! Repositori ini berisi dua proyek kecil yang dikembangkan menggunakan PHP native. Setiap proyek dirancang untuk menunjukkan implementasi logika pemrograman dasar dalam konteks aplikasi web sederhana.

## 📂 Struktur Proyek

Berikut adalah struktur direktori dari proyek ini:

.
├── tokopakaian.php
└── gaji.php

code
Code
download
content_copy
expand_less
## 🚀 Proyek yang Tersedia

### 1. Program Diskon Toko Pakaian (`tokopakaian.php`)

Aplikasi web sederhana untuk menghitung diskon belanja di sebuah toko pakaian berdasarkan total pembelian.

#### ✨ Fitur Utama

*   **Input Total Belanja:** Pengguna dapat memasukkan total nominal belanja.
*   **Perhitungan Diskon Dinamis:**
    *   **Diskon 20%** diberikan untuk total belanja di atas Rp 300.000.
    *   **Diskon 15%** diberikan untuk total belanja Rp 300.000 ke bawah.
*   **Bonus Tambahan:** Pelanggan dengan total belanja di atas Rp 300.000 akan mendapatkan bonus berupa *voucher* belanja senilai Rp 50.000.
*   **Tampilan Hasil:** Menampilkan rincian total belanja, jumlah diskon yang didapat, dan total yang harus dibayarkan dengan format mata uang yang mudah dibaca.

#### 🛠️ Cara Menggunakan

1.  Buka file `tokopakaian.php` di browser Anda.
2.  Masukkan jumlah total belanja pada kolom yang tersedia.
3.  Klik tombol **"Hitung"** untuk melihat hasilnya.
4.  Hasil perhitungan akan ditampilkan di bawah formulir.

#### 📸 Tampilan Aplikasi

![Tampilan Aplikasi Toko Pakaian](https://i.imgur.com/your-screenshot-link-for-tokopakaian.png) 

---

### 2. Sistem Penggajian Karyawan (`gaji.php`)

Sebuah sistem sederhana untuk menghitung gaji bersih karyawan berdasarkan beberapa komponen seperti golongan, status pernikahan, jumlah anak, dan hari lembur.

#### ✨ Fitur Utama

*   **Gaji Pokok Berdasarkan Golongan:**
    *   Golongan 1: Rp 2.300.000
    *   Golongan 2: Rp 3.200.000
    *   Golongan 3: Rp 4.100.000
    *   Golongan 4: Rp 5.100.000
*   **Tunjangan Keluarga:**
    *   **Tunjangan Istri:** 15% dari gaji pokok, diberikan jika status karyawan "Menikah".
    *   **Tunjangan Anak:** 5% dari gaji pokok per anak, dengan maksimal 3 anak yang dihitung.
*   **Uang Lembur:** Dihitung sebesar Rp 100.000 per hari lembur.
*   **Perhitungan Gaji Bersih:** Menjumlahkan semua komponen gaji (gaji pokok + tunjangan + uang lembur) untuk mendapatkan total gaji bersih.
*   **Tampilan Rincian:** Hasil perhitungan ditampilkan secara terstruktur, mencakup semua komponen gaji hingga total gaji bersih.

#### 🛠️ Cara Menggunakan

1.  Akses file `gaji.php` melalui browser.
2.  Isi formulir dengan data karyawan:
    *   Pilih **Golongan**.
    *   Pilih **Status** (Menikah / Belum Menikah).
    *   Masukkan **Jumlah Anak** (jika sudah menikah, maksimal 3).
    *   Masukkan jumlah **Hari Lembur**.
3.  Klik tombol **"Hitung Gaji"**.
4.  Rincian gaji akan muncul di bagian bawah halaman.

#### 📸 Tampilan Aplikasi

![Tampilan Aplikasi Gaji Karyawan](https://i.imgur.com/your-screenshot-link-for-gaji.png)

## 💻 Teknologi yang Digunakan

*   **PHP:** Sebagai bahasa pemrograman utama untuk logika backend.
*   **HTML:** Untuk struktur halaman web.
*   **CSS:** Untuk memberikan gaya dan tampilan yang menarik pada antarmuka pengguna.

## 💡 Kontribusi

Saat ini, proyek ini hanya untuk tujuan demonstrasi dan tidak terbuka untuk kontribusi. Namun, Anda bebas untuk melakukan *fork* atau menggunakan kode ini sebagai referensi untuk proyek Anda.

---

Terima kasih telah mengunjungi repositori ini!
