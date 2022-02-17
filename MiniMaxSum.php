<?php

function miniMaxSum($arr)
{
    for ($j = 0; $j < 10; $j++) {
        for ($i = 0; $i < 4; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $dish = $arr[$i + 1];
                $arr[$i + 1] = $arr[$i];
                $arr[$i] = $dish;
            }
        }
    }
    $minSum = $arr[0] + $arr[1] + $arr[2] + $arr[3];
    $maxSum = $arr[1] + $arr[2] + $arr[3] + $arr[4];
    return "$minSum $maxSum";
}


var_dump(miniMaxSum([3, 5, 1, 7, 9]));
