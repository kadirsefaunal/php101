<?php

// https://www.php.net/manual/en/ref.array.php

$map = [
    'foo' => 1,
    'bar' => null,
    'foobar' => '',
];

array_key_exists('foo', $map);  // true
isset($map['foo']);             // true
!empty($map['foo']);            // true

array_key_exists('bar', $map);  // true
isset($map['bar']);             // false
!empty($map['bar']);            // false

// Validating array type

$integer = 1337;
$array = [1337, 42];

is_array($integer); // false
is_array($array);   // true

// Delete an element in array
var_dump($map);
unset($map['bar']);
var_dump($map);

// Get first element of array
var_dump(current($map));

