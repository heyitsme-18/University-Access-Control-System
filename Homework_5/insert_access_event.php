<?php
include 'db_connect.php';
$user = $_POST['user_id'];
$res = $_POST['resource_id'];
$outcome = $_POST['outcome'];

$sql = "INSERT INTO Access_Event(user_id, resource_id, outcome) VALUES ('$user', '$res', '$outcome')";
if ($conn->query($sql)) echo "✅ Access Event added!";
else echo "❌ Error: " . $conn->error;
$conn->close();
?>
<a href='maintenance.html'>Back</a>