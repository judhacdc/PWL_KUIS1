# PWL_KUIS1
<h1 align="center">Selamat datang di KUIS 1 kami ! 👋</h1>

## Install

1. **Clone Repository**

```bash
git clone https://github.com/judhacdc/PWL_KUIS1.git
cd PWL_KUIS1
composer install
npm install
copy .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=arsha
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

