
<?php
// Database connection details
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "testproject";

$myvar='';
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $name = $_POST['name'];

    // Check if the email exists
    $checkUser = $conn->prepare("SELECT * FROM users WHERE email = ? AND username = ?");
    $checkUser->bind_param("s", $email);
    $checkUser->bind_param("s", $name);
    
    if ($checkUser->execute()) {
        $result = $checkUser->get_result();
        if ($result->num_rows > 0) {
            // Email exists, proceed to delete
            $deleteUser = $conn->prepare("DELETE FROM users WHERE email = ?");
            $deleteUser->bind_param("s", $email);

            if ($deleteUser->execute()) {
                $myvar =  "Account successfully deleted.";
            } else {
                $myvar =  "Error deleting account: " . $deleteUser->error;
            }
            $deleteUser->close();
        } else {
            $myvar =  "No account found with that email.";
        }
        $checkUser->close();
    } else {
        $myvar =  "Error: " . $checkUser->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
            background-color: #f0f0f0;
        }
        form {
            background-color: #fff;
            margin: 50px auto;
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
        }
        input[type="email"], input[type="text"]{
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #CC0000;
        }
        nav{
            background-color: #333;
            overflow: hidden;
        }
        nav ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: start;
        }
        nav ul li{
            display: inline;
        }
        nav ul li a{
            text-decoration: none;
            color: white;
            padding: 14px 20px;
            display: inline-block;
        }
        nav ul li a:hover{
            background-color: #ddd;
            color: black;
        }
        p{
            text-align: center;
            color: red;
            

        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Task2.php">Home</a></li>
            <li><a href="Task2.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            
        </ul>

    </nav>
    <p>
        <?php
            echo $myvar;
        ?>
    </p>
    <form action="" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <input type="submit" value="Delete Account">
        </div>
    </form>
</body>
</html>
