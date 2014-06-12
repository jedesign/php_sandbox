<?php

// Falsy values in PHP
// FALSE, 0 (int), 0.0 (float), '', '0', [], NULL

$test = 1;

if (!$test) {
    echo 'TRUE <br>';
} else {
    echo 'FALSE <br>';
}

// ---------

$month = 'January';

if ($month === 'January') {
    echo 'It is January. <br>';
} elseif ($month === 'February') {
    echo 'It is February. <br>';
} else {
    echo 'None of the checked months. <br>';
}

// ---------

switch ($month) {
    case 'January':
        echo 'It is January. <br>';
        break;
    case 'February':
        echo 'It is February. <br>';
        break;
    default:
        echo 'None of the checked months. <br>';
}

// ---------

// Lookup
$months = [
    'January'  => 'It is January. <br>',
    'February' => 'It is February. <br>'
];

if (isset($months[$month])) {
    echo $months[$month];
} else {
    echo 'None of the checked months. <br>';
}

echo isset($months[$month]) ? $months[$month] : 'None of the checked months. <br>';

// ---------

$month = 'June';

if ($month !== 'May' && $month !== 'June') {
    echo 'Not May or June <br>';
} else {
    echo 'It is May or June <br>';
}

if ($month == 'May' || $month == 'June') {
    echo 'It is May or June <br>';
} else {
    echo 'Not May or June <br>';
}