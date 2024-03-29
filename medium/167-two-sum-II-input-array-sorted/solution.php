<?php

class Solution
{
    public function __construct()
    {
        var_dump($this->twoSum([2,7,11,15], 9));
    }

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $left = 0;
        $right = count($numbers) - 1;

        while($left < $right) {
            $sum = $numbers[$left] + $numbers[$right];

            if($sum > $target) {
                $right--;
            } elseif($sum < $target) {
                $left++;
            } else {
                return [$left + 1, $right + 1];
            }
        }
        return [];
    }
}

new Solution();

/**
 * Given a 1-indexed array of integers numbers that is already sorted in non-decreasing order, find two numbers such that they add up to a specific target number. Let these two numbers be numbers[index1] and numbers[index2] where 1 <= index1 < index2 <= numbers.length.
 * Return the indices of the two numbers, index1 and index2, added by one as an integer array [index1, index2] of length 2.
 * The tests are generated such that there is exactly one solution. You may not use the same element twice.
 * Your solution must use only constant extra space.
 */
