<?php

printf('This post was made on %s %s, %d', 'June', '7th', '2012');

// Store prinf to a variable without print it out
$posted = sprintf('This post was made on %s %s, %d', 'June', '7th', '2012');

list($month, $day, $year) = sscanf('June 7th, 2012', '%s %[^,], %d');

list($name, $age) = array(
    'Marco',
    22
);
