<?php

session_start();

if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
}else {
    echo "session has not been set";
}

echo "<br>";

if(isset($_SESSION['age'])){
    echo $_SESSION['age'];
}else {
    echo "session has not been set";
}
