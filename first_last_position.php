<!-- leetcode 34 -->


<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    function searchRange($nums, $target) {
        
        $p1 = 0; 
        $p2 = count($nums) - 1; 

        while($p1 <= $p2){

            if ($nums[$p1] == $target and $nums[$p2] == $target){
                return [$p1, $p2]; 
            }
            else if ($nums[$p1] != $target and $nums[$p2] != $target){
                $p1 += 1; 
                $p2 -= 1; 
            }
            else if ($nums[$p1] != $target and $nums[$p2] == $target){
                $p1 += 1; 
            }
             else if ($nums[$p1] == $target and $nums[$p2] != $target){
                $p2 -= 1; 
            }
        }
        return [-1, -1]; 
    }
}

?>