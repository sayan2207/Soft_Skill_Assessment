<?php
$hostname     = "localhost"; // Enter Your Host Name
$username     = "root";      // Enter Your Table username
$password     = "";          // Enter Your Table Password
$databasename = "admin_panel"; // Enter Your database Name


$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$databasename = "student_panel";
$conn1 = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}


?>

