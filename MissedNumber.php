<?php

/**
 * problem:
 * we have an array that has numbers that their values is less than
 * array length value, with this condition we miss one number 
 * we should find that missing number 
 */

class Solution
{
    //time complexity => o(n)
    //space complexity => o(1)
    function missedNumber(array $nums): int
    {
        $len = count($nums) + 1;
        $hashMap = [];

        for ($i = 0; $i < $len; $i++) {
            $hashMap[$i] = false;
        }

        foreach ($nums as $num) {
            $hashMap[$num] = true;
        }

        foreach ($hashMap as $key => $value) {
            if ($value == false) {
                return $key;
            }
        }
    }
}

$solution = new Solution;
$result = $solution->missedNumber([1, 2, 3, 0]); // expected result for this is 4

echo ($result);
