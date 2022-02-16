<?php

function diagonalDifference($arr)
{
    $arraySize = sizeOf($arr) - 1;
    $firstDiagonal = 0;
    $secondDiagonal = 0;
    for ($i = 0; $i <= $arraySize; $i++) {
        for ($j = 0; $j <= $arraySize; $j++) {
            if ($i == $j) {
                $firstDiagonal += $arr[$i][$j];
                $secondDiagonal += $arr[$i][$arraySize - $j];
            }
        }
    }
    $result = $firstDiagonal - $secondDiagonal;
    if ($result < 0) {
        $result *= -1;
    }
    return $result;
}

$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [1, 8, 9]
];

var_dump(diagonalDifference($arr));
