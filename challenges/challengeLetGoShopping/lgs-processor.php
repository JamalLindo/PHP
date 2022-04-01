<?php
//Get Card Number
$creditCardNumber = $_POST['CCNumber'];

//Reverse Card Number
$revCCNumber = strrev($creditCardNumber);

//Get last 4 digits
$ArrayCreditCard = str_split($creditCardNumber);
$Arraylast4Digits = array_slice($ArrayCreditCard,count($ArrayCreditCard)-4, 4);
$last4Digits = implode("",$Arraylast4Digits);
$isValid = 0;

echo $creditCardNumber . "<br>";
echo $revCCNumber . "<br>";



if($_POST['submit']){








    

    if($isValid){
        echo "Your credit card number ending in " . $last4Digits . " is Valid";
    }else{
        echo "Your credit card number ending in " . $last4Digits . " is Invalid";
    }
    
}

    
   
   