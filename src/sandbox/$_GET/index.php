<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super Globals</title>
</head>
<body>
<h1>Super Globals</h1>

<?php

// http://phpcourse.local/sandbox/$_GET/?job=<h1>Mediatechniker</h1>

// If job isset inside $_GET we echo it, otherwise we echo an error
// to prevent data injection we run the output through htmlspecialchars
echo isset($_GET['job']) ? htmlspecialchars($_GET['job']) : 'Job is not defined.';
?>

</body>
</html>