<?php

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    $apples = array_filter($apples,function($apple) use ($a, $t, $s){
        $distance = $a + $apple;
        return ($distance <= $t && $distance >= $s);
    });
    $oranges = array_filter($oranges,function($orange) use ($b, $t, $s){
        $distance = $b + $orange;
        return ($distance <= $t && $distance >= $s);
    });

    echo count($apples) . PHP_EOL;
    echo count($oranges) . PHP_EOL;
}


countApplesAndOranges(2, 3, 1, 5, [2], [-2]);
countApplesAndOranges(7, 11, 5, 15, [-2,2,1], [5, -6]);
