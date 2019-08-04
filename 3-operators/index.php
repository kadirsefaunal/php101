<?php

// ??
$name = $_GET['name'] ?? 'nobody';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'nobody';
}

// ?:
$name = isset($_GET['name']) ? $_GET['name'] : 'nobody';

// <=> (Spaceship operator)
print (1 <=> 1); // 0
print (1 <=> 2); // -1
print (2 <=> 1); // 1

$a = 2;
// ++
$a++; // a = 3

// --
$a--; // a = 2

// && - ||

// =  +=  -=  *=  /=  %=

// ==  ===
$a = 4;
$b = '4';

if ($a == $b) {
    echo 'a and b are equal'; // this will be printed
}

if ($a === $b) {
    echo 'a and b are identical'; // this won't be printed
}

// <  >  <=  >=  !=