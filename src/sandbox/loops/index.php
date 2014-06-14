<?php

$arr = array(
    'ceo'        => 'Collis',
    'manager'    => 'Tash',
    'instructor' => 'Jeff',
    'coworker'   => 'Ammanda'
);

foreach ($arr as $title => $name) {
    echo $name . ' is the ' . ucwords($title) . ' of Tuts+ <br>';
}

echo '<hr>';

for ($i = 0; $i < 10; $i++) {
    echo $i . ', ';
}

echo '<hr>';

for ($i = 0; $i < count($arr); $i++) {
    echo $i . ', ';
}

echo '<hr>';

$arr = array(
    'Jeff',
    'Collis',
    'Tash',
    'Ammanda'
);

foreach ($arr as $name) {
    echo $name . '<br>';
}

echo '<hr>';

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br>';
}

echo '<hr>';

$i = 0;

while($i < count($arr)) {
    echo $arr[$i] . '<br>';
    $i++;
}