<!-- leetcode 1 -->

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = array(); 

        for ($i = 0; $i < count($nums); $i++){
            for ($j = 1; $j < count($nums); $j++){
                $current_sum = (int)$nums[$i] + (int)$nums[$j];
                if ($current_sum == $target and $i != $j){
                    array_push($result, $i);
                    array_push($result, $j);
                    return $result; 
                }
            }
        }
    }
}
?>