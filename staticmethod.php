<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <?php
    //syntax
    class ClassName {
        public static function staticMethod() {
            echo "Hello Jaya";
            echo "<br>";
        }
    }
    
    //example1
    class Greeting {
        public static function welcome() {
            echo "Hello Mr. Duan Jiaxu";
            echo "<br>";
        }
    } 
    //call static method
    Greeting::welcome();

    //example2
    class Wishes {
        public static function ThankYou() {
          echo "Hello World!";
          echo "<br>";
        }
      
        public function __construct() {
          self::ThankYou();
        }
    }
      
    new Wishes();

    //example3
    class A {
        public static function Welcome() {
            echo "Jayshree is a good girl";
            echo "<br>";
        }
    }
    class B {
        public function message() {
            A::Welcome();
        }
    }
    $obj = new B();
    echo $obj->message();

    //example4
    class domain {
        protected static function getWebsiteName() {
          return "W3Schools.com";
        }
      }
      
      class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
          $this->websiteName = parent::getWebsiteName();
        }
      }
      
      $domainW3 = new domainW3;
      echo $domainW3 -> websiteName;
      echo "<br>";
    
    //example5
    class base{
      public static $name = "Jayshree Arya";
      public static function show(){
        echo self::$name;
        echo "<br>";
      }
      public function __construct(){
        self::show();
      }
    }
    // echo base::$name;
    // base::show();
    $test = new base();
    $test->show();

    ?>
</body>
</html>