<?php 
//step  Database Connection + Database Selection + Check Connection 
 
 //server name, user, user's password, and database 
 //must be  
 $username = 'root'; 
 $password = ''; 
 try 
 { 
 $str = 'mysql:host=localhost;dbname=testproject; charset=utf8'; 
 $db = new PDO($str,$username, $password); 
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 echo "Connected successfully"; 
 echo "</br>"; 
 echo "</br>"; 
 } 
 catch(PDOException $e) 
 { 
 echo "Connection failed: ".$e->getMessage(); 
 } 
 ?> 

 <!DOCTYPE html> 
 <html> 
 <head> 
 <title>Php-PDO Basics </title> 
 </head> 
 <body> 
 <?php 
 //step  Perform query or operation on database 
 $q = $db->prepare("select * from departments"); 
 $q->execute(); 

 //step  Show result 
 $q_records = $q->fetchAll(); 
 foreach ($q_records as $row){ 
 printf ("%s %s\n",$row["depID"],$row["depName"]); 
 echo "</br>"; 
 } 
 ?> 
 </body> 
 </html> 

 <?php 
 //step  Close Database 
 $db = null; 
 
 ?>