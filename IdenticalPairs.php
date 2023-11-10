<?php

class Solution
{

    /**
     * brute force method 
     * time complexity => o(n^2)
     * space complexity => o(1)
     */
    function numIdenticalPairs(array $nums)
    {
        $count = 0;
        $numsLength = count($nums);
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] == $nums[$j]) {
                    $count++;
                }
            }
        }
        return $count;
    }

    /**
     * hash map method
     * time complexity => o(n)
     * space complexity => o(1)
     */
    function numIdenticalPairs1(array $nums)
    {
        $count = 0;
        $hashMap = [];
        for ($i = 0; $i < count($nums); $i++) {
            if (array_key_exists($nums[$i], $hashMap)) {
                $count += $hashMap[$nums[$i]];
            }
            $hashMap[$nums[$i]]++;
        }
        return $count;
    }
}

$sol1 = new Solution;
$data = [
    [1, 2, 3, 4],
    [1, 1, 1, 1],
    [1, 2, 1]
];

foreach ($data as $value) {
    var_dump($sol1->numIdenticalPairs1($value));
}
