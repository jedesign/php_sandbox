<?php

// Starts a new session or
// initializes the existing session
session_start();

// Store a username in the session array
$_SESSION['username'] = 'mrieser';

echo 'The username is: ' . $_SESSION['username'];

// destroys the running session
session_destroy();

// The data is still available in
// the super global until the page reloads
print_r($_SESSION);

// To clear the data in the session we can assign
// an empty array to the session storage
$_SESSION = array();