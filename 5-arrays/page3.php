<?php

$arr = [
    [
        'id' => 1,
        'age' => 20,
        'name' => 'name1',
    ],
    [
        'id' => 2,
        'age' => 32,
        'name' => 'name2',
    ],
    [
        'id' => 3,
        'age' => 35,
        'name' => 'name3',
    ],
];

// Mapping array
function map($user){
    return [
        'id' => $user['id'],
        'name' => $user['name'],
    ];
}

$mappedArr = array_map('map', $arr);

var_dump($mappedArr);

// Filtering array
$age = 25;

$filteredArr = array_filter($arr, function ($user) use ($age) {
    if ($age < $user['age']) {
        return $user;
    }
});

var_dump($filteredArr);