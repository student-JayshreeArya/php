<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
    //syntax
    // abstract class parentclass {
    //     abstract public function someMethod1();
    //     abstract public function someMethod2($name, $color);
    //     abstract public function someMethod3(): string;
    // }

    //example1
    //parent class
    abstract class car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro(): string;
    }
    //child classes
    class Audi extends Car {
        public function intro() : string {
          return "Choose German quality! I'm an $this->name!";
        }
    }
    
    class Mercedes extends Car {
        public function intro() : string {
            return "Love to have this car! I'm an $this->name!";
        }
    }

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swidish! I'm an $this->name";
        }
    }
    //create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $mercedes = new mercedes("Mercedes");
    echo $mercedes->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";


    //example2
    // abstract class ParentClass {
    //     //abstract with an argument
    //     abstract protected function prefixName($name);
    // }
    // class ChildClass extends ParentClass {
    //     public function prefixName($name){
    //     if ($name == "Jaya Arya"){
    //         $prefix = "Ms.";
    //     }
    //     elseif ($name == "Divyansh Arya"){
    //         $prefix = "Mr.";
    //     }
    //     else {
    //         $prefix = " ";
    //     }
    //     return "{$prefix} {$name}";
    // }

    // }

    // $class = new ChildClass;
    // echo $class->prefixName("Jaya Arya");
    // echo "<br>";
    // echo $class->prefixName("Divyansh Arya");
    // echo "<br>";


    //example3
    abstract class Name {
        //abstract method with an argument
        abstract protected function prefixName($name);
    }
    class Surname extends Name {
        //the child class may define optional arguments that are not in the parent's abstract method
        public function prefixName($name, $seperator = ".", $greet = "Dear"){
            if ($name == "Jaya Arya"){
                $prefix = "Ms.";
            }
            elseif ($name == "Divyansh Arya"){
                $prefix = "Mr.";
            }
            else {
                $prefix = " ";
            }
            return "{$greet} {$prefix} {$seperator} {$name}";

        }
    }

    $class = new Surname;
    echo $class->prefixName("Jaya Arya");
    echo "<br>";
    echo $class->prefixName("Divyansh Arya");
    echo "<br>";


    //example4
    abstract class parentClass{
        public $name;
        abstract protected function calc($a, $b);
    }
    class childClass extends parentClass{
        public function calc($a, $b){
            echo $a + $b;
        }
    }
    $test = new childClass();
    $test->calc(6, 8);
    ?>
</body>
</html>