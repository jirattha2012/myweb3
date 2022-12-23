<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>