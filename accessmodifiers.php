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
    //     protected $color;
    //     private $weight;
    // }

    // $mango = new Fruit();
    // $mango->name = 'Mango'; // OK
    // $mango->color = 'Yellow'; // ERROR
    // $mango->weight = '300'; // ERROR


    // class Fruit {
    //     public $name;
    //     public $color;
    //     public $weight;
      
    //     function set_name($n) {  // a public function (default)
    //       $this->name = $n;
    //     }
    //     protected function set_color($n) { // a protected function
    //       $this->color = $n;
    //     }
    //     private function set_weight($n) { // a private function
    //       $this->weight = $n;
    //     }
    //   }
      
      // $mango = new Fruit();
      // $mango->set_name('Mango'); // OK
      // $mango->set_color('Yellow'); // ERROR
      // $mango->set_weight('300'); // ERROR

      class base{
        public $name;
        public function __construct($n){
          $this->name = $n;
        }
        public function show(){
          echo "Your Name : " . $this->name . "<br>";
        }
      }

      class derived extends base{
        public function get(){
          echo "Your Name : " . $this->name . "<br>";
        }
      }

      $test = new derived("Jayshree Arya");
      $test->name = "Arya Jayshree";   //over write
      $test->show();
    ?>
    
</body>
</html>