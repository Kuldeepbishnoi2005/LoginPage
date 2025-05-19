<?php
$conn = new mysqli('localhost', 'root', '@Bishnoi29', 'users');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
