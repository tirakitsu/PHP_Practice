<?php
/*
 * Write a PHP program to find a single number in an array that doesn't occur twice.
 * Input : array(5, 3, 4, 3, 4)
 * Output : Array
 * (
 * [0] => 5
 * [1] => 3
 * [2] => 4
 * [3] => 3
 * [4] => 4
 * )
 * Single Number: 5
 */
function findSingle($ar, $len)
{
    $single = $ar[0];
    for ($i = 1; $i < $len; $i++)
        $single = $single ^ $ar[$i];

    return "The element occurring only once is $single";
}

$ar = array(2, 3, 5, 4, 5, 3, 4);
$n = count($ar);
echo findSingle($ar, $n);