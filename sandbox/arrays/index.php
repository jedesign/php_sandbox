<?php
$tuts_sites = array(
    'nettuts+',
    'psdtuts+',
    'webdesigntuts+',
    'wptuts+',
    'mobiletuts+'
);

$months = [
    'january',
    'february',
    'march',
    'april',
    'may'
];

$tuts_sites = [
    'nettuts' => 'http://net.tutsplus.com',
    'psdtuts' => 'http://psd.tutsplus.com',
    'wptuts'  => 'http://wp.tutsplus.com',
];

// Add an element at the end of the array
array_push($months, 'june');
$tuts_sites['mobiletuts'] = 'http://mobile.tutsplus.com';

// Remove the last element in the array
array_pop($months);
array_pop($tuts_sites);

// Remove the first element in the array
array_shift($months);
array_shift($tuts_sites);

// Add an element at the beginning of the array
array_unshift($months, 'january');
$tuts_sites = ['nettuts' => 'http://net.tutsplus.com'] + $tuts_sites;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<h1>Arrays</h1>
<ul>
    <?php

    foreach ($months as $month) {
        echo '<li>' . $month . '</li>';
    }
    ?>
</ul>
<ul>
    <?php
    // Without shortsyntax
    foreach ($tuts_sites as $name => $url) {
        echo '<li><a href="' . $url . '" target="_blank">' . ucwords($name) . '+</a></li>';
    }

    // With shortsyntax
    foreach ($tuts_sites as $name => $url) : ?>
        <li>
            <a href="<?= $url; ?>"><?= ucwords($name) ?>+</a>
        </li>
    <?php endforeach ?>
</ul>
</body>
</html>