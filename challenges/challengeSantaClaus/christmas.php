<?php
// Set Current TimeZone
date_default_timezone_set('GMT');

// Get overal time
$time = time();

// Get current year
$year = date('Y');

// Get Christmas date and Current Date
$christmas = strtotime('25th December '. $Year);
$today = strtotime(date('l jS F Y'));

// Seconds until Christmas
$secTillChristmas = $christmas - $today;

//Covert Seconds To days.
$minutes = $secTillChristmas / 60;
$hours = $minutes / 60;
$days = round($hours / 24);

echo "Days until christmas :" . $days;


