<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
final class Solution
{

    function middleNode($head) {
        $tortoise = $head;
        $hare = $head;

        while ($hare !== null && $hare->next !== null) {
            $hare = $hare->next->next;
            $tortoise = $tortoise->next;
        }

        return $tortoise;
    }
}

new Solution();

/**
 * Given the head of a singly linked list, return the middle node of the linked list.
 * If there are two middle nodes, return the second middle node.
 */
