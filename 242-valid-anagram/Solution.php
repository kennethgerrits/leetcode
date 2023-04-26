<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->isAnagram('anagram', 'nagaram'));
    }

    /**
     * @param String $s
     * @param String $t
     *
     * @return Boolean
     */
    function isAnagram($s, $t): bool
    {
        $charsS = str_split($s);
        $charsT = str_split($t);
        sort($charsS);
        sort($charsT);

        return implode('', $charsS) === implode('', $charsT);
    }
}

new Solution();

/**
 * Given two strings s and t, return true if t is an anagram of s, and false otherwise.
 */
