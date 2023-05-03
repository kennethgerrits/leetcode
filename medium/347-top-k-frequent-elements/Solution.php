<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->topKFrequent([1, 1, 1, 2, 2, 3], 2));
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
        $maxHeap = new SplMaxHeap();

        foreach ($nums as $num) {
            if (array_key_exists($num, $hashmap)) {
                $hashmap[$num]++;
            } else {
                $hashmap[$num] = 1;
            }
        }

        foreach ($hashmap as $key => $value) {
            $maxHeap->insert([$value, $key]);
        }

        $result = [];
        while (!$maxHeap->isEmpty()) {
            if (count($result) === $k) {
                break;
            }
            $result[] = $maxHeap->extract()[1];
        }

        return $result;
    }
}

new Solution();

/**
 * Given an integer array nums and an integer k, return the k most frequent elements. You may return the answer in any order.
 * It is guaranteed that the answer is unique.
 */
