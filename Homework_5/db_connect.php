<?php
// Database connection file
$servername = "localhost";
$username = "kkonark";
$password = "p8vnJQoKySIwx2EL";
$database = "db_kkonark";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>