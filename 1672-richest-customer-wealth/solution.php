<?php

class Solution
{
    private $accounts;

    public function __construct()
    {
        $this->accounts = [[2, 8, 7], [7, 1, 3], [1, 9, 5]];
        $this->maximumWealth($this->accounts);
    }

    function maximumWealth($accounts)
    {
        $highestWealth = 0;

        foreach ($accounts as $account) {
            $wealth = 0;
            foreach ($account as $money) {
                $wealth += $money;
            }

            if ($wealth > $highestWealth) $highestWealth = $wealth;
        }

        print($highestWealth);
    }
}

new Solution();

/**
 * You are given an m x n integer grid accounts where accounts[i][j] is the amount of money the i​​​​​​​​​​​th​​​​ customer has in the j​​​​​​​​​​​th​​​​ bank. 
 * Return the wealth that the richest customer has.
 */
