<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
    // class Fruit {
    //     public $name;
    //     public $color;
    //     public function __construct($name, $color) {
    //          $this->name = $name;
    //          $this->color = $color;
    //         }
    //         public function intro() {
    //             echo "The fruit is {$this->name} and the color is {$this->color}.";
    //         }
    //     }
        
    //     // Strawberry is inherited from Fruit
    //     class Strawberry extends Fruit {
    //         public function message() {
    //             echo "Am I a fruit or a berry? ";
    //         }
    //     }
    //     $strawberry = new Strawberry("Strawberry", "red");
    //     $strawberry->message();
    //     $strawberry->intro();
    
    
    
    //inheritance and the protected access modifier
    class Fruit {
      public $name;
      public $color;
      public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
      protected function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
      echo "<br>";
    }
  }
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
      echo "<br>";
      // Call protected method from within derived class - OK
      $this -> intro();
    }
  }
  $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
  $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
  
  
  //inherited overriding method
  class Vegetable{
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;

    }
    public function intro() {
      echo "The vegetable is {$this->name} and the color is {$this->color}.";
    }
  }

  class onion extends Vegetable {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The vegetable is {$this->name}, the color is {$this->color} and the weight is {$this->weight}gram.";
      echo "<br>";
    }
  }
  $onion = new onion("onion", "white", 500);
  $onion->intro();

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

  //example
  class employee {
    public $name;
    public $age;
    public $salary;

    // function __construct($n, $a, $s){
    //   $this->name = $n;
    //   $this->age = $a;
    //   $this->salary = $s;
    // }

    function  __construct() {
      echo "Employee Constructor";
      echo "<h3>Manager Profile</h3>";
      echo "Employee Name : " . $this->name . "<br>";
      echo "Employee Age : " . $this->age . "<br>";
      echo "Employee Salary : " . $this->salary . "<br>";
    } 
    
    class manager extends employee {
      function __construct(){
        echo "Manager Constructor";
      }
      public $ta = 1000;
      public $phone = 500;
      public $totalsalary;

    function info() {
      $this->totalsalary = $this->salary + $this->ta + $this->phone;
      echo "<h3>Manager Profile</h3>";
      echo "Employee Name : " . $this->name . "<br>";
      echo "Employee Age : " . $this->age . "<br>";
      echo "Employee Salary : " . $this->salary . "<br>";
    }
  }

  
    // function __construct() {
    //   echo "Manager Constructor";
    // }
    
  }
  $e1 = new manager("Ram", 36, 6900);
  $e2 = new employee("Shyam", 56, 9000);

  $e1->info();
  $e2->info();
  // $e1 = new employee("Ram", 45, 20000);
  // $e1->info();

  // $e2 = new employee("Rajat", 34, 60000);
  // $e2->info();
  ?>

</body>
</html>