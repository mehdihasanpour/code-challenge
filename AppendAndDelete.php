<?php

declare(strict_types=1);

function appendAndDelete(string $s, string $t, int $k): string
{
    $stringCompare = strcmp($s, $t);

    if ($stringCompare == 0) {
        return 'yes';
    }

    echo $stringCompare;
    if ($stringCompare < 0) {
        $isSame = true;
        foreach (str_split($s) as $key => $value) {
            echo $value;
            echo $t[$key];
            if ($value != $t[$key]) {
                $stepsCount = (strlen($s) - $key) + (strlen($t) - $key);
                echo $stepsCount;
                if ($k >= $stepsCount) {
                    return 'yes';
                }
            }
        }
        if (strcmp($s, substr($t, 0, strlen($s))) != 0) {
            $isSame = false;
        }
        if ($isSame) {
            $stepsCount = strlen($t) - strlen($s);
            if ($k >= $stepsCount) {
                return 'yes';
            }
        }
    }
    return 'no';
}

// var_dump(appendAndDelete('hackerhappy', 'hackerrank', 9));
// var_dump(appendAndDelete('hacker', 'hackerrank', 4));
// var_dump(appendAndDelete('hacker', 'hacker', 4));
// var_dump(appendAndDelete('hacker', 'hackernnnww', 4));
var_dump(appendAndDelete('hacmi', 'hackerrank', 12));
