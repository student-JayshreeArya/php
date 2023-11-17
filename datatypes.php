<?php

$a = "hello world";      //string
$b = 35;                 //integer
$c = 30.3;               //float
$d = true;               //boolean
$e = array("HTML", "CSS", "PHP");        //array
$f = new myclass();      //object
$g = null;               //null


echo "Data types";
echo "<br>";
    $var = "this is jaya arya";
    echo var_dump($var);
    echo "<br>";

    $var = 95;
    echo var_dump($var);
    echo "<br>";

    $var = 83.932;
    echo var_dump($var);
    echo "<br>";
    
    $var = true;
    echo var_dump($var);
    echo "<br>";


      class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();
      
    ?>
