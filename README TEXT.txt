E-Kiosk Perpustakaan
====================
Menggunakan :
PHP 5.6.3
MySQL 5.621 - mysqli
Framework Codeigniter 3.0
Bootstrap Backend - AdminLTE 2.1-alpha
Datatables
dst.

Fitur :
Frontend :
1. Video (background) diputar secara penuh jika tidak ada aktivitas dari user selama 10 detik
2. Login / Logout
3. Daftar Buku dengan pencarian berdasarkan judul, penulis, jenis, tahun, status dan dilengkapi tombol "Lihat" untuk melihat detail buku seperti deskripsi, cover buku hingga letak buku
4. Daftar Koran (harus login terbelih dahulu) juga bisa di-download
Backend :
1. Login / Logout
2. Dashboard dengan overview dari data buku, koran dan log
3. CRUD Buku
4. CRUD Koran
5. Manajemen Log
6. Rekap / Laporan semua data Buku atau Koran dalam bentuk Print, Excel dan PDF

Cara menjalankan :
1. Salin folder ekiosk-perpus ke folder htdocs / www
2. Upload database dengan menggunakan file .sql yang ada { ekiosk-perpus_db.sql }
3. Akses E-kiosk
Frontend : http://localhost/ekiosk-perpus
Backend : http://localhost/ekiosk-perpus/index.php/login

dengan user - password :
yufieko - yufieko
admin - admin

Oleh :
Achmad Agus Salim
Arbhi Setya Budi
Freeday Errigo Firdaus Samaqi
Yufi Eko Firmansyah
Nofa Rizqy Alfiati
Novita Candra