<?php

class Solution
{
    //time complexity => o(n)
    //space complexity => o(n)
    function isPalindrome($s)
    {
        $str = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
        $str = str_replace(' ', '', strtolower($str));
        $newStr = '';
        $stopPoint = strlen($str);
        for ($i = 0; $i < $stopPoint; $i++) {
            $newStr[$stopPoint - $i - 1] = $str[$i];
        }
        return $str === $newStr;
    }

    //time complexity => o(n)
    //space complexity => o(1) ??
    function isPalindrome2($s)
    {
        $str = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
        $str = str_replace(' ', '', strtolower($str));
        $stopPoint = strlen($str);
        for ($i = 0; $i < $stopPoint; $i++) {
            if($str[$stopPoint - $i - 1] != $str[$i]){
                return false;
            };
        }
        return true;
    }
}

$solution = new Solution;

$result1 = $solution->isPalindrome2('carracc');
$result2 = $solution->isPalindrome2('A man, a plan, a canal: Panama');

var_dump($result1,$result2);
