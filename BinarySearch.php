<?php

declare(strict_types=1);

function BinarySearch(int $item, array $array)
{
        $start = 0;
        $end = array_key_last($array);
        $i = 0;
    while ($i<=2) {
        // var_dump("$start,$end");
        $i++;
        $count = $end-$start;
        $mid = (int) ceil($count / 2);

        if ($array[$mid] == $item) {
            return $mid;
        }

        if ($array[$mid] > $item) {
            $start = 0;
            $end = $mid;
            var_dump("$start, $end, $mid");
        } else {
            $start = $mid + 1;
            $end = array_key_last($array);
            var_dump("$start, $end, $mid");
            // exit;
        }

    }
}

var_dump(BinarySearch(19, [0, 1, 2, 3, 4, 7, 8, 19, 20]));
