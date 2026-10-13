<?php


function isPalindrome(string $str): bool {
    $left = 0;
    $right = strlen($str) - 1;

    while($left < $right) {
        if($str[$left] !== $str[$right]) {
            return false;
        }
        $left++;
        $right--;
    }

    return true;
}

var_dump(isPalindrome('racecar'));