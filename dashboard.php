<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
    <p>You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
