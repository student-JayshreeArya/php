<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <h1>
        The fruit program
    </h1>
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
    }
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    
    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";


    class Flower {
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
      
      $rose = new flower();
      $rose->set_name('Rose');
      $rose->set_color('Red');
      echo "Name: " . $rose->get_name();
      echo "<br>";
      echo "Color: " . $rose->get_color();
    ?>
</body>
</html>