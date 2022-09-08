<?php

function extraLongFactorials(int $n)
{
    return ($n === 0) ? 1 : bcmul($n , extraLongFactorials($n - 1));
}

echo extraLongFactorials(24) . PHP_EOL;