<?php

$randomNumber1 = rand(10,20);

echo $randomNumber1 . "<br>";

    if($randomNumber1 % 2 == 0){
        echo "The random number is even <br>";
    } else {
        echo "The random number is odd <br>";
    }


$i = 0;
$evens = 0;
$odds = 0;

while($i <= 100){
    $randomNumber = rand(10,20);

    if($randomNumber % 2 == 0){
        $evens++;
    } else {
        $odds++;
    }
    $i++;
}

echo "Evens : " . $evens . "  " . "Odds : " . $odds ;