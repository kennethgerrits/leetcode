<?php

class Solution
{
    public function __construct()
    {
        $this->numberOfSteps(123);
    }

    function numberOfSteps($num)
    {
        $steps = 0;
        while ($num != 0) {
            if ($this->isEven($num)) {
                $num /= 2;
            } else {
                $num -= 1;
            }
            $steps++;
        }
        print($steps);
    }

    function isEven($num)
    {
        return $num % 2 == 0;
    }
}

new Solution();

/**
 * Given an integer num, return the number of steps to reduce it to zero.
 */
