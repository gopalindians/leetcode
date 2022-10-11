<?php

class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $r = 0;
        foreach($operations as $k=>$v){
            if($v=='++X'){
                ++$r;
            }else if($v=='X++'){
                $r++;
            }else if($v=='--X'){
                --$r;
            }else if($v=='X--'){
                $r--;
            }
        }
        return $r;
    }
}