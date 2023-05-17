<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->productExceptSelf([1, 2, 3, 4]));
    }

    /**
     * @param Integer[] $nums
     *
     * @return Integer[]
     */
    function productExceptSelf(array $nums): array
    {
        $maxLength = count($nums);
        $ascendingProduct = [];
        $descendingProduct = [];

        $ascendingProduct[] = $nums[0];
        $descendingProduct[] = $nums[$maxLength - 1];

        for ($i = 1; $i < $maxLength; $i++) {
            $ascendingProduct[] = $nums[$i] * $ascendingProduct[$i - 1];
        }

        for ($i = $maxLength - 2; $i >= 0; $i--) {
            $descendingProduct[] = $nums[$i] * $descendingProduct[count($descendingProduct) - 1];
        }
        $descendingProduct = array_reverse($descendingProduct);

        $result = [];
        for ($i = 0; $i < $maxLength; $i++) {
            $result[] = ($ascendingProduct[$i - 1] ?? 1) * ($descendingProduct[$i + 1] ?? 1);
        }

        return $result;
    }
}

new Solution();

/**
 * Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].
 * You must write an algorithm that runs in O(n) time and without using the division operation.
 */
