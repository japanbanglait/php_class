<?php
 echo "---------------multi dimentional arrays ------------ <br><br>";
$nums = array (
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
   
  );
    
  echo $nums[0][0]."   ".$nums[0][1]."   " .$nums[0][2]."<br>";
  echo $nums[1][0]."   ".$nums[1][1]."   " .$nums[1][2]."<br>";
  echo $nums[2][0]."   ".$nums[2][1]."   " .$nums[2][2]."<br>";
  
echo "<br> <br><br>";

  $nums2 = array (
    array(1),
    array(0, 5),
    array(0, 0, 9),
   
  );
 
    
  echo $nums2[0][0]."<br>";
  echo $nums2[1][0]."   ".$nums2[1][1].  "<br>";
  echo $nums2[2][0]."   ".$nums2[2][1]. "   "  .$nums2[2][2]."<br>"; 
  
?>


