<?php

$string = "Ben | Sam | Amy | Jane";

$replacedString = str_replace("|", ", ", $string);

echo "Original String : " . $string . " Replaced String : " . $replacedString;