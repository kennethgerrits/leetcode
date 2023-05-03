<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->topKFrequent([1], 1));
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     *
     * @return Integer[]
     */
    function topKFrequent(array $nums, int $k): array
    {
        $hashmap = []; # num : amount

        foreach ($nums as $num) {
            if (array_key_exists($num, $hashmap)) {
                $hashmap[$num]++;
            } else {
                $hashmap[$num] = 1;
            }
        }

        arsort($hashmap, SORT_NUMERIC);

        return array_slice(array_keys($hashmap), 0, $k);
    }
}

new Solution();

/**
 * Given an integer array nums and an integer k, return the k most frequent elements. You may return the answer in any order.
 * It is guaranteed that the answer is unique.
 */
