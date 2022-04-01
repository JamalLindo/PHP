<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

$lastcity = array_pop($cities);

echo $lastcity;

echo "<br>";

echo "<pre>";

print_r($cities);

$firstcity = array_shift($cities);

echo $firstcity;

echo "<br>";

echo "<pre>";

print_r($cities);