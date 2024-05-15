<?php
   
   $username = 'root';
   $password = '';
   $dbname = 'testproject';
   $error11 = '';
    $response = '';
   $conn = new mysqli('localhost', $username, $password, $dbname);

   // Check the connection
   if($conn->connect_error) {
       die('Connection failed: ' . $conn->connect_error);
   }

   // Handle POST request
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
       $name = $_POST['name'];
       $email = $_POST['email'];

       // Prepare and execute the update statement
       if (!empty($name) && !empty($email)) {
           $stmt = $conn->prepare("UPDATE users SET username = ? WHERE email = ?");
           if ($stmt) {
               $stmt->bind_param("ss", $name, $email);
               if ($stmt->execute()) {
                   $response= "Profile updated successfully!";
               } else {
                $error11 = "Error updating profile: " . $stmt->error;
               }
               $stmt->close();
           } else {
            $error11=  "Error preparing statement: " . $conn->error;
           }
       } else {
           $error11= "Name and email cannot be empty.";
       }

       // Close the connection
       $conn->close();
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

nav {
    background-color: #333;
    overflow: hidden;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: #ddd;
    color: black;
}

.update-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 50px auto;
    text-align: center;
}

.update-container h2 {
    margin-bottom: 20px;
}

.update-container div {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="email"] {
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
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}
#res{
    color: green;    
}
#err{
    color: red;
}

</style>
<body>
    <nav>
        <ul>
            <li><a href="Task2.php">Home</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
    </nav>
    <div class="update-container">
        <h2>Update Profile</h2>
        <p id="res"><?php echo $response ?></p>
        <p id="err"><?php echo $error11 ?></p>
        
        <form action="" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>
