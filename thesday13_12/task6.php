<!-- 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
 -->

 <?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach($fruits as $x => $x_value) {
    echo  $x  ." = ". $x_value;
    echo "<br>";
}
echo'<pre>';
print_r(array_reverse($fruits,-4));
echo'</pre>';
?>