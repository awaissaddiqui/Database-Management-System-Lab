<?php
    $db_username ='root'; // Changed variable name to avoid conflict
    $db_password = '';
    $server = 'localhost';
    $db = 'testproject';
    $newRecord ='';

    $conn = new mysqli($server, $db_username, $db_password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email already exists
        $checkUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $checkUser->bind_param("s", $email);
        
        if ($checkUser->execute()) {
            $result = $checkUser->get_result();
            if ($result->num_rows > 0) {
                $newRecord = "Email already exists";
                $checkUser->close();
            } else {
                $checkUser->close();

                // Insert new user
                $sql = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $sql->bind_param("sss", $username, $email, $hashPassword);

                if ($sql->execute()) {
                    $newRecord = "New record created successfully";
                } else {
                    echo "Error: " . $sql->error;
                }
                $sql->close();
            }
        } else {
            echo "Error: " . $checkUser->error;
            $checkUser->close();
        }
    }

    $conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Dropdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        img {
            width: 50px;
            height: 50px;
            margin-left: 10px;
        }
        nav {
            background-color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
        }
        nav a {
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav .dropdown {
            position: relative;
        }
        nav .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        nav .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
        }
        nav .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        nav .dropdown-content a:hover {
            background-color: #ddd;
        }
        nav .dropdown:hover .dropdown-content {
            display: block;
        }
        nav .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        form {
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error{
            color: red;
            text-align: center;
            padding: 10px;

        }
        span a{
            color: blue;
            text-decoration: none;
            
        }

    </style>
</head>
<body>
    <nav>
        <div>
            <img src="./uet.png" alt="Logo">
        </div>

        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="delete.php">Delete Account</a>
                <a href="edit.php">Edit Profile</a>
            </div>
        </div>
    </nav>
    <form action="login.php" method="POST">
        <h2 >Registration</h2>
        <p class="error"><?php echo $newRecord; ?></p>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username"  name="username">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
        <span>Already have account <a href="login.php">Login </a></span>
    </form>
</body>
</html>


