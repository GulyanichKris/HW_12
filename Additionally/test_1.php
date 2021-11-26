<?php


function Change ($str){
$newSTR = strrev($str);
    return $newSTR;
}

$Count = Change("Hello");

echo $Count . "\n";
