<?php

declare(strict_types=1);

function BinarySearch(array $nums, int $target): int
{
    /**
     * time complexity => o(n)
     * space complexity => o(1)
     */
    $i = 0;
    while ($i < count($nums)) {
        if ($nums[$i] == $target) {
            return $i;
        }
        $i++;
    }
    return -1;
}

/**
 * time complexity => o(log n)
 * space complexity => o(1)
 */
function BinarySearch2(array $nums, int $target): int
{
    $left = 0;
    $right = count($nums) - 1;
    while ($left <= $right) {

        $mid = (int)floor(($left + $right) / 2);
        if ($nums[$mid] === $target) {
            return $mid;
        }
        if ($nums[$mid] > $target) {
            $right = $mid - 1;
        } else {
            $left = $mid + 1;
        }
    }

    return -1;
}

var_dump(BinarySearch2([2, 3, 4, 5, 6, 7, 8, 19, 20], 19));
var_dump(BinarySearch2([2, 3, 4, 5, 6, 7, 8, 19, 20], 5));
