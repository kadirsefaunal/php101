<?php

$a = 5;
$b = &$a;
var_dump($a);
var_dump($b);

$a = 7;
var_dump($a);
var_dump($b);

$myArray = array(1, 2, 3, 4, 5);

foreach($myArray as $num) {
    $num++;
}
var_dump($myArray);

foreach($myArray as &$num) {
    $num++;
}
var_dump($myArray);