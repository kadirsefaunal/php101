<?php

$myArray = array(1, 2, 3, 4, 5);

foreach($myArray as $num) {
    $num++;
}
var_dump($myArray);

foreach($myArray as &$num) {
    $num++;
}
var_dump($myArray);