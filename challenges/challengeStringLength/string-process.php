<?php

if(isset($_POST['submit'])){

    //Get form information , I.E string
    $string = $_POST['StringSentence'];
    $stringSpaceCount = substr_count($string, ' ');
    

    if(isset($_POST['IgnoreSpace'])){
        $stringLen =  strlen($string) - $stringSpaceCount;
    }else{
        $stringLen = strlen($string);
    }

    echo "The length of the string is " . $stringLen . " character's long";


}