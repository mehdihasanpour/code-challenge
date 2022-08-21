<?php

function timeConversion(string $s): string
{
    list($hour, $min, $secondAndPmAm) = explode(':', $s);
    $second = substr($secondAndPmAm, 0, 2);
    $isAm = substr($secondAndPmAm, 2) == 'AM';

    if (!$isAm) {
        if ($hour != 12) {
            $hour = $hour + 12;
        }
        return "$hour:$min:$second";
    }
    if ($isAm) {
        if ($hour == 12) {
            $hour = '00';
        }
        return "$hour:$min:$second";
    }
}

var_dump(timeConversion('07:05:45PM'));
var_dump(timeConversion('12:05:45PM'));
var_dump(timeConversion('12:05:45AM'));
var_dump(timeConversion('02:05:45PM'));
