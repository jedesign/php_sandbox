<?php

require 'config.php';
require 'functions.php';

session_start();

if (isLogedIn()) {
    header('Location: admin.php');
}

if (isset($_POST['submit'])) {

    $usr = $_POST['username'];
    $pwd = $_POST['password'];

    if (validateUserCreds($usr, $pwd)) {
        $_SESSION['username'] = $usr;
        header('Location: admin.php');
    } else {
        $status = 'Incorrect data, please try again.';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

<form action="index.php" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username"/>
    <br/>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password"/>
    <br/>
    <input type="submit" value="Login" name="submit"/>
</form>
<?php
if (isset($status)) {
    echo '<p>' . $status . '</p>';
}
?>
</body>
</html>