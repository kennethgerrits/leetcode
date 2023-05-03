<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->twoSum([2, 11, 15, 7], 9));
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     *
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $hashmap = []; // value : index

        foreach ($nums as $index => $num) {
            $deficit = $target - $num;

            if (isset($hashmap[$deficit])) {
                return [$index, $hashmap[$deficit]];
            }

            $hashmap[$num] = $index;
        }

        return [];
    }
}

new Solution();

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 *
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * You can return the answer in any order.
 */
