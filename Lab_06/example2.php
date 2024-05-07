<?php 
//PDO objece oriented method_exists
 //step  Database Connection + Database Selection 
 //server name, user, user's password, and database 
 //must be provide 
 $servername = "localhost"; 
 $username = "root"; 
 $password = "";
 $dbname = "testproject";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if($conn->connect_error){
    die('Connection faild: '.$conn->connect_error);
 }
    else{
        echo "<h5>Connected...</h5>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Object Oreinted Method</title>
</head>
<body>
    <?php
    $sqlQuery = "SELECT * FROM departments";
    $result = $conn->query($sqlQuery);
    while($row = $result->fetch_assoc()){
        echo "<h1>".$row['depID']." ".$row['depName']."</h1>";
    }
?>

    <?php
    mysqli_free_result($result);
    ?>
</body>
</html>

<?php

$conn->close();