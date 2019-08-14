<?php
include_once 'src/Math/Constants.php';
include_once 'src/Math/Geometry/Circle.php';

//use Math\Geometry\Circle;

$circle = new Math\Geometry\Circle(10);

echo $circle->getDiameter(); 		// 20
echo $circle->getArea(); 			// 314.159
echo $circle->getCircumference();   // 62.8318