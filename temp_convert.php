<?php

//Celsius to Fahrenheit

function fahrenheit ($cel) {
    return $cel * 9 / 5 + 32;
}

$temp = fahrenheit(10);

echo $temp; 


//Fahrenheit to Celsius 

function celsius ($fahren) {
    return ($fahren - 32) * 5 / 9;
}

$temp = celsius(70);

echo $temp; 

?>