<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="tttttttttttt";

echo "<form method='post'>
<lable>name</lable>
<input type='text' name='fname'>
<lable>last name</lable>
<input type='text' name='lname'>
<lable>email</lable>
<input type='text' name='mail'>
<input type='submit' value='submit'>
</form>";

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$m=$_POST['mail'];
try{
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  $t = "CREATE DATABASE $db";
  $conn->exec($t);
  $conn->exec("SET character_set_connection = 'utf8'");
  $conn->exec("SET NAMES 'UTF8'");
  $x= "INSERT INTO users(firstname,lastname,email) VALUES ('$fn','$ln', '$m');";
  $conn->exec($x);
  $a= "UPDATE users SET firstname= 'ahmad' WHERE id=6 ";
  $conn->exec($a);
  $y="DELETE FROM users WHERE id=12;";
  $conn->exec($y);

  // $u= "SELECT firstname FROM users WHERE id=3 ;";
  // echo $conn->exec($u);
  # $q = "SELECT * FROM users INNER JOIN users_phone ON phone_info.id=user_info.id;";
  # print_r($conn->query($q));

  echo "<br> Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>