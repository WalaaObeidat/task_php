<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */

  echo '<pre>';
  print_r([
    0 => "Sameh",
    "W" => "Walaa",
    "H" => "Huda",
    "Mohammad",
    True => "zaid",
    "1" => "abdallah",
    "Omar",
    9 => "farah",
    "Eman",
    "Mohamed",
    False => "Asmaa",
    8 => "Haytham",
    "Samer",
    "Names" => [
      "abdallah",
      "Walaa",
      "farah" => [
        "1",
        "2",
        "3"
      ]
    ]
  ]);
  echo '</pre>';