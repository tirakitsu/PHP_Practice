<?php
/* Write a PHP program to compute and return the square root of a given number.
 * Input : 16
 * Output : 4
 */
function sqr($num)
{
    $x = $num;
    $y = 1;
    while($x > $y)
    {
        $x = ($x + $y)/2;
        $y = $num/$x;
    }
    return $x;
}

echo sqr(36)."\n";
echo sqr(9)."\n";