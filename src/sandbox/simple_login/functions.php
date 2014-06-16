<?php

function isLogedIn() {
    return isset($_SESSION['username']);
}

function validateUserCreds($username, $password) {
    return ($username === USERNAME && sha1($password) === PASSWORD);
}