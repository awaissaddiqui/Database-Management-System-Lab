<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Prerequisites
Before you begin, make sure you have Composer installed on your system. You can download Composer from <a href="https://getcomposer.org/download/"> here.</a>

## Step 1: Create Laravel Project
``` composer create-project laravel/laravel project-name ```
## Step 2: Install Laravel Breeze for Authentication
``` 
 composer require laravel/ui --dev 
 php artisan ui vue --auth 
 composer require laravel/breeze --dev 
 php artisan breeze:install 
```
## Step 3: Create Department Model
``` php artisan make:model Department ```

## Step 4: Create Employees Table Migration
``` php artisan make:migration create_employees_table ```

## Step 5: Run Database Migrations
``` php artisan migrate ```

## Step 6: Seed Departments and Employees
``` 
php artisan make:seeder DepartmentSeeder
php artisan make:seeder EmployeeSeeder
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=EmployeeSeeder

```
This will seed the database with sample data for departments and employees.

Now you have successfully set up a Laravel project with authentication and seeded database tables. You can start building your application!

## Learning Laravel
Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
# Output
<img src="./Dashboard.png" alt="Awais Saddiqui">
<img src="./Dashboard2.png" alt="Awais Saddiqui">