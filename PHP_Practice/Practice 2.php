<?php
/*
 * Write a PHP program to check if a given positive integer is a power of three.
 * Input : 9
 * Output : 9 is power of 3
 */
function isPowerofThree($s){
    $x = $s;
    while ($x %3 == 0){
        $x/=3;
    }

    if ($x == 1)
    {
        return "$s is power of 3\n";
    }
    else
    {
        return "$s is not power of 3\n";
    }
}
echo isPowerofThree(4);
echo isPowerofThree(9);