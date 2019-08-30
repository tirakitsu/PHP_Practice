<?php
/*
 * Write a PHP program to check if a given positive integer is a power of four.
 * Input : 4
 * Output : 4 is power of 4
 */
function isPowerofFour($s){
    $x = $s;
    while ($x %4 == 0){
        $x/=4;
    }

    if ($x == 1)
    {
        return "$s is power of 4\n";
    }
    else
    {
        return "$s is not power of 4\n";
    }
}
echo isPowerofFour(4);
echo isPowerofFour(6);
echo isPowerofFour(16);
