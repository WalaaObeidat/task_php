<!-- 5.	Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $ -->


<?php
$original = array( '1','2','3','4','5' );
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
foreach ($original as $x) 
{echo "$x ";}
echo "\n"
?>
