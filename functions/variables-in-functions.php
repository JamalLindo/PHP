<?php


function addTwoNumbers(){
    global $c;
    $a = 5;
    $b = 10;
    $sum = $a + $b + $c;
    echo $sum;
}
$c = 20;
addTwoNumbers();
echo $a;
