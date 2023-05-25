<?php

//echo 'Hello palindrome';

function palindromeCheck($word) { 
    $wordReverse = strrev($word); //reverse string function
    if ($wordReverse == $word){   //compare word and reverse word, == if vaules of equal    
             echo 'palindrome';
    }
    else {
        echo 'nope';
    }
}

 palindromeCheck('Baker'); //check if the variables are equal

//kayak
//Baker

?>