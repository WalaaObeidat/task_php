
<!-- object -->
<?php
// class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');

// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
?>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
echo "<br>";
echo "Color: " .  $apple->color;

?>
 
 








<?php
// class colo {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_color($color) {
//     $this->color = $color;
//   }
//   function get_color($color) {
//     return $this->$color;
//   }
// }

// $yellow = new colo();
// $red = new colo();
// $yellow->set_color('yellow');
// $red->set_color('red');

// echo $yellow->get_color();
// echo "<br>";
// echo $red->get_color();
?> 