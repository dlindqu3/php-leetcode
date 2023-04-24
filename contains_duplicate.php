<!-- leetcode 217 -->

<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {

   sort($nums);

   $p1 = 0; 
   $p2 = 1; 

   while($p2 < count($nums)){
       if ($nums[$p1] == $nums[$p2]){
           return True;
       }
       $p1 += 1; 
       $p2 += 1; 
   }
    return False;
}
}

?>
