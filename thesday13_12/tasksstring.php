<!-- PHP String and String Functions	         		       
1.	Write a PHP script to:  -->





<?php
$nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

echo  "result<br>";
echo round(array_sum($nums)/count($nums)) ."<br>"
natcasesort($nums);
echo "<pre>";
print_r(($nums));
echo "</pre>";
print_r(array_slice($nums,0,5));
echo"<br>";
print_r(array_slice($nums,-6,-1));

?>