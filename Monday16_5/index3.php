<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="ddbb";

try{
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  $conn->exec("SET character_set_connection = 'utf8'");
  $conn->exec("SET NAMES 'UTF8'");
  // set the PDO error mode to exception
  $t = "CREATE DATABASE $db";// use exec() because no results are returned
  $conn->exec($t);
  $x= "INSERT INTO users(firstname,lastname,email) VALUES ('ali','asas','asas@test.com');";
  $conn->exec($x);
  $a= "UPDATE users SET firstname= 'ahmad' WHERE id=2 ";
  $conn->exec($a);
  $y="DELETE FROM users WHERE id=28;";
  $conn->exec($y);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>