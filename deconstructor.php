
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");

//ex
class abc {
  public function __construct(){
    echo "This is constructor function . <br>";
  }
  public function sayhello(){
    echo "This is heelo function . <br>";
  }
  public function __destruct(){
    echo "This is destruct function . <br>";
  }
}
$test = new abc();
$test->sayhello();
$test->sayhello();
$test->sayhello();
?>