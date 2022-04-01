<?php

$sentence = $_POST['sentence'];
$words = explode(" ",$sentence);



if(isset($_POST['submit'])){

    foreach($words as $word){
        if($word == "badword1" || $word == "badword2"){
           $word = "****";
        }
        echo $word . " ";
    }

}

