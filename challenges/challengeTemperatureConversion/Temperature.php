<?php

if(isset($_POST['submit'])){

    //Get Form information.
    $TempVal = $_POST['TemperatureVal'];
    $TempType = $_POST['TemperatureType'];
    

    if(isset($_POST['DecimalPlaces'])){
        $decimalPlace = $_POST['DecimalPlaces'];
        if(is_numeric($decimalPlace)){
            echo "By ". $decimalPlace." decimal places" . "<br>";
        } else {
            $decimalPlace = 2;
            echo "you did not enter a numeric value , it will default to :" .$decimalPlace . " Decimal places" . "<br>";
        }
    }

    if($TempType == "celsius"){
        $result = round(5/9 * ($TempVal - 32), $decimalPlace);
        echo "Celsius : " . $result . "<br>";
    } elseif ($TempType == "fahrenheit"){
        $result = round((9/5 * $TempVal) + 32, $decimalPlace);
        echo "Fahrenheit : " . $result . "<br>";
    } else {
        echo "Please go back and enter a Temperature". "<br>";
    }
    
} else {
    echo "Please go to the TemperatureForm and input a value";
}
