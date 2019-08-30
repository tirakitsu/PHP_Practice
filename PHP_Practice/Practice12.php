<?php
/*
 * Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit.
 * For example given number is 59, the result will be 5.
 * Input : 48
 * Output : 3
 * Step 1: 5 + 9 = 14
 * Step 1: 1 + 4 = 5
 */
function singleFromMult($num){
    if ( $num > 0)
    {
        return ($num - 1) % 9 + 1;
    }
    else
    {
        return 0;
    }
}

echo singleFromMult(234), "\n";
echo singleFromMult(99998), "\n";
