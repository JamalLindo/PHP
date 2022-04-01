<?php

$suites = ["Hearts","Diamonds","Clubs","Spades"];

$cards = ["Ace","2","3","4","5","6","7","8","9","Jack","Queen","King"];

$suitesPos = array_rand($suites);
$suite = $suites[$suitesPos];

$cardsPos = array_rand($cards);
$card = $cards[$cardsPos];

echo " The random card pic is the " . $card ." of ". $suite;