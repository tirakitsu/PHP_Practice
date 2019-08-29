<?php
/*
 * Write a PHP program to check if an integer is the power of another integer. Go to the editor
 * Input : 16, 2
 * Output : 16 is power of 2
 * Example: For x = 16 and y = 2 the answer is "true", and for x = 12 and y = 2 "false"
 */
function isPowerofVar($s, $a){
    $x = $s;
    while ($x %$a == 0){
        $x/=$a;
    }

    if ($x == 1)
    {
        return "$s is power of $a\n";
    }
    else
    {
        return "$s is not power of $a\n";
    }
}
echo isPowerofVar(4, 2);
echo isPowerofVar(36, 6);
echo isPowerofVar(16, 12);
