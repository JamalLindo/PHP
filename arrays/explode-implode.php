<?php

$string = "Ken, Ben, Len, Amy";

$explodednames = explode(", ",$string);

echo "<pre>";

print_r($explodednames);

$implodedNames = implode("|",$explodednames);

echo $implodedNames;