<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if ($head == null || $head->next == null) {
            return $head;
        }
        $p = $this->reverseList($head->next);
        $head->next->next = $head;
        $head->next = null;

        return $p;

    }
}