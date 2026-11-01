# My Music Vaault - Platform/Blog Pribadi Daily Listener

Proyek Mini Individu Ujian Tengah Semester (UTS) mata kuliah **Pemrograman Web (253A23W15)** - Program Studi Informatika - Fakultas Teknik - Tiga Serangkai University

---

## 1. Identitas Mahasiswa
* **Nama Lengkap    : Hillario Jasson Vlavian Vega Christamma**
* **NIM             : 025A00200007**
* **Program Studi   : Informatika**
* **Mata Kuliah     : Pemrograman Web (253A23W15)**
* **Universitas     : Tiga Serangkai University**

---

## 2. Deskripsi Singkat
**My Music Vault** adalah sebuah aplikasi web profil dan katalog dinamis yang berbasis PHP yang menampilkan koleksi musik pilihan dari lintas genre, mulai dari K-Pop, Rock hingga Country. Proyek individu ini dibagun tanpa database (menggunakan array multidimensi dari PHP) dan untuk mengimplementasikan materi dasar pemrograman web dari sisi client dan server logika percabangan, perulangan dan manipulasi array di PHP.

---

## 3. Cara Menjalankan Proyek di Localhost
Ikuti langkah-langkah dibawah ini untuk menjalankan proyek di local server

1. **Pastikan Sudah Mengaktifkan Server PHP**
    * Instal dan jalankan local web server seperti **Laragon**, **XAMPP**
2. **Kloning atau Salin Repositori**
    Lakukan **git clone** atau ekstrak file yang sudah diinstal dalam bentuk ZIP, ekstrak langsung ke ddalam direktori *document root* di server anda. Pastikan folder proyek dinamai sesuai format tugas, contohnya :
        * **Laragon**   : `C:\laragon\www\uts-pemweb-025A00200007`
        * **XAMPP**     : `C:\xampp\htdocs\uts-pemweb-025A00200007`
3. **Akses Melalui Web Browser:**
    * Buka web browser(Chrome) dan akses tautan berikut: 
    ```
    http://localhost/uts-pemweb-025A00200007
    ```
    * Gunakan menu navigasi yang tersedia dibagian atas untuk berpindah antar halaman Profil dan halamanan Katalog Musik

---

## 4. Daftar Fitur
Berikut adalah daftar fitur utama beserta file dan fungsi yang menanganinya:
- Halaman Profil Kolektor : menampilkan info biodata dan foto di `index.php`
- Data Katalog : menampilkan kartu musik dari array dengan fungsi `foreach (katalog.php)`
- Filter Genre : menyaring lagu berdasarkan genre yang dipilih, ditangani oleh form GET di `katalog.php` dan fungsi `filterBerdasarkanGenre()` di `functions.php`
- Pengurutan (Sort) Katalog : mengurutkan musik berdasarkan judul A-Z dan Z-A, Tahun (Terbaru, Terlama). Ditangani form GET di `katalog.php` dan fungsi `urutkanKatalog()` di `functions.php`
- Era Lagu Klasik/Modern : memberikan badge dinamis berdasarkan tahun rilis lagu menggunakan percabangan if dan ditangani fungsi `dapatkanEraLagu()` di `functions.php` dan di tampilkan di `katalog.php`
- Ringkasan Koleksi : menampilkan jumlah total lagu di vault dan total lagu setelah di filter `katalog.php`

## 5. Fungsi Array Bawaan Yang Dipakai
1. `array_column()` : digunakan di `katalog.php`, untuk mengambil satu kolom nilai spesifik yaitu `genre`, dari kumpulan array assosiatif `$koleksiMusik`
2. `array_unique()` : digunakan di `katalog.php` bersama `array_column()` untuk menghilangkan duplikasi nama genre, sehingga pilihan di dropdown tidak ada nilai ganda
3. `array_filter()`: digunakan di fungsi buatan `filterBerdasarkanGenre()` pada `functions.php` untuk menyaring filter/array koleksi musik sehingga hanya mengembalikan data yang genrenya cocok
4. `usort()` : Digunakan di dalam fungsi buatan `urutkanKatalog()` pada `functions.php` untuk mengurutkan nilai di dalam array secara kustom `(judul A-Z, atau tahun rilis)` menggunakan user-defined comparison function
5. `count()` : digunakan di `katalog.php` untuk menghitung total item didalam array, baik semua koleksi maupun jumlah lagu setelah di filter

---

## 6. Tangkapan Layar (Screenshots) Aplikasi
- ### Tangkapan Layar Halaman Profile `index.php`
  - ![Tampilan Halaman Profile](screenshots\WebProfil.png)
- ### Tangkapan Layar Halaman Katalog `katalog.php`
  - ![Tampilan Halaman Katalog](screenshots\WebKatalog1.png)
  - ![Tampilan Halaman Katalog](screenshots\WebKatalog2.png)

---

## 7. Sumber Referensi dan Penggunaan AI
  - Referensi UI desain dan Konsep:
    * Menginspirasi tata letak kartu (card layout) pada grid katalog. Serupa dengan antarmuka Spotify, cover album ditempatkan sebagai fokus utama di bagian atas kartu untuk menarik perhatian visual, diikuti dengan tipografi judul lagu dan nama artis yang rapi di bawahnya. Pendekatan ini dipilih untuk menciptakan hierarki visual yang bersih, modern, dan terasa familiar bagi pengguna, sekaligus dipadukan dengan efek hover bayangan agar kartu terasa lebih interaktif.
  - Catatan Penggunaan AI:
    * Berikut adalah transparansi penggunaan AI selama proses pengembangan proyek ini:
      - Perancangan Struktur, Tampilan, dan Konten:
        * Diskusi untuk menyusun kerangka HTML, memilih desain dan kombinasi warna tata letak, serta menyusun isi konten website seperti teks deskripsi agar sesuai dengan tema katalog musik yang dipilih
      - Pemahaman Alur Logika:
        * Digunakan untuk memberikan penjelasan mengenai bagaimana cara kerja fungsi array yang saya cantumkan dalam projek ini
      - Lacak dan Penyelesaian Error (Debugging Kode):
        * Digunakan untuk membantu menelusuri apakah ada error atau tidak, dan juga jika ada error akan ditanyakan error karena apa, sejauh ini error saya karena kesalahan dalam penulisan
  - Pemeriksaan Mandiri:
    * Validasi dan Uji Coba Mandiri: Dari setiap kode atau teks hasil saran dan diskusi dengan AI tidak langsung saya tempel, melainkan saya coba praktikkan di file yang berbeda dengan file utama, jadi kalau salah ataupun ingin kreasi sendiri bisa ditambah/dikurangi kodenya. Jadi bisa saya sesuaikan untuk modifikasi data, nambah variabel/nambah class