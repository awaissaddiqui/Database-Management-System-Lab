<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Employee Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        nav {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border: 1px solid white;
            border-radius: 50px;
        }
        nav ul {
            list-style: none;
            display: flex;
            align-items: center;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
        nav ul li a:hover {
            color: #3a703a;
        }
        .hero {
            background: url('bg.jpeg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(22, 153, 22);
            text-align: center;
        }
        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 20px;
        }
        .content {
            padding: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
            margin: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .card h3 {
            margin-bottom: 10px;
        }
        .card p {
            font-size: 14px;
            color: #777;
        }
       
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="logo.jpg" alt="logo">
            <span>Employee Management System</span>
        </div>
        <ul>
           <li><a href="/login">Login</a></li>
           <li><a href="/register">Register</a></li>
        </ul>
    </nav>

    <div class="hero">
        <div>
            <h1>Welcome to Employee Management System</h1>
            <p>Manage your employees with ease and efficiency</p>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <img src="emp.png" alt="Feature 1">
            <h3>Track Employees</h3>
            <p>Easily track and manage employee information and performance.</p>
        </div>
        <div class="card">
            <img src="dep.png" alt="Feature 2">
            <h3>Manage Departments</h3>
            <p>Organize your employees into departments for better management.</p>
        </div>
        {{-- Add new employees data --}}
        <div class="card">
            <img src="new.png" alt="Feature 3">
            <h3>Add New Employees</h3>
            <p>Add new employees to your database with ease.</p>
       
    </div>
    <footer>
        <p>&copy; 2021 Employee Management System</p>
        <p>Designed by: Awais Saddiqui</p>
    </footer>
</body>
</html>
