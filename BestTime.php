<?php

class Solution
{
    // brute force solution
    // time complexity n^2
    // space complexity n^2
    function maxProfit(array $prices): int
    {
        $maxProfit = 0;
        for ($i = 0; $i < count($prices); $i++) {
            for ($j = $i + 1; $j < count($prices); $j++) {
                $profit = $prices[$j] - $prices[$i];
                if ($profit > $maxProfit) {
                    $maxProfit = $profit;
                }
            }
        }
        return $maxProfit;
    }

    //time complexity n
    //space complexity n
    function maxProfit2($prices)
    {
        $maxDiff = 0;
        $min = $prices[0];
        $length = count($prices);

        for ($i = 0; $i < $length - 1; $i++) {

            if ($min > $prices[$i + 1]) {
                $min = $prices[$i + 1];
            }

            if (($prices[$i + 1] - $min) > $maxDiff) {
                $maxDiff = $prices[$i + 1] - $min;
            }
        }
        return $maxDiff;
    }
}

$solution = new Solution;

$result1 = $solution->maxProfit2([7, 1, 5, 3, 6, 4]); // 5
$result2 = $solution->maxProfit2([7, 6, 4, 3, 1]); // 0
$result3 = $solution->maxProfit2([2, 4, 1]); // 2

var_dump($result1, $result2, $result3);
