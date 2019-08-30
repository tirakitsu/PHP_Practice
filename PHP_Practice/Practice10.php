<?php
/*
 * Write a PHP program to find the single element in an array where every element appears three times except for one.Go to the editor
 * Input : array(5, 3, 4, 3, 5, 5, 3)
 * Output : Array
 * (
 * [0] => 5
 * [1] => 3
 * [2] => 4
 * [3] => 3
 * [4] => 5
 * [5] => 5
 * [6] => 3
 * )
 * Single Number: 4
 */

function oneInThree($ar)
{
    $singles = 0;
    $triples = 0;
    $same_nums = 0;
    for($i=0; $i<sizeof($ar); $i++)
    {
        $triples  = $triples | ($singles & $ar[$i]);

        $singles  = $singles ^ $ar[$i];
        $same_nums = ~($singles & $triples);
        $singles &= $same_nums;
        $triples &= $same_nums;
    }
    return "The single number is $singles";
}

$arr = array(5, 3, 4, 3, 5, 5, 3);
echo oneInThree($arr);
