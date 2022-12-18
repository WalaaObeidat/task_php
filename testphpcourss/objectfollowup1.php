<?php
session_start
echo "oday is 23 years  old and has 22 JOD in hand ";
echo "<br>";
class userInfo {
  public $name;
  public $age;
  public $money;
//   function_construct($name,$age,$money){
//  $this->name=$name;
//  $this->age=$age;
//  $this->money=$money;

   function setData($name,$age,$money){
    $this->name=$name;
    $this->age=$age;
    $this->money=$money;
   }
    function getdate(){

    }
    
  }
  $user=new userInfo();
  $user->setData("jack","19","100 JOD");
  echo"<pre>"
  echo"<br>";
  print_r($user);
  echo"<br>";
  echo"$user->name is $user->age and has $user->$money";
  echo"<br>";


// }
// $user=new userInfo("oday","24","20 JOD");
echo"<br>";
print_r($user);
echo"<br>";
// echo"$user->name is $user->age and has $user->$money";

print_r($_SESSION);
echo"</pre>";
?>