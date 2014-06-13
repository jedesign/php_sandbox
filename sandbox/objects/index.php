<?php
class Person {
    public $name;
    public $job;

    public function __construct($name, $job) {
        $this->name = $name;
        $this->job = $job;
    }

    public function communicate($style = 'voice') {
        return $this->name .' is communicating with ' . $style .'.';
    }
}

$john = new person('John','Teacher');
echo $john->communicate('telepathy');

$person = new stdClass;
$person->first = 'John';
$person->last = 'Doe';
$person->job = 'Teacher';

$array = [
    'name' => 'John',
    'job' => 'Teacher'
];

echo $array['name'];

$object = (object) $array;

echo $object->name;