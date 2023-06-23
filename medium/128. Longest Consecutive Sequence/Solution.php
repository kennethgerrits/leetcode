<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->longestConsecutive([100, 4, 200, 1, 3, 2]));
    }

    /**
     * @param Integer[] $nums
     *
     * @return Integer
     */
    function longestConsecutive(array $nums): int
    {
        $hashmap = []; // num : index
        for ($i = 0; $i < \count($nums); $i++) {
            $hashmap[$nums[$i]] = $i;
        }

        $highestSequence = 0;
        $currentSequence = 0;
        foreach ($nums as $num) {
            if (isset($hashmap[$num - 1])) {
                continue;
            }
            $currIteration = $num;
            while (isset($hashmap[$currIteration])) {
                $currentSequence++;
                $currIteration++;
            }
            if ($currentSequence > $highestSequence) {
                $highestSequence = $currentSequence;
            }
            $currentSequence = 0;
        }

        return $highestSequence;
    }
}

new Solution();

/**
 * Given an unsorted array of integers nums, return the length of the longest consecutive elements sequence.
 *
 * You must write an algorithm that runs in O(n) time.
 */
