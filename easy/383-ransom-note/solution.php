<?php

class Solution
{
    public function __construct()
    {
        $this->canConstruct("aa", "aab");
    }

    function canConstruct($ransomNote, $magazine)
    {
        $randsomNoteChars = str_split($ransomNote);
        $magazineChars = str_split($magazine);

        for ($i = count($randsomNoteChars) - 1; $i >= 0; $i--) {
            $index = array_search($randsomNoteChars[$i], $magazineChars);
            if ($index !== false) {
                unset($magazineChars[$index]);
                unset($randsomNoteChars[$i]);
            }
        }

        return count($randsomNoteChars) == 0;
    }
}

new Solution();

/**
 * Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.
 * Each letter in magazine can only be used once in ransomNote.
 */
