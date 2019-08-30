<?php
/*
 *  Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal
 *  to a given number.
 *
 * Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
 * Output : Array
 * (
 * [0] => 2 + 7 + 7 = 16
 * [1] => 7 + 1 + 8 = 16
 * )
 */

function equals_var($list, $goal)
{
    $length = count($list) - 2;
    $ans=[];
    for ($x = 0; $x < $length; $x++)
    {
        if ($list[$x] + $list[$x+1] + $list[$x+2] == $goal)
        {
            array_push($ans, "{$list[$x]} + {$list[$x+1]} + {$list[$x+2]} = $goal");
        }
    }
    return $ans;
}
$arr1= array(-1,0,1,2,-1,-4);
$arr2 = array(1,0,3,4,-4,0,1,3,-4);

print_r(equals_var($arr1,0));
print_r(equals_var($arr2, 4));
