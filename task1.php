<?php
// echo "walaa";


// <!-- task1  Write a PHP script to get the PHP version and configuration information.-->

// phpinfo();


//  task2 Write a PHP script to display the following strings. 
//  Sample String:
// 'Tomorrow I 'll learn PHP global variables.'
// 'This is a bad command: del c:.'
// Expected Output:
// Tomorrow I'll learn PHP global variables.
// This is a bad command: del c:. -->


// echo "Tomorrow I \'ll learn PHP global variables."."\n"; 
// echo "This is a bad command : del c:\\*.*"."\n"; 

//  task3 Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement. 

//Retrieve name from query string and store to a local variable
// $name = $_POST['name'];
// echo "<h3> Hello $name </h3>";


// task4 Write a PHP script to get the client's IP address. 
// $_SERVER['REMOTE_ADDR'];

// task5 Write a PHP script to get the current file name.
// $current_file_name = basename($_SERVER['PHP_SELF']);
// echo $current_file_name."\n";


// 6. Write a PHP script, which will return the following components of the URL https://www.w3schools.com/php/default.asp.

// $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
// $url=parse_url($url);
// echo 'Scheme : '.$url['scheme']."\n";
// echo 'Host : '.$url['host']."\n";
// echo 'Path : '.$url['path']."\n";

// 7. Write a PHP script, which changes the color of the first character of a word.
// Sample string: PHP Tutorial.

// $text = 'PHP Tutorial';
// $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
// echo $text;

// 8. Write a PHP script to redirect a user to a different page.
//  Expected output: Redirect the user to https://www/. w3schools.com/

// header('Location: https://www.w3schools.com/%27);

?>

<!-- <!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form> 
  </body>
</html>  -->