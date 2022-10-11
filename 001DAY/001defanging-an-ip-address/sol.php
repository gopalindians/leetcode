<?php
class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $ex = explode(".",$address);
        $r  = "";
        $as = count($ex)-1;
        foreach($ex as $k=>$v){
            if($k< $as){
                $r.=$v."[.]";
            }else{
                $r.=$v;
            }
        }

        return $r;
    }
}