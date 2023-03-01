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
    //space complexity => o(n)
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

    //time complexity => o(n)
    //space complexity => o(n)
    function isPalindrome3($s)
    {
        $str = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
        $str = str_replace(' ', '', strtolower($str));

        $l=0;
        $r = strlen($str) -1;

        while ($l < $r) {
            if($str[$l] != $str[$r]){
                return false;
            }
            $l++;
            $r--;
        }
        return true;
    }
}

$solution = new Solution;

$result1 = $solution->isPalindrome2('carracc'); // false
$result2 = $solution->isPalindrome2('A man, a plan, a canal: Panama'); // true

var_dump($result1,$result2);
