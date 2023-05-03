<?php

final class Solution
{
    public function __construct()
    {
        $this->groupAnagrams(["eat", "tea", "tan", "ate", "nat", "bat"]);
    }

    /**
     * @param String[] $strs
     *
     * @return String[][]
     */
    function groupAnagrams(array $strs): array
    {
        $result = [];
        if (count($strs) === 0) {
            return $result;
        }
        $map = [];
        foreach ($strs as $s) {
            $hash = array_fill(0, 26, 0);
            for ($i = 0; $i < strlen($s); $i++) {
                $hash[ord($s[$i]) - ord('a')]++;
            }
            $key = implode(",", $hash);
            if (!array_key_exists($key, $map)) {
                $map[$key] = [];
            }
            $map[$key][] = $s;
        }

        foreach ($map as $group) {
            $result[] = $group;
        }

        return $result;
    }
}

new Solution();

/**
 * Given an array of strings strs, group the anagrams together. You can return the answer in any order.
 */
