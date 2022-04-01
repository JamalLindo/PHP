<?php

$names = ["Ben" , "Sam", "Amy","John"];

rsort($names);

echo "<ul>";

foreach($names as $name){
    echo "<li> $name </li>";
}


echo "</ul>";