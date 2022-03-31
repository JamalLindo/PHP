<?php 

date_default_timezone_set('GMT');

// Thursday 31st March 2022
echo date('l jS F Y');
echo "<br>";

// Today is Thursday
echo "Today is " . date('l');
echo "<br>";

// Thursday 31 March, 2022
echo date('l j F, Y');
echo "<br>";

// 31/03/2022
echo date('d/m/Y');
echo "<br>";

// Thursday 31st March 2022, 8:39 AM
echo date('l jS F Y, g:i A');
echo "<br>";

// Determine leap year.
if(date('L')){
    echo "This year is a leap Year";
} else {
    echo "This year is not a leap Year";
}
