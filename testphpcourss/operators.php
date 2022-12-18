<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */

  $a = 10;
  // $a = $a + 20;
  $a += 20;

  $b = 20;
  // $b = $b - 5;
  $b -= 5;

  $c = 4;
  // $c = $c ** 4;
  $c **= 4;

  echo $a;
  echo '<br>';
  echo $b;
  echo '<br>';
  echo $c;

?>


  <?php
echo"<hr>";
  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal مقارنه القيمه فقط
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical 
    مقارنه القيمه مع النوع 
    - !==   => Not Identical
  */

  // Test Equal
  var_dump(100 == 100);
  echo '<br>';
  var_dump(100 == "100");
  echo '<br>';
  var_dump(100.0 == "100");
  echo '<br>';
  var_dump(100.0 != "100");
  echo '<br>';
  var_dump(100.0 <> "100");

  echo '<br>';
  echo '##############';
  echo '<br>';

  // Test Identical
  var_dump(100 === 100);
  echo '<br>';
  var_dump(100 === "100");
  echo '<br>';
  var_dump(100.0 === "100");
  echo '<br>';
  var_dump(100.0 === 100);
  echo '<br>';
  var_dump(100.0 !== "100");
  echo '<br>';
  var_dump(100.0 !== 100);
  ?>

<?php
echo "<hr>" ;

/*
  Operators
  - Used To Perform Operations On Values.

  Comparison Operators
  - Used To Compare Two Values

  - Part 2
  - >     => Larger Than
  - >=    => Larger Than Or Equal
  - <     => Smaller Than
  - <=    => Smaller Than Or Equal
  - <=>   => Spaceship [Less Than, Equal Or Greater]

  Search
  - How Does PHP Compare Strings With Comparison Operators
*/

var_dump(100 > 50);
echo '<br>';
var_dump(100 > 100);
echo '<br>';
var_dump(100 >= 100);
echo '<br>';
var_dump(100 >= 110);
echo '<br>';
var_dump(100 < 50);
echo '<br>';
var_dump(100 <= 50);
echo '<br>';
var_dump(100 <=> 200); // -1
echo '<br>';
var_dump(100 <=> 100); // 0
echo '<br>';
var_dump(100 <=> 50); // 1
?>

<?php
echo"<hr>";
/*
  Operators
  - Used To Perform Operations On Values.

  Incrementing &#038; Decrementing Operators
  - Increase And Decrease Values
*/

$likes = 0;
$likes++;
$likes++;
$likes++;
$likes--;

echo $likes; // 2
echo '<br>';

$a = 0;

echo $a--; // 0
echo '<br>';
echo $a; // -1
echo '<br>';

$b = 0;

echo --$b; // -1
echo '<br>';
echo $b; // -1
?>

<?php
echo "<hr>";

  /*
    Operators
    - Used To Perform Operations On Values.

    Logical Operators
    - Compare Conditions

    and => And => Two Are True
    &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    !   => Not => Not True
  */

  var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
  echo '<br>';
  var_dump(100 > 50 && 100 > 80 && 100 > 100); // False
  echo '<br>';
  var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
  echo '<br>';
  var_dump(100 > 50 xor 100 > 80);
  ?>

<?php
echo "<hr>"
/*
  Operators
  - Used To Perform Operations On Values.

  String Operators
  - Concatenate Strings

  .
  .=
*/

define("ELZERO", "1");

$a = "Elzero";
$b = "Web";
$c = "School";

echo "$a $b $c";
echo '<br>';
echo "{$a} {$b} {$c}";
echo '<br>';
echo $a . " " . $b . " " . $c;
echo '<br>';
echo "{$a} {$b} {$c} " . ELZERO . " " . testing();
echo '<br>';

function testing() {
  return 1;
}

$x = "Elzero ";
$x .= "Web"; // $x = $x . "Web" => Elzero Web
$x .= " School"; // $x = $x . "School" => Elzero Web School

echo $x;

?>

<?php
echo "<hr>";

  /*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
  */

  $arr1 = [1 => "A", 2 => "B"];
  $arr2 = [3 => "C", 4 => "D"];
  $arr3 = $arr1 + $arr2;

  echo '<pre>';
  print_r($arr1 + $arr2);
  print_r($arr3);
  echo '</pre>';

  $arr4 = [1 => "10", 2 => "20"];
  $arr5 = [2 => 20, 1 => 10];

  var_dump($arr4 == $arr5); // True
  echo '<br>';
  var_dump($arr4 != $arr5); // False
  echo '<br>';
  var_dump($arr4 <> $arr5); // False
  echo '<br>';

  $arr6 = [1 => 100, 2 => 200];
  $arr7 = [1 => 100, 2 => 200];

  var_dump($arr6 === $arr7); // Give Me True

  ?>

<?php
echo "<hr>";
/*
  Operators
  - Used To Perform Operations On Values.

  Error Control Operator
  - Control The Errors

  @
  - Variable
  - File
  - Include
*/

// Variable
$a = 10;
$b = @$a or die("Variable Not Found");

echo "Test $b";
echo '<br>';

// File
$f = @file("osama.txt") or die("File Not Found");
echo '<pre>';
print_r($f);
echo '</pre>';
echo '<br>';

// Include
(@include("osama_elzero.php")) or die("Include File Not Found");

?>



<?php
echo "<hr>";

  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
  */

  echo 2 + 4 * 5; // 22
  echo '<br>';
  echo (2 + 4) * 5; // 30
  echo '<br>';
  echo 10 || false || 0 || [] || ""; // True => 1
  echo '<br>';
  echo true; // 1
  echo '<br>';
  var_dump(10 || false || 0 || [] || ""); // True
  echo '<br>';
  echo 10 || false; // 1
  echo '<br>';

  $a = 10 || false; // $a = (10 || false) => $a = 1
  echo $a; // 1

  echo '<br>';

  $b = 10 or false; // ($b = 10) or false
  echo $b; // 10
  ?>
