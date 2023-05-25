<?php

// No Array instead a list of numbers
// Iterative: set 1st and 2nd numbers as variables and then set in a loop

// While Loop: A condition is meet and the code will repeat for as long as that condition is meet

function Fibonacci($n){
  
    $n1 = 0;
    $n2 = 1;
  
    $count = 0;
    while ($count < $n){
        
        echo ' '.$n1;
        
        $count = $count + 1;
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        
        
    }
}
  
$n = 10;
Fibonacci($n);
?>