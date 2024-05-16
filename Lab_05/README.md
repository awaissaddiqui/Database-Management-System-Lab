<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Prerequisites
Before you begin, make sure you have Composer installed on your system. You can download Composer from <a href="https://getcomposer.org/download/" target="_blank"> here.</a>


## Step 1: Create Laravel Project
``` bash
 composer create-project laravel/laravel project-name
  ```

# Change your database name and database in .env file .

## Step 2: Install Laravel Breeze for Authentication
``` bash
 composer require laravel/ui --dev 
 php artisan ui vue --auth 
 composer require laravel/breeze --dev 
 php artisan breeze:install 
```
## Step 3: Create Department Model
``` bash
php artisan make:model Department 
```
write your code in Department Model ``` app/Models/Department.php```

## Step 4: Create Employees Table Migration
``` bash 
php artisan make:migration create_deparments_table 
```
Write your code for the departments table. ``` database/migrations/_create_departments_table.php```

## Step 5: make Departments Seeder
``` bash 
php artisan make:seeder DepartmentSeeder 
```
Insert data into departments table. ``` database/seeders/DepartmentSeeder.php```

## Step 6: Seed  Deparments
``` bash
 php artisan db:seed --class=DepartmentSeeder 
 ```

This will seed the database with sample data for departments.

## Step 7: Run Database Migrations
``` php artisan migrate ```

## Step 8: Create Employee Model
``` bash
 php artisan make:model Employee 
 ```
write your code in Employee Model ``` app/Models/Employee.php```

## Step 9: Create Employees Table Migration
``` bash
 php artisan make:migration create_employees_table 
 ```
Write your code for the employees table.  ``` database/migrations/_create_employees_table.php```

## Step 10: make Employees Seeder
``` bash 
php artisan make:seeder EmployeeSeeder 
```
Insert data into Employees table. ``` database/seeders/EmployeeSeeder.php```

## Step 11: Seed  Employees
``` bash 
php artisan db:seed --class=DepartmentSeeder 
```

## Step 12: Run Database Migrations
``` php artisan migrate ```

## Step 13: Make a Employee Controller 
``` php artisan make:controller EmployeeController ```

## Step 14: Make a new route 
make a new route for a EmployeeController or simple add this code to your /routes/web.php 

``` bash
 Route::get('/dashboard', [EmployeeController::class, 'index'])->name('dashboard'); 
 ```

Replace the function name "index" according to your function in EmployeeController . ```app/Http/Controllers/EmployeeController.php```

## Step 15: Display your data on screen.
make a new file in views.

``` /resources/views/dashboard.blade.php ```


## Learning Laravel
Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
# Output
<img src="./Dashboard.png" alt="Awais Saddiqui">
<img src="./Dashboard2.png" alt="Awais Saddiqui">