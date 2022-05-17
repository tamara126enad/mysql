<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB="pdo";

// set the PDO error mode to exception ;dbname=myDB"
try {$conn = new PDO("mysql:host=$servername;$DB", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE $DB";// use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";}
  catch(PDOException $e)
   {
       echo $sql . "<br>" . $e->getMessage();
   }
       $conn = null;


// CREATE TABLE MyGuests 
// (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP);

?>