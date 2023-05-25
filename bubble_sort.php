<?php

/*Bubble Sort in PHP is a type of simple sorting technique/algorithm which has repeated steps of comparing each pair of the adjacent items and also swapping them only if they are in the wrong order. This sort is also called as sinking sort.
*/

//First thought - two arrays, one as is, other ordered
//function - determine the greater of the first pair and then run through
//other pairs untile finished
//Rob - Loop is a good idea, but rather replace numbers in the array


//Two nested loop 
//1) organize the first pair - for loop
//2) repeat the process from the following pairs - if statement

//Biggest float to the right, back in the array, so 80 should be the furthest right

$numbers = array(80,3,7,9,15,18,2); //before sort variable

function bubbleSort($numbers) {
    $length = count($numbers);
    
    for ( $i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {
            $comparison++;
            
            if ( $numbers[$j] > $numbers[$j + 1]) {
                $tempNum = $numbers[$j +1];
                $numbers[$j +1] = $numbers[$j];
                $numbers[$j] = $tempNum;
            }
        }
    }
    return $numbers;
}

$sorted = bubbleSort( $numbers); //after sort variable

echo print_r($numbers);
echo print_r($sorted);

//Kinda like Fibonacci
// $tempNum = $numbers[$j +1]; //temp variable to hold i 
// $numbers[$j +1] = $numbers[$j]; //assign i to j
// $numbers[$j +1] = $numbers[$j]; //asign temp to j



?>