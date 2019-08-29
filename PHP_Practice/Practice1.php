<?php
/*
 * Write a PHP program to check if a given positive integer is a power of two.
 * Input : 4
 * Output :4 is power of 2
 */
function isPowerofTwo($s){
    if(($s & ($s - 1)) == 0)
    {
        return "$s is power of 2\n";
    }
    else
    {
        return "$s is not power of 2\n";
    }
}
echo isPowerofTwo(4);
echo isPowerofTwo(6);
