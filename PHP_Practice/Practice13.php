<?php
/* Write a PHP program to reverse the digits of an integer.
 * Sample :
 * x = 234, return 432
 * x = -234, return -432
*/
function Reverse($number){
    $num_reverse = 0;
    while ($number > 0)
    {
        $num_reverse = $num_reverse * 10;
        $num_reverse = $num_reverse + $number % 10;
        $number = (int)($number/10);
    }
    return $num_reverse;
}

echo Reverse(1234),"\n";
echo Reverse(76478);