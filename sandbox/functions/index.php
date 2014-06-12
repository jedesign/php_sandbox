<?php

/**
 * A simple function that says
 * hello to a specific person
 * (if no param is given,
 * it will use the default)
 *
 * @param string $name
 *
 * @return string
 */
function say_hello($name = 'buddy') {
    return 'Hi, ' . $name;
}

// call the function with the parameter 'Marco'
// and store the return into a variable
$greeting = say_hello('Marco');

// ------

/**
 * A simple function to pretty print
 * a value wrapped in pre tags
 *
 * @param $value
 */
function prettyPrint($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

$arr = array(
    'name'       => 'Joe',
    'age'        => 40,
    'occupation' => 'teacher'
);

prettyPrint($arr);

// ------

/*function array_pluck($key, array $collection) {
    $arr = [];

    foreach($collection as $item) {
        $arr[] = $item[$key];
    }

    return $arr;
}*/

/**
 * A function that returns all values
 * in an array which key is preferred
 *
 * @param       $key
 * @param array $collection
 *
 * @return array
 */
function array_pluck($key, array $collection) {
    return array_map(function ($item) use ($key) {
        return $item[$key];
    }, $collection);
}

$people = [
    [
        'name'       => 'Marco',
        'age'        => 22,
        'occupation' => 'Frontend Engineer'
    ],
    [
        'name'       => 'Lars',
        'age'        => 40,
        'occupation' => 'Pastor'
    ],
    [
        'name'       => 'Jane',
        'age'        => 20,
        'occupation' => 'Marketing Manager'
    ]
];

$names = array_pluck('name', $people); // array('Marco','Lars','Jane')

echo '<ul>';
foreach ($names as $name) {
    echo '<li>' . $name . '</li>';
}
echo '</ul>';