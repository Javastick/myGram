## myGram

### Tentang

`myGram` merupakan proyek aplikasi web sederhana berbasis Laravel, dirancang untuk memfasilitasi berbagi gambar. Aplikasi ini memungkinkan pengguna untuk mengunggah, menampilkan, dan _follow_ pengguna lain.

### Fitur Utama

- **Unggah Gambar**: Pengguna dapat dengan mudah mengunggah gambar melalui antarmuka yang ramah pengguna.
- **Tampilan Gambar**: Menyajikan galeri gambar yang memungkinkan pengguna menjelajahi koleksi gambar yang diunggah.
- **Interaksi Pengguna**: Pengguna dapat _follow_ pengguna lain untuk melihat gambar yang diposting oleh pengguna yang difollow.
- **Manajemen Profil**: Fasilitas pengguna untuk mengelola profil, termasuk pengaturan foto profil dan informasi lainnya.

### Teknologi

- **Frontend**: Menggunakan Bootstrap untuk mendesain tampilan. Vue.js digunakan untuk menciptakan tombol _follow_ yang interaktif.
- **Backend**: Laravel bertanggung jawab dalam mengelola permintaan dan berinteraksi dengan database SQLite.
- **Database**: SQLite digunakan sebagai penyimpanan data untuk informasi pengguna.

### Cara Menjalankan Proyek

1. **Klon Repositori**:
   ```bash
   git clone https://github.com/Javastick/myGram.git
   cd myGram
   ```

2. **Instal Dependensi**:
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Variabel Lingkungan**:
   - Buat berkas `.env` dan sesuaikan.

4. **Jalankan Aplikasi**:
   ```bash
   php artisan serve
   npm start
   ```

5. Akses aplikasi melalui [http://localhost:3000](http://localhost:3000) di peramban web Anda.

### Kontribusi

Kontribusi dari komunitas sangat dihargai! Jika Anda berminat berkontribusi pada `myGram`, silakan buka _issues_ atau kirim _pull requests_.