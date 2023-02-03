<?php

class Solution {

    //time complexity is o(n)
    function containsDuplicate(array $nums): bool
    {
        $hasTable = [];
        foreach($nums as $key => $num){
            $hasTable[$num] ++;
            if($hasTable[$num] > 1){
             return true;
            }
        }
        return false;
    }
    
    // o(n)
    public function containsDuplicate1(array $nums): bool
    {
        $unique = [];
        foreach($nums as $key => $num){
            $unique[$num] = $key;
        }
        return count($unique) != count($nums);
    }
    
    // o(n)
    public function containsDuplicate2(array $nums): bool
    {
        $array = [];
        foreach($nums as $key => $num){
            if(isset($array[$num])){
                return true;
            }
            $array[$num] = $key;
        }
        return false;
    }

    // o(n)
    public function containsDuplicate3(array $nums): bool
    {
        sort($nums);
        $size = sizeof($nums);
        for($i=0;$i<$size;$i++){
            if($nums[$i] == $nums[$i+1]){
                return true;
            }
        }
        return false;
    }

    public function containsDuplicate4(array $nums): bool
    {
        $hasTable = [];
        foreach($nums as $num){
            if(array_key_exists($num,$hasTable)){
                return true;
            }
            $hasTable[$num] = 1;
        }
        return false;
    }

    //time complexity is o(n^2)
    function containsDuplicateVersion2(array $nums): bool
    {
        foreach($nums as $key => $num){
            for($i = $key+1 ; $i<count($nums); $i++){
                if($num == $nums[$i]){
                    return true;
                }
            }
        }
        return false;
    }
}

$solution = new Solution;
// $result = $solution->containsDuplicate([1,2,3,4]);
// $result = $solution->containsDuplicate1([1,2,1,3,4]);
// $result = $solution->containsDuplicate2([1,2,3,4]);
// $result = $solution->containsDuplicate3([1,2,3,4,5]);
$result = $solution->containsDuplicate4([1,2,3,4,5,4]);
var_dump($result);