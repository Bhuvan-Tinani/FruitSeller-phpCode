<?php
$server = "localhost";
$user = "root";
$passw = "root";
$database = "fruitselling";

// Create connection
$connection = new mysqli($server, $user, $passw);
mysqli_select_db($connection, $database); 

// Check connection
if ($connection->connect_error) {
  die("Connection not established: " . $connection->connect_error);
}
//echo "Connected successfully";
?>


