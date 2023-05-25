<?php

//Loop through each row adding a new column with an X
//stopping once the max conditional is set

function triangle($number)
{
    for ($i= 0; $i < $number; $i++)//handle rows Going Up
    {
        for ($j = 0; $j <= $i; $j++) //handle columns
        {
            print 'X';
        }
        print '<br>';
    }
    for ($i= 5; $i >= 1; $i--) // Going Down
    {
        for ($j = 1; $j < $i; ++$j)
        {
            print 'X';
        }
        print '<br>';
    }
}


$number = 5; //max conditional for loop

triangle($number);


//for($x = 0; $x <= 10; $x++)
//{
//    print  'x';
//}


//Print One side of triangle - going up

//function triangle($number)
//{
//    for ($i= 0; $i < $number; $i++)
//    {
//        for ($j = 0; $j <= $i; $j++)
//        {
//            print 'X';
//        }
//        print '<br>';
//    }
//}
//

//Numbers going down

//    for ($i= 5; $i >= 1; $i--)
//    {
//        for ($j = 1; $j < $i; ++$j)
//        {
//            print 'X';
//        }
//        print '<br>';
//    }

?>