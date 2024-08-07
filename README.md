# Hotel Nirwana Website

## Struktur Folder

- **index.php**: Halaman utama website yang mencakup header, slider gambar, bagian tentang kami, daftar kamar, dan harga. Memuat file CSS eksternal, Swiper, dan JavaScript.
- **form.php**: Bagian untuk formulir pemesanan kamar. Termasuk input untuk nama, nomor identitas, jenis kelamin, tipe kamar, tanggal pesan, durasi menginap, termasuk breakfast, dan total bayar.
- **koneksi.php**: File untuk menghubungkan ke database MySQL.
- **css/style.css**: File CSS untuk gaya dan desain halaman website.
- **script.js**: File JavaScript untuk fungsionalitas tambahan seperti perhitungan total bayar.
- **images/**: Folder yang menyimpan gambar-gambar yang digunakan di website.

## Penjelasan Sumber Daya Pemrograman

### HTML
- `index.php`: Menggunakan HTML5 untuk struktur halaman, termasuk elemen dasar seperti header, nav, dan sections. Bagian slider menggunakan Swiper untuk menampilkan gambar dengan efek geser.

### CSS
- **Font Awesome**: Diimpor dari CDN untuk ikon.
- **Swiper**: Diimpor dari CDN untuk slider gambar.
- **style.css**: File CSS kustom untuk desain khusus dari website, termasuk pengaturan layout, warna, dan responsif.

### JavaScript
- **Swiper**: Diimpor dari CDN untuk fungsionalitas slider gambar.
- **script.js**: Menyediakan logika tambahan untuk pemesanan, termasuk perhitungan total bayar dan validasi input.

### PHP
- **form.php**: Mengandung kode PHP untuk menyimpan data pemesanan ke database MySQL saat formulir dikirim. Menyertakan validasi dan pengolahan data input dari pengguna.
- **koneksi.php**: Mengatur koneksi ke database MySQL untuk penyimpanan data.

### Database
- **reservations**: Tabel di database untuk menyimpan informasi pemesanan kamar, seperti nama pemesan, nomor identitas, jenis kelamin, tipe kamar, durasi menginap, diskon, dan total bayar.

## Catatan

1. Pastikan file `koneksi.php` sudah dikonfigurasi dengan benar untuk menghubungkan ke database MySQL Anda.
2. Periksa kembali kredensial dan konfigurasi database jika terjadi kesalahan saat menyimpan data pemesanan.
3. Uji fungsionalitas seluruh website termasuk form pemesanan dan slider gambar untuk memastikan semua elemen bekerja dengan baik.

Jika ada pertanyaan lebih lanjut atau memerlukan bantuan, jangan ragu untuk menghubungi tim pengembang.
