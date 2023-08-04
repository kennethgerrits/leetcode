<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->maxArea([1, 8, 6, 2, 5, 4, 8, 3, 7]));
    }

    /**
     * @param Integer[] $height
     */
    public function maxArea(array $height): int
    {
        $left = 0;
        $right = \count($height) - 1;
        $maxArea = 0;

        for ($i = 0; $i < \count($height); $i++) {
            $maxHeight = \min([$height[$left], $height[$right]]);
            $area = $maxHeight * ($right - $left);

            if ($area > $maxArea) {
                $maxArea = $area;
            }

            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $maxArea;
    }
}

new Solution();

/**
 *You are given an integer array height of length n. There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]).
 *
 * Find two lines that together with the x-axis form a container, such that the container contains the most water.
 *
 * Return the maximum amount of water a container can store.
 *
 * Notice that you may not slant the container.
 */
