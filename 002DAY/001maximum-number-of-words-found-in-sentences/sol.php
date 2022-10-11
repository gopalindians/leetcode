<?php
class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $res = 0;
        foreach($sentences as $k=>$v){
            $exArr = explode(" ",$v);

            $subRes = 0;
            foreach($exArr as $ke=>$Va){
                $subRes++;
            }
            if($res <= $subRes){
                $res = $subRes;
            }
        }

        return $res;

    }
}