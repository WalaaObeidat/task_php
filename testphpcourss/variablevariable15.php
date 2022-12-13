<?php

  /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */

  $a = "obeidat";
  $$a = "walaa";
  $$$a = "school";

  echo $a;
  echo "<br>";
  echo $$a;
  echo "<br>";
  echo $obeidat;
  echo "<br>";
  echo $$$a;
  echo "<br>";
  echo $walaa;
  echo "<br>";

  echo "Hello ${$a}"; // $$a
  echo "<br>";
  echo "Hello ${$$a}"; // $$$a