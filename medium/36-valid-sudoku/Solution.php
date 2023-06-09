<?php

final class Solution
{
    private const MAX_WIDTH = 9;
    private const MAX_LENGTH = 9;

    public function __construct()
    {
        var_dump(
            $this->isValidSudoku([
                ["5", "3", ".", ".", "7", ".", ".", ".", "."]
                ,
                ["6", ".", ".", "1", "9", "5", ".", ".", "."]
                ,
                [".", "9", "8", ".", ".", ".", ".", "6", "."]
                ,
                ["8", ".", ".", ".", "6", ".", ".", ".", "3"]
                ,
                ["4", ".", ".", "8", ".", "3", ".", ".", "1"]
                ,
                ["7", ".", ".", ".", "2", ".", ".", ".", "6"]
                ,
                [".", "6", ".", ".", ".", ".", "2", "8", "."]
                ,
                [".", ".", ".", "4", "1", "9", ".", ".", "5"]
                ,
                [".", ".", ".", ".", "8", ".", ".", "7", "9"],
            ])
        );
    }

    /**
     * @param String[][] $board
     *
     * @return Boolean
     */
    function isValidSudoku(array $board): bool
    {
        // check X
        for ($i = 0; $i < self::MAX_WIDTH; $i++) {
            if ($this->hasDuplicateNumbers($board[$i])) {
                return false;
            }
        }

        // check Y
        for ($i = 0; $i < self::MAX_WIDTH; $i++) {
            $column = [];
            for ($j = 0; $j < self::MAX_LENGTH; $j++) {
                $column[] = $board[$j][$i];
            }

            if ($this->hasDuplicateNumbers($column)) {
                return false;
            }
        }

        // check 3x3
        for ($i = 0; $i < self::MAX_WIDTH; $i += 3) {
            for ($j = 0; $j < self::MAX_LENGTH; $j += 3) {
                $square = [];
                for ($k = $i; $k < $i + 3; $k++) {
                    for ($l = $j; $l < $j + 3; $l++) {
                        $square[] = $board[$k][$l];
                    }
                }

                if ($this->hasDuplicateNumbers($square)) {
                    return false;
                }
            }
        }

        return true;
    }

    private function hasDuplicateNumbers(array $sequence): bool
    {
        $sequence = array_filter($sequence, static fn($value) => $value !== '.');

        return count($sequence) !== count(array_unique($sequence));
    }
}

new Solution();

/**
 * Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following rules:
 *
 * Each row must contain the digits 1-9 without repetition.
 * Each column must contain the digits 1-9 without repetition.
 * Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
 */
