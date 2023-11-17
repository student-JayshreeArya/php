<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
  <?php
  class fruit {
    public $name;
    public $color;
    function __construct($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $apple = new Fruit("Apple");
  echo $apple->get_name();
  echo "<br>";
  
  class Flower {
    public $name;
    public $color;
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $rose = new Flower("rose", "red");
  echo $rose->get_name();
  echo "<br>";
  echo $rose->get_color();
  echo "<br>";


  //constructor in inheritance
  class BaseClass {
    function __construct() {
      print "In BaseClass contructor\n";
      echo "<br>";
    }
  }

  class SubClass extends BaseClass {
    function __construct() {
      parent::__construct();
      print "In SubClass constructor\n";
      echo "<br>";
    }
  }

  class OtherSubClass extends SubClass {
  }

  $obj = new BaseClass();
  $obj = new SubClass();
  $obj = new OtherSubClass();

  //using constructor arguments
  class Point {
    protected int $x;
    protected int $y;
    public function __construct(int $x, int $y = 0) {
      $this->x = $x;
      $this->y = $y;
    } 
  }
  
  $p1 = new Point(4,5);
  $p2 = new Point(4);
  $p3 = new Point(y:5, x:4);


  //example
  // class Person {
  //   public $name;
  //   function show() {
  //     echo "Your Name : " . $this->name;
  //   }
  // }

  // $p1 = new Person();
  // $p1->name = "Yahoo Baba";
  // $p1->show();



  class person {
    public $name, $age;

    function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
    function show() {
      echo $this->name . " - " . $this->age . "\n";
    }
  }

  $p1 = new person("yahoo", 26);
  $p2 = new person("Shyam lal", 98);
  $p3 = new person("Geeta RAni", 56);
  // $p1->name = "yahoo baba";
  // $p1->age = 15;

  $p1->show();
  $p2->show();  ?>
</body>
</html>