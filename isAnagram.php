<?php

class Solution {

    function isAnagram(string $s, string $t)
    {
        if(strlen($s) != strlen($t)){
            return false;
        }

        $charMapForS = [];
        for($i=0; $i<strlen($s); $i++){
            $charMapForS[$s[$i]] ++;
        }

        $charMapForT = [];
        for($i=0; $i<strlen($s); $i++){
            $charMapForT[$t[$i]] ++;
        }

        foreach($charMapForS as $key => $item){
            if($charMapForT[$key] != $item){
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution;

$result1 = $solution->isAnagram('car','tar');
$result2 = $solution->isAnagram('anagram','naaagrm');

var_dump($result1,$result2);
