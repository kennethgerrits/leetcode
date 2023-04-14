<?php

final class Solution
{
    private const map = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    public function __construct()
    {
        var_dump($this->isValid('([])[[]]['));
    }

    /**
     * @param String $s
     *
     * @return Boolean
     */
    function isValid($s): bool
    {
        $chars = str_split($s);
        $openingChars = [];

        for ($i = 0; $i < \count($chars); $i++) {
            $curr = $chars[$i];

            if (array_key_exists($curr, self::map)) {
                $openingChars[] = $curr;
                continue;
            }

            if (empty($openingChars)) {
                return false;
            }
            $mostRecentOpeningChar = \array_pop($openingChars);
            $closingTagShouldBe = self::map[$mostRecentOpeningChar];

            if ($curr !== $closingTagShouldBe) {
                return false;
            }
        }

        if (empty($openingChars)) {
            return true;
        }

        return false;
    }
}

new Solution();

/**
 * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 */
