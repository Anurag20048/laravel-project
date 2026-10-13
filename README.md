# Laravel Student Management System (CRUD)

A basic Laravel 10 Student Management System for Open Source Technologies (OST) practicals. It demonstrates Create, Read, Update, and Delete operations using Laravel MVC, Blade, Eloquent ORM, and MySQL.

## Features
- Register student name, date of birth, address, and status
- List student records
- Edit existing records
- Delete records with confirmation
- Manage additional records for each student
- Server-side validation and CSRF protection
- MySQL migrations
- Responsive Bootstrap interface

## Requirements
- PHP 8.1+
- Composer
- MySQL or MariaDB (XAMPP works)

## Run locally on Windows / XAMPP

1. Clone the repository:
   ```bash
   git clone https://github.com/Anurag20048/laravel-project.git
   cd laravel-project
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy environment settings:
   ```bat
   copy .env.example .env
   ```
   PowerShell can also use `Copy-Item .env.example .env`. If using macOS/Linux, use `cp .env.example .env`.

4. Create a database called `student_management` in phpMyAdmin, then set database configuration in `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=student_management
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   Update the username and password to match your local MySQL setup.

5. Generate the app key and run database migrations:
   ```bash
   php artisan key:generate
   php artisan migrate
   ```

6. Start the app:
   ```bash
   php artisan serve
   ```

7. Open http://127.0.0.1:8000 in your browser. Use the **Student Management** screen to create, view, edit, and delete student records.

## Useful commands
```bash
php artisan route:list
php artisan migrate:status
php artisan optimize:clear
```

## Main files
- `app/Models/Student.php`: Eloquent model
- `app/Models/StuRecord.php`: additional student record model
- `app/Http/Controllers/StudentController.php`: CRUD logic and validation
- `routes/web.php`: application routes
- `database/migrations/`: table definitions
- `resources/views/pages/student/`: Blade views

## Notes
- This repository contains application source. Install dependencies with Composer before running it.
- Never commit your local `.env`, database passwords, or real student data.
- This project is intended for local learning and practical demonstration. Review and test the code before production use.
