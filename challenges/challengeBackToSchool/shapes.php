<?php


// The area of a Rectangle.
$rectangleLength = 10;

$rectangleWidth = 5;

$rectangleArea = $rectangleLength * $rectangleWidth;

echo "The area of a rectangle if the length is $rectangleLength and the width is $rectangleWidth would be $rectangleArea.";

echo "<br>";

// The area of a Triangle
$triangleBase = 12;

$triangleHeight = 3;

$triangleArea = ($triangleBase * $triangleHeight) / 2;

echo "The area of a triangle if the base is $triangleBase and the height is $triangleHeight would be $triangleArea.";

echo "<br>";

// The area of a circle.

$circleRadius = 5;

$pi = 3.14;

$circleArea = pi() * pow($circleRadius, 2);
$fCircleArea = number_format($circleArea, 2) ;

echo "The area of a circle if the radius is $circleRadius  would be $fCircleArea.";

echo "<br>";

// The are of a Trapezium
// side a = 10 , side b = 8 , height = 4

$sideA = 10;

$sideB = 8;

$trapeziumHeight = 4;

$trapeziumArea = 0.5 * ($sideA + $sideB) * $trapeziumHeight;

echo "The area of a Trapezium if side A is $sideA and side B is $sideB with the height being $trapeziumHeight would be $trapeziumArea.";

echo "<br>";
