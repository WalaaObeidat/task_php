<!-- /*
    String Functions
    
    - nl2br(String[Required], XHTML[Optional])
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])

    /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

*/
 <?php
echo strstr("Elzero Web", "W") . "<br>"; // Web
echo strstr("Elzero Web", "z") . "<br>"; // zero Web
echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


echo strstr("Elzero Web", "w") . "<br>"; // False
var_dump(strstr("Elzero Web", "w"));
echo '<br>';


echo stristr("Elzero Web", "w") . "<br>"; // Web
var_dump(stristr("Elzero Web", "w")); // Web
echo '<br>';

echo 10_000_000;
echo '<br>';

echo number_format(10000000.156023);
echo '<br>';
echo number_format(10000000.156023, 3);
echo '<br>';
echo number_format(10000000.156023, 3, "@");
echo '<br>';
echo number_format(10000000.156023, 3, "@", "#");

?>

   <?php
  // echo nl2br("Elzero\nWeb\nSchool", false); 
  //  echo '<br>';
   ?>

<?php

  // $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  // echo strlen($str) . "<br>";

  // echo wordwrap($str, 8, "<br>", True);

  // echo "<br>";

  // echo ord("a"); // 97

  // echo "<br>";

  // echo chr(97); // a

  // echo "<br>";

  // echo similar_text("Elz@ero", "Elz_eroo");

  // echo "<br>";

  // echo similar_text("Elzero", "Elzeroo", $perc);

  // echo "<br>";

  // echo $perc;
?>
   