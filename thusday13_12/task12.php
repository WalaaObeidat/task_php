
<!-- 12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")
 -->

<?php
$words = array("abcd","abc","de","hjjj","g","wer");
    $new_array = array_map('strlen', $words);
    echo "The shortest array length is" .min($new_array). "<br>The longest array length is" .max($new_array).".<br>";

// $my_array = array("abcd","abc","de","hjjj","g","wer");
// $new_array = array_map('strlen', $my_array);

// echo "The shortest array length is " . min($new_array) .
// ". The longest array length is " . max($new_array).'.';
?>

