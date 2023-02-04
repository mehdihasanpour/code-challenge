<?php

class Solution
{
    //time complexity => o(n^2)
    //space complexity => o(1)
    function twoSum(array $nums, int $target): array
    {
        foreach ($nums as $key => $num) {
            for ($i = $key + 1; $i < count($nums); $i++) {
                if ($num + $nums[$i] == $target) {
                    return [$i, $key];
                }
            }
        }
    }

    //time complexity => o(n)
    //space complexity => o(n)
    public function twoSum2(array $nums, int $target)
    {
        $hashMap = [];
        for ($i = 0; $i < count($nums); $i++) {

            if (isset($hashMap[$target - $nums[$i]])) {
                return [$i, $hashMap[$target - $nums[$i]]];
            }

            $hashMap[$nums[$i]] = $i;
        }
    }
}

$solution = new Solution;

$result = $solution->twoSum2([2, 7, 11, 15], 18);
// $result = $solution->twoSum2([3,3],6);

var_dump($result);
