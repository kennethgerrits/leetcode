<?php

class Solution
{
    private $values = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    public function __construct()
    {
        $this->romanToInt("MCMXCIV");
    }

    private function romanToInt($roman)
    {
        $answer = 0;
        $romanChars = str_split($roman);

        for ($i = 0; $i < count($romanChars); $i++) {
            $currSymbol = $romanChars[$i];
            $nextSymbol = $romanChars[$i + 1] ?? "Z";
            $numeral = 0;

            if ($nextSymbol != "Z") {
                $indexCurrSymbol = array_search($currSymbol, array_keys($this->values));
                $indexNextSymbol = array_search($nextSymbol, array_keys($this->values));
                $indexDowngrade = -1;

                if ($indexNextSymbol == $indexCurrSymbol + 1) {
                    $indexDowngrade = $indexCurrSymbol + 1;
                } else if ($indexNextSymbol == $indexCurrSymbol + 2) {
                    $indexDowngrade = $indexCurrSymbol + 2;
                }

                if ($indexDowngrade != -1) {
                    $currNumber = $this->values[$currSymbol];
                    $nextNumber = array_values($this->values)[$indexDowngrade];
                    $numeral = $nextNumber - $currNumber;
                    $i++;
                }
            }

            if ($numeral == 0) {
                $numeral = $this->values[$currSymbol];
            }

            $answer += $numeral;
        }

        print($answer);
    }
}

new Solution();

/**
 * Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.
 * Given a roman numeral, convert it to an integer.
 */