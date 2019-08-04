<?php

$arr1 = array();
$arr2 = [];

$fruit = array('apple', 'orange');
$fruit = ['apple', 'orange'];

echo $fruit[0]; // apple
echo $fruit[5]; // undefined offset

$fruit[] = 'ccarrot';
var_dump($fruit);

$meyveler = [
    'apple' => 'elma',
    'orange' => 'portakal',
    'carrot' => 'havuç',
];