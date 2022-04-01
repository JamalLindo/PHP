<?php

//places string input into an array and seperates by , .
$temperatures = "32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6";
$eTemperatures = explode(", ",$temperatures);

sort($eTemperatures);

// loops through number of inputs to get total number of temperatures.
$amountOfInputs = 0;

foreach($eTemperatures as $temp){
    $amountOfInputs++;
    $Total += $temp;
}

// work out the average with the inputs
$average = round($Total / $amountOfInputs, 1);
echo "The Average :". $average ."°C";
echo "<br>";


//get the lowest 5 Temperatures.
$ArraylowestTemps = array_slice($eTemperatures,0,5);
$lowestTemps = implode(", ",$ArraylowestTemps);
echo "The Lowest 5 Temps :". $lowestTemps ;
echo "<br>";

//get the lowest 5 Temperatures.
$ArrayHighestTemps = array_slice($eTemperatures,-5,5);
$HighestTemps = implode(", ",$ArrayHighestTemps);
echo "The Highest 5 Temps :". $HighestTemps ;
echo "<br>";

