<?php


$time = time();

echo $time;

echo "<br>";

$string = "next month";

$date = strtotime($string);

echo $date;

echo "<br>";

$seconds = $date - $time;

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = round($hours / 24);

echo "It is $days days until $string";


