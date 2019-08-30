<?php
/*
 * Write a PHP program to find the single element appears once in an array where every element appears twice except for
 *  one.
 * Input : array(5, 3, 0, 3, 0, 5, 7, 7, 9)
 * Output : 9
 */
function findSingle($ar, $len)
{
    $single = $ar[0];
    for ($i = 1; $i < $len; $i++)
        $single = $single ^ $ar[$i];

    return "The element occurring only once is $single";
}

$ar = array(5, 3, 0, 3, 0, 5, 7, 7, 9);
$n = count($ar);
echo findSingle($ar, $n);
