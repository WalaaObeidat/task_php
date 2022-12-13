<!-- Array function -->
<!--  array_values -->
<!-- تطلع القيمة فقط وممكن -->

<?php
$countries =array("USA"=>"united state","GE"=>"geyrmany","JO"=>"Jordan");
echo'<pre>';
print_r(array_values($countries));
echo'</pre>';
echo'<pre>';
print_r(array_keys($countries));
echo'</pre>';

echo '<br>';
echo '<hr>';
echo '<br>';

?>

<!-- array_key -->
<!-- تطلع القيمة والكي تبعها وممكن احدد اي كي بدي ياه -->
<?php
$obeidat = ["walaa","ahmad","ali","farah",2,"2"];
echo'<pre>';
print_r(array_keys($obeidat));
echo'</pre>';

echo'<pre>';
print_r(array_keys($obeidat,"ali"));
echo'</pre>';

echo'<pre>';
print_r(array_keys($obeidat,"2"));
echo'</pre>';

echo'<pre>';
print_r(array_keys($obeidat,"2",true));
echo'</pre>';

echo'<pre>';
print_r(array_keys($obeidat,"2",false));
echo'</pre>';

echo '<br>';
echo '<hr>';
echo '<br>';
?>


<!-- array_pad -->
<!-- تعبي الفراغات في اماكن اندكس باي شي بحدده وومكن بالعكس -->
<?php
$pad = ["W","A","H","O"];
echo'<pre>';
print_r(array_pad($pad,8,"&"));
echo'</pre>';
echo'<pre>';
print_r(array_pad($pad,-8,"&"));
echo'</pre>';

echo '<br>';
echo '<hr>';
echo '<br>';
?>


<!--  array_product -->
<?php
$product =[1,5,3,10];
// الضرب
echo array_product($product)."<br>"; 
    //   الجمع               
$sum =[1,5,3,10];
echo array_sum($sum);

echo '<br>';
echo '<hr>';
echo '<br>';
?>


<!-- array_current -->
<?php
$family = ["walaa","ahmad","mohd","ali","farah"];
// القيمة الاولى 
echo current($family)."<br>";
// القيمة الثانية 
echo next($family)."<br>"; 
// يرجع القيمة الاولى
echo prev($family)."<br>"; 
// يرجع القيمة الاولى كانة لم يجري اي عمليات عليه
echo reset($family)."<br>";
// القيمة الاخيرة
echo end($family)."<br>"; 

echo '<br>';
echo '<hr>';
echo '<br>';
?>


<?php

  /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */
//   array_reverse
// بترجعلي القيم من الاخر للاول حتى لوكان كل اريه لحال بترجغ كل اندكس لحال
  
  $family = ["walaa", "huda", "ahmad", "Mahmoud", "farah", ["Eman", "omar"]];

  echo '<pre>';
  print_r($family);
  print_r(array_reverse($family, True));
  echo '</pre>';

  echo '<br>';
  echo '<hr>';
  echo '<br>';
//   array_flip
// تضع الكي بدل القيمة والقيمة بدل الكي
  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_flip($countries));
  echo '</pre>';


  echo '<br>';
  echo '<hr>';
  echo '<br>';


//    count
// تعداد القيم الموجودة داخل الاريه
  $counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
  ];
  echo count($counting, 1);

  echo '<br>';

  echo '<br>';
  echo '<hr>';
  echo '<br>';

//   search in_array
// البحث داخل الاريه 

  $search = ["1", 2, 3, 4];

  if (in_array(1, $search, True)) {
    echo "The Element Is Found";
  }


//   array_key_exists
// البحث في قيمتين جوا بعض وارسال رساله وجود
  $courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];

  if (array_key_exists("PHP", $courses)) {
    echo "The Course Is Found And The Price Is: " . $courses["PHP"];
  }