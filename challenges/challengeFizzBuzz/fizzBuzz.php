<?php

$i = 1;

while($i<=100){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "Fizz Buzz";
    }else if($i % 5 == 0){
        echo "Buzz";
    }else if($i % 3 ==0){
        echo "Fizz";
    }else{
        echo $i;
    }
    echo "<br>";
    $i++;
}