Larablog adalah sebuah blog sederhana yang menginplementasikan crud didalamnya, ada 2 role yang dibuat yaitu admin dan user biasa dengan menggunakan fitur middleware dan gate dilaravel. yang membedakan role tersebut terletak di pengelolaan categories yang hanya bisa diakses oleh admin saja

Teknologi yang digunakan:

-   Laravel 9.19
-   Bootstrap 5.2.x
-   Bootstrap Icons 1.10
-   Trix-editor

Cara Install larablog:

1. clone https://github.com/maulanayusup701/Larablog.git
2. install dependency dengan mengetik $composer install
3. setup environt variabel dengan mengcopy file .env $cp .env.example .env
4. generate APP_KEY $php artisan key:generate
5. buat DB:larablog di mysql
6. lakukan migrate dan seed $php artisan migrate --seed

Akun Larablog :

User
Username = user
password = 12345

Admin
Username = aoifutaba701
password = 12345
