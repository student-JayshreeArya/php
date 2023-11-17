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
    // interface InterfaceName {
    //     public function someMethod1();
    //     public function someMethod2($name, $color);
    //     public function someMethod3() : string;
    // }

    //example1
    interface Bird {
        public function makesound();
    }
    class Sparrow implements Bird {
        public function makesound() {
            echo "chichu";
            echo "<br>";
        }
    }

    $Bird = new Sparrow();
    $Bird->makesound();

    //example2
    //interface definition
    interface Animal {
        public function makesound();
    }

    //class definition
    class Cat implements Animal {
        public function makesound() {
            echo "Meow";
            echo "<br>";
        }
    }
    class Dog implements Animal {
        public function makesound() {
            echo "Bark";
            echo "<br>";
        }
    }
    class Horse implements Animal {
        public function makesound() {
            echo "Neehee";
        }
    }
    
    //create a list of animals
    $Cat = new Cat();
    $Cat->makesound();
    $Dog = new Dog();
    $Dog->makesound();
    $Horse = new Horse();
    $Horse->makesound();
    echo "<br>";
    // $animal = array($Cat, $Dog, $Horse);
    
    // //tell the animals to make a sound
    // foreach($animals as $animal) {
    //     $animal->makesound();
    // }

    //example3
    interface parent1{
        function calc($a, $b);
    }
    interface parent2{
        function sub($c, $d);
    }
    class childClass implements parent1, parent2{
        public function calc($a,$b){
            echo $a + $b;
        }
        public function sub($c,$d){
            echo $c - $d;
        }
    }
    $test = new childClass();
    
    $test->calc(45,54);
    echo "<br>";

    $test->sub(78,87);
    ?>
</body>
</html>