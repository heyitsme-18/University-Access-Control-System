<?php
include 'db_connect.php';
$name = $_POST['full_name'];
$email = $_POST['email'];

$sql = "INSERT INTO UserAccount(full_name, email) VALUES ('$name', '$email')";
if ($conn->query($sql)) {
  echo "✅ User added successfully!";
} else {
  echo "❌ Error: " . $conn->error;
}
$conn->close();
?>
<a href='maintenance.html'>Back</a>