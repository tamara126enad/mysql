<?php
// include_once 'config.php';
header("Content-Type:application/json");

$servername='localhost';
$dbusername='root';
$password='';
$database='api';

// Create connection
$conn = mysqli_connect($servername,$dbusername, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


/*****************   End configuration code *******************/

    $query = "SELECT * FROM `employees`";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    $emplyeeData['emp_id'] = $row['emp_id'];
    $emplyeeData['emp_name'] = $row['emp_name'];
    $emplyeeData['emp_email'] = $row['emp_email'];
    $emplyeeData['emp_address'] = $row['emp_address'];
    $emplyeeData['emp_img'] = $row['emp_img'];
    $emplyeeData['emp_salary'] = $row['emp_salary'];
    $emplyeeData['emp_department'] = $row['emp_department'];


    $response["status"] = "true";
    $response["message"] = "emplyeeData";
    $response["employees"] = $emplyeeData;


echo json_encode($response); exit;


?>
