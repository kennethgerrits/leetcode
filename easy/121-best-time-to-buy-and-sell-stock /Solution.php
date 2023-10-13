<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->maxProfit([7, 1, 5, 3, 6, 4]));
    }

    /**
     * @param Integer[] $prices
     */
    function maxProfit($prices): int
    {
        $mostProfit = 0;
        $left = 0;
        $right = 1;

        while ($right < \count($prices)) {
            if ($prices[$left] < $prices[$right]) {
                $profit = $prices[$right] - $prices[$left];
                $mostProfit = max([$mostProfit, $profit]);
            } else {
                $left = $right;
            }
            $right++;
        }


        return $mostProfit;
    }
}

new Solution();

/**
 *
 */
