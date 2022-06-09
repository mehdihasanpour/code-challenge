<?php

class chef
{
    private array $firstAttitude = [2, 10, 3, 1, 5, 8];
    private array $secondAttitude = [5, 4, 3, 9, 7, 2];

    public function bestChef()
    {
        for ($i = 1; $i <= 6; $i++) {
            for($j = 1; $j <= 6; $j++){
                $first = $i;
                $second = $j + 1;
                $third = $j + 2;
                if ($first > 6 || $second > 6 || $third > 6) {
                    continue;
                }

                if ($first == $second || $second == $third || $third == $first) {
                    continue;
                }
                echo "[$first,$second,$third]\n";
            }
        }
    }
}

$chef = new chef();

$bestChef = $chef->bestChef();
