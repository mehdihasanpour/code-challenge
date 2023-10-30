<?php

class Solution
{
    /**
     * brute force solution
     * time complexity => o(n ^ 3)
     * space complexity => 
     */
    public function validTriangle(array $nums){
        $qty = 0;
        $len = count($nums);
        for($i=0; $i < $len -1; $i++ ){
            for($j=$i+1; $j < $len -1; $j++){
                for($k=$j+1; $k < $len; $k++){
                    if($nums[$i]+$nums[$j]>$nums[$k] and $nums[$i]+$nums[$k]>$nums[$j] and $nums[$k]+$nums[$j]>$nums[$i]){
                        $qty++;
                    }
                }
            }
        }
        return $qty;
    }

    /**
     * brute force solution
     * time complexity => o(n ^ 2)
     * space complexity => 
     */
    public function triangleNumber(array $nums){
        sort($nums);
        $qty = 0;
        $len = count($nums);
        for($a=$len-1; $a >= 1; $a--){
            $b = 0;
            $c = $a - 1;
            while ($b < $c) {
                if($nums[$b] + $nums[$c] > $nums[$a]){
                    $qty += $c-$b;
                    $c--;
                }else{
                    $b++;
                }
            }
        }
        return $qty;
    }
}

$solution = new Solution;

$result1 = $solution->validTriangle([2,2,3,4]); // 3
$result2 = $solution->triangleNumber([2,2,3,4]); // 3
$result3 = $solution->triangleNumber([4,2,3,4]); // 4
$result4 = $solution->triangleNumber([4,2,3,4]); // 4

var_dump($result1,$result2, $result3, $result4);