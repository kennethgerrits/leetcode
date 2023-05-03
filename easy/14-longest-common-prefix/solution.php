<?php

final class Solution
{
    private const strs = ["dog","racecar","car"];

    public function __construct()
    {
        var_dump($this->longestCommonPrefix(self::strs));
    }

    /**
     * @param String[] $strs
     *
     * @return String
     */
    function longestCommonPrefix(array $strs): string
    {
        $result = '';
        if (count($strs) === 1) {
            return $strs[0];
        }
        sort($strs);
        $str1 = $strs[0];
        $str2 = $strs[count($strs) - 1];
        for ($i = 0; $i < strlen($str1); $i++) {
            if ($str2[$i] !== $str1[$i]) {
                return $result;
            }
            $result .= $str2[$i];
        }

        return $result;
    }
}

new Solution();

/**
 * Write a function to find the longest common prefix string amongst an array of strings.
 * If there is no common prefix, return an empty string "".
 */
