<?php

declare(strict_types=1);

class Solution
{
    /**
     * time complexity o(n)
     * space complexity o(n)
     */
    function isValid($s)
    {
        $array = [];
        $hashMap = [
            '('=>')',
            '[' => ']',
            '{' => '}'
        ];
        foreach (str_split($s) as $key => $char) {
            if (!in_array($char, ['(', '[', '{'])) {
                if ($key == 0) {
                    return false;
                }
                if ($hashMap[end($array)] == $char) {
                    array_pop($array);
                } else {
                    return false;
                }
            } else {
                array_push($array, $char);
            }
        }
        return count($array) == 0;
    }
}

$sol = new Solution;
$result = $sol->isValid('()');
$result2 = $sol->isValid(')[');
$result3 = $sol->isValid('([)]');

var_dump($result, $result2, $result3);
