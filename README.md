<p>Deskripsi:</p>
<p>LaraBlog adalah sebuah platform blog sederhana yang dibangun dengan menggunakan framework Laravel. Platform ini telah mengimplementasikan operasi CRUD (Create, Read, Update, Delete) untuk berbagai entitas, seperti postingan (blog posts) dan kategori (categories). Terdapat dua peran pengguna (user) yang berbeda dalam sistem ini, yaitu admin dan user biasa.</p>

-   Fitur-fitur penting dalam LaraBlog: CRUD Operations: Pengguna yang telah terotentikasi (login) dapat membuat, melihat, mengedit, dan menghapus postingan mereka sendiri.

-   Admin Role: Selain pengguna biasa, ada peran khusus yaitu "admin." Admin memiliki hak akses yang lebih tinggi dan dapat mengelola seluruh konten di platform, termasuk postingan dari semua pengguna dan kategori.

-   Middleware: Untuk mengatur akses ke fitur-fitur tertentu, seperti pengelolaan kategori, sistem menggunakan fitur middleware di Laravel. Middleware berfungsi sebagai penyaring (filter) yang memeriksa peran pengguna sebelum memutuskan apakah pengguna tersebut diizinkan untuk mengakses suatu fitur atau tidak.

-   Gate: Laravel juga menggunakan fitur Gate untuk mengatur izin akses secara lebih rinci. Dengan Gate, kami dapat menentukan peraturan khusus tentang siapa yang boleh mengakses aksi tertentu, seperti mengelola kategori. Dalam hal ini, aksi pengelolaan kategori hanya diizinkan untuk pengguna yang memiliki peran sebagai admin.

<p>Dengan konfigurasi middleware dan gate yang tepat, LaraBlog dapat memastikan bahwa pengguna dengan peran admin memiliki akses penuh ke pengelolaan kategori, sementara pengguna biasa hanya dapat mengelola postingan pribadi mereka tanpa akses ke fitur pengelolaan kategori.</p>

<p>Penggunaan middleware dan gate pada platform ini meningkatkan keamanan dan pengaturan hak akses, sehingga memastikan bahwa setiap pengguna hanya dapat melakukan tindakan yang sesuai dengan peran dan izin mereka di dalam LaraBlog.</p>

<p>Teknologi yang digunakan:</p>

-   Laravel 9
-   Mysql
-   Bootstrap 5.2.x
-   Bootstrap Icons 1.10
-   Trix-editor

<p>Prasyarat:</p>

-   Git https://git-scm.com/
-   PHP ^8.0, Mysql
-   Composer https://getcomposer.org/

<p>Cara Install Project:</p>

-   Download atau clone project => $git clone https://github.com/maulanayusup701/Laravel-Larablog.git
-   Buka folder project dan buka gitbash
-   Install dependency => $composer install
-   Setup environt variabel dengan mengcopy file .env => $cp .env.example .env
-   Buka file .env kemudian isi DB_DATABASE dengan nama larablog
-   Buat DB larablog di mysql
-   Generate APP_KEY => $php artisan key:generate
-   Lakukan migrate dan seed => $php artisan migrate --seed

<p>Akun</p>

1. Akun User

-   Username = user
-   Password = 12345

2. Akun Admin

-   Username = aoifutaba701
-   password = 12345
