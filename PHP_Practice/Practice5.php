<?php
/*
 *  Write a PHP program to find a missing number(s) from an array.
 * Input : 1,2,3,6,7,8
 * Output : Array
 * (
 * [3] => 4
 * [4] => 5
 * )
 */
function missing_no($list)
{
    $compare = range($list[0],max($list));
    return array_diff($compare, $list);
}
print_r(missing_no(array(0,3,5,6,9,12)));
print_r(missing_no(array(3,4,5,6,8,9,12,24)));
