<?php

final class Solution
{
    public function __construct()
    {
        var_dump($this->isPalindrome('A man, a plan, a canal: Panama'));
    }

    /**
     * @param String $s
     *
     * @return Boolean
     */
    function isPalindrome($s): bool
    {
        $charArray = str_split($s);
        $forward = '';

        foreach ($charArray as $char) {
            if (!ctype_alnum($char)) {
                continue;
            }
            $forward .= $char;
        }
        $forward = strtolower($forward);
        $reversed = strrev($forward);

        return $forward === $reversed;
    }
}

new Solution();

/**
 * A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters,
 * it reads the same forward and backward. Alphanumeric characters include letters and numbers.
 * Given a string s, return true if it is a palindrome, or false otherwise.
 */
