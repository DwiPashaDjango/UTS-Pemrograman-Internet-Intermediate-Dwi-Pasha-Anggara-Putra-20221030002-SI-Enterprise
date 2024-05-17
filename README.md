#UTS Pemrograman Internet Intermediate - Dwi Pasha Anggara Putra - 20221030002 - SI - Enterprise

Silahkan Lakukan Langkah-langkah Setup Di Bawah Untuk Menjalankan Aplikasi Laravel Ini 


#Setup

buka direktori project di terminal anda.
ketikan command : cp .env.example .env (copy paste file .env.example)
buat database
Lalu ketik command dibawah ini

composer install
php artisan optimize:clear
php artisan key:generate (generate app key)
php artisan migrate (migrasi database)
php artisan db:seed