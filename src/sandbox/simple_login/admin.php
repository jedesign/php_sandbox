<?php
require 'functions.php';

session_start();


if (!isLogedIn()) {
    header('Location: index.php');
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<h1>Hello, <?php echo $_SESSION['username']; ?></h1>

<p><a href="logout.php">Logout</a></p>
</body>
</html>