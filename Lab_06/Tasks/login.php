<?php
 $servername = "localhost";
 $db_username = "root";
 $db_password = "";
 $dbname = "testproject";

 $conn = new mysqli($servername, $db_username, $db_password, $dbname);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 else{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
   

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM users WHERE (username = ? OR email = ?) AND password = ?");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with provided credentials exists
    if ($result->num_rows === 1) {
        // User authenticated successfully
        echo "Login successful!";
        
        // Redirect to dashboard or homepage
        // header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username/email or password.";
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container input[type="email"]
         {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        span{
            display: block;
            text-align: center;
            margin-top: 10px;
        }
        span a{
            color: blue;
            text-decoration: none;
            
        }
    </style>
</head>
<body>
    <nav>
        
    </nav>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <span>Not register <a href="Task2.php"> Signup</a></span>
        </form>
    </div>
</body>
</html>
