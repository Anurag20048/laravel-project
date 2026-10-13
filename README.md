# Laravel Student Management System (CRUD)

A basic Laravel 10 student-management application for Open Source Technologies (OST) practicals. Includes student CRUD operations, Blade views, MySQL migrations, and validation.

## Requirements
- PHP 8.1+
- Composer
- MySQL / MariaDB (XAMPP works)
- Git (optional)

## Setup
1. Clone this repository:
   ```bash
   git clone https://github.com/Anurag20048/laravel-project.git
   cd laravel-project
   ```
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Create a database named `student_management` in phpMyAdmin.
4. Create your local environment file:
   ```bash
   cp .env.example .env
   ```
   On Windows Command Prompt, use `copy .env.example .env`.
5. Update `.env` with your database credentials. The defaults for a standard XAMPP setup are often:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=student_management
   DB_USERNAME=root
   DB_PASSWORD=
   ```
6. Generate the application key and run migrations:
   ```bash
   php artisan key:generate
   php artisan migrate
   ```
7. Start the local server:
   ```bash
   php artisan serve
   ```
8. Visit http://127.0.0.1:8000.

## CRUD routes
- `GET /student` - list students
- `POST /student/save` - create student
- `GET /student/{stu_id}/edit` - show edit form
- `POST /student/{stu_id}/update` - update student
- `GET /student/{stu_id}/delete` - delete student
- `GET /student/{stu_id}/manage` - manage student records

Run `php artisan route:list` to see all routes.

## Notes
- Do not commit your local `.env` file or database credentials.
- This repository contains Laravel source code; dependencies are installed with Composer.
- Review the routes and controller before exposing the application publicly.
