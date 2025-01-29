<!DOCTYPE html>
<html>
<body>

<?php
class Car {
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
}

$toyota = new Car();
$hyundai = new Car();
$toyota->set_name('Fortuner');
$hyundai->set_name('Creta');

echo $toyota->get_name();
echo "<br>";
echo $hyundai->get_name();
?>
 
</body>
</html>