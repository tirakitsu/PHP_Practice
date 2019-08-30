<?php
/*
 * Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal
 *  to zero.
 *
 * Input : (-1,0,1,2,-1,-4)
 * Output : Array
 * (
 * [0] => -1 + 0 + 1 = 0
 * )
 */
function equals_Zero($list)
{
    $length = count($list) - 2;
    $ans=[];
    for ($x = 0; $x < $length; $x++)
    {
        if ($list[$x] + $list[$x+1] + $list[$x+2] == 0)
        {
            array_push($ans, "{$list[$x]} + {$list[$x+1]} + {$list[$x+2]} = 0");
        }
    }
    return $ans;
}
$arr1= array(-1,0,1,2,-1,-4);
$arr2 = array(1,0,3,4,-4,0,1,3,-4);

print_r(equals_Zero($arr1));
print_r(equals_Zero($arr2));

