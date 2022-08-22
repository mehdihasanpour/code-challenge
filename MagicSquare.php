<?php

function formingMagicSquare(array $s)
{
    $sumArray = [];
    $gotreOne = 0;
    $gotreTwo = 0;
    $sum = [];
    for ($i = 0; $i < 3; $i++) {
        $rowSum = 0;
        $columnSum = 0;
        for ($j = 0; $j < 3; $j++) {
            $rowSum = $rowSum + $s[$i][$j];
            $columnSum = $columnSum + $s[$j][$i];
            if ($i == $j) {
                $gotreOne = $gotreOne + $s[$i][$j];
                $gotreTwo = $gotreTwo + $s[$i][2 - $i];
            }
        }
        $sum[] = $rowSum;
        $sum[] = $columnSum;
        $sumArray['row'][$i] = $rowSum;
        $sumArray['column'][$i] = $columnSum;
    }
    $sumArray['gotreOne'] = $gotreOne;
    $sumArray['gotreTwo'] = $gotreTwo;
    $sum[] = $gotreOne;
    $sum[] = $gotreOne;

    var_dump($sumArray);
}

var_dump(formingMagicSquare([[5, 3, 4], [1, 5, 8], [6, 4, 2]]));

//TODO: this hackerrank problem not completed yet i should work on it
