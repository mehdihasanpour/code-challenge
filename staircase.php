<?php

function staircase($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i >= $n-$j) {
                echo '#';
            } else {
                echo ' ';
            }
        }
        echo "\n";
    }
}

staircase(4);
