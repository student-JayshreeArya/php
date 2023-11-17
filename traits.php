<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <?php
    trait TraitName {
        //somecode...
    }

    //to use trait in class
    class MyClass {
        use TraitName;
    }

    //example
    trait message1 {
        public function msg1() {
            echo "OOP is fun";
        }
    }
    trait message2 {
        public function msg2() {
            echo "OOP is fun but not so easy";
            echo "<br>";
        }
    }
    class Welcome {
        use message1;
    }
    class Welcome2 {
        use message1, message2;
    }
    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();
    echo "<br>";
    $obj2->msg2();

    //example2
    trait hello{
        public function sayhello(){
            echo "Hello Everyone";
           
        }
    }
    class base{
        use hello;
    }
    class base2{
        use hello;
    }
    $test = new base();
    $test2 = new base2();

    $test->sayhello();
    echo "<br>";
    $test2->sayhello();
    echo "<br>";



    //method overriding
    trait test{
        public function sayhello(){
            echo "Hello from trait test\n";
        }
    }
    trait hii{
        public function sayhii(){
            echo "Hello from trait hii\n";
        }
    }
    class basename{
        public function sayhello(){
            echo "Hello from basename class\n";
        }
    }
    class child extends basename{
        use hello;
        public function sayhello(){
            echo "Hello from child class\n";
        }
    }
    $test = new basename();
    $test->sayhello();
    echo "<br>";

    //ex
    trait hey{
        public function sayhey(){
            ecgo "Hey everyone from hey trait";
        }
    }
    trait hlw{
        public function sayhey(){
            echo "Hey everyone from hlw trait";
        }
    }
    class basic{
        use hey, hlw{
            hey::sayhey insteadof sayhlw;
            hlw::sayhey as newhey; 
        }
    }
    $ditch = new basic();
    $ditch->sayhey();
    $ditch->newhey();
    ?>
</body>
</html>