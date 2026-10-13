# Student CRUD source import

The Laravel Student Management System source was uploaded into this repository from the provided archive.

## Run locally
1. Ensure PHP 8.1+, Composer, and MySQL/MariaDB are installed.
2. Run `composer install`.
3. Copy `.env.example` to `.env` and set your local database credentials.
4. Create the database configured in `.env`.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate`.
7. Run `php artisan serve` and open http://127.0.0.1:8000.

See README.md for setup and CRUD route notes. The project is for local OST practical learning. Inspect and test before public deployment.
