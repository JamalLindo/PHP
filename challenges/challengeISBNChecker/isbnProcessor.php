<?php

if(isset($_POST['submit'])){
    $isbnNumber = str_split($_POST["ISBN"]);
    $isbnTotal = 0;
    $Iteration = 1;


    foreach($isbnNumber as $CisbnNum){
        $isbnTotal += $CisbnNum * $Iteration;
        $Iteration ++;
    }

    if($isbnTotal % 11 == 0){
        echo "You have a valid ISBN Number";
    } else {
        echo "you have a invalid ISBN Number";
    }

}