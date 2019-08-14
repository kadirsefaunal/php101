<?php
// includes the Math.php file
// It's like you had all the code of Math.php written here
include_once 'Math.php';

echo Math\add(2,3); // 5
echo Math\PI; // 3.14
echo Math\Geometry::getCircleArea(10); // 314.15