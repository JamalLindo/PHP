<?php

function uppercase($name1, $name2){
    $result =  strtoupper($name1);
    $result2 =  strtoupper($name2);
    return $result + $result2;

}


echo uppercase("Smith", "Jones");