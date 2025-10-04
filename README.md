### Dependencies

-   php
-   composer
-   node
-   npm
-   mysql

### How to run

1. Install composer: `composer install`
2. Copy .env.example to a new file called .env
3. Generate app key: `php artisan key:generate`
4. Run migrations: `php artisan migrate`
   4.1. If mysql is not installed run first: `sudo apt install php-mysql`
   4.2. If access is denied, create a dedicated MySQL user for Laravel:
   `sudo mysql`
   `CREATE DATABASE laravel;`
   `CREATE USER 'laraveluser'@'localhost' IDENTIFIED BY 'secret';`
   `GRANT ALL PRIVILEGES ON laravel.* TO 'laraveluser'@'localhost';`
   `FLUSH PRIVILEGES;`
   `EXIT;`
   Update the .env file with:
   `DB_CONNECTION=mysql`
   `DB_HOST=127.0.0.1`
   `DB_PORT=3306`
   `DB_DATABASE=laravel`
   `DB_USERNAME=laraveluser`
   `DB_PASSWORD=secret`
   Run migrations again
5. Install npm: `npm install`
6. Run dev (for development): `npm run dev`
   6.1. Run build (for production): `npm run build`
7. Serve the Laravel app (runs local server, usually http://127.0.0.1:8000): `php artisan serve`
