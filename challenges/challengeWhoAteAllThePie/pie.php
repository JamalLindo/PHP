<?php 

// The area of a circle.

$circleRadius = 5;
$pi = 3.14;

$circleArea = pi() * pow($circleRadius, 2);
$fCircleArea = round($circleArea, 2, PHP_ROUND_HALF_UP) ;

echo "The area of a circle if the radius is $circleRadius  would be $fCircleArea.";

echo "<br>";