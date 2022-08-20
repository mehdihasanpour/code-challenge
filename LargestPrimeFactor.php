<?php

function isFactor(int $number, int $factor): bool
{
    return ($number % $factor == 0);
}

function isPrime(int $num): bool
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % ($i) == 0) {
            return false;
        }
    }
    return true;
}

var_dump(isPrime(10));
