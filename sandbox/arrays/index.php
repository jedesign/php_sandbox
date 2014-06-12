<?php

// A simple array
$tuts_sites = array(
    'nettuts+',
    'psdtuts+',
    'webdesigntuts+',
    'wptuts+',
    'mobiletuts+'
);

// Another simple array with
// the modern bracket syntax
$months = [
    'january',
    'february',
    'march',
    'april',
    'may'
];

// A simple associative array
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


// A simple multidimensional associative array
$persons = array(
    'Person1' => array(
        'Name'  => 'Marco',
        'Alter' => 22
    ),
    'Person2' => array(
        'Name'  => 'Lars',
        'Alter' => 26
    )
);

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

    // echo something for each month in the array
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

<ul>
    <?php

    // Access a multidimensional array with foreach
    // ----
    // Access the first level
    foreach ($persons as $person => $personData) {
        echo '<li>' . $person . '<ul>';

        // Access the second level
        foreach ($personData as $attributeName => $attributeValue) {
            echo '<li>' . $attributeName . ': ' . $attributeValue . '</li>';
        }
        echo '</ul></li>';
    }
    ?>
</ul>
</body>
</html>