<?php
// 1) class
class simpleClass{
    public $var;                  //property declaration
    public function displayVar(){              //method declaration
        echo $this->var; 
    }                
}

class Fruit {
    //properties
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

// 4) object of class
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
echo "Name : " . $rose->get_name() . "<br>";
echo "Color : " . $rose->get_color() . "<br>";

//or
class myClass{}
class anotherClass extends myClass{}
$obj = new anotherClass();
if($obj instanceof anotherClass){
    echo "The object id Another class";
}
if($obj instanceof myClass){
    echo "The object is My class";
}
echo "<br>";

//or inside the class
class fhal{
    public $name;
    function set_name($name){
        $this->name = $name;
    }
    function set_color($color) {
        $this->color = $color;
    }
}
$apple = new fhal();
$apple->set_name("apple");
echo "Name : " . $apple->name . "<br>";
$apple->set_color("red");
echo "Color : " . $apple->color . "<br>";

//or outside the class
class color{
    public $name;
}
$red = new color();
$red->name = "blue";
echo "Color name is : " . $red->name . "<br>";

//or
$blue = new color();
var_dump($blue instanceof color) . "<br>";
echo "<br>";

// 7) concept of inheritence
class car{
    public $name;        //property
    public $color;
    public function __construct($name,$color){        //constructor is used to initialize the values of property
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The car is $this->name and $this->color .<br>";
    }
}
class volvo extends car{
    public function message(){
        echo "Am I a car or a vehicle? . <br>";
    }
}
$c = new car("scorpio", "black");
$volvo = new volvo("Volvo", "white");
$volvo->message();
$volvo->intro();

// 8) method overriding
class shape{
    public function calculateArea(){
        return 0;               //base implementation
    }
}
class circle extends shape{
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);         //override method for circle
    }
}
class square extends shape{
    private $side;
    public function __construct($side){
        $this->side = $side;                  //override method for square
    }
    public function calculateArea(){
        return pow($this->side, 2);
    }
}
$circle = new circle(5);
$square = new square(8);
echo "Area of circle : " . $circle->calculateArea() . "<br>";
echo "Area of square : " . $square->calculateArea() . "<br>";

//or
class P{
    public function hello(){
        echo "In the base class";
    }
}
class C extends P{
    public function hello(){
        echo "In the derived class";
    }
}
$obj1 = new P();
$obj1->hello();
echo "<br>";
$obj2 = new C();
$obj2->hello();
echo "<br>";

// 9) this keyword
class simple{
    public $k = 6;
    public function display(){
        return $this->k;
    }
}
$obj = new simple();
echo $obj->display();
echo "<br>";

// 10) properties and methods
class sub{
    public $make;
    public $year;
    function set_year($year){
        $this->year = $year;
    }
    function get_year(){
        return $this->year;
    }
}
$hindi = new sub();
$hindi->make = "hindi";          //use class properties 
$hindi->set_year(2029);           //use class methods
echo $hindi->get_year() . " " . $hindi->make . " " . "<br>";

$maths = new sub();
$maths->make = "maths";
$maths->set_year(2019);
echo $maths->get_year() . " " . $maths->make . " " . "<br>";

// 12) constructor
// class person {
//     public $name, $age;

//     function __construct($name, $age) {
//       $this->name = $name;
//       $this->age = $age;
//     }
//     function show() {
//       echo $this->name . " - " . $this->age . "\n";
//     }
// }
// $p1 = new person("yahoo", 26) . "<br>";
// $p2 = new person("Shyam lal", 98) . "<br>";
// $p3 = new person("Geeta RAni", 56) . "<br>";
// // $p1->name = "yahoo baba";
// // $p1->age = 15;
// $p1->show();
// $p2->show();
// echo "<br>";

// 14) deconstructor
class flowers{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function __destruct(){
        echo "This flower name is $this->name and the color is $this->color . <br>";
    }
}
$rose = new flowers("rose", "pink");
$lily = new flowers("lily", "white");

//or 
class demo{
    public function demo(){
        echo "constructor 1 <br>";
    }
}
class demo1 extends demo{
    public function __construct(){
        echo parent::demo();
        echo "constructor 2 . <br>";
    }
    public function __destruct(){
        echo "Public function destroy . <br>";
    }
}
$obj = new demo1();

// 18) final keyword
// final class subject{
//                     //to prevent class inheritence
// }
// class english extends subject{

// }

class subj{
    final public function intro(){
                //to prevent method overriding
        echo "Inside class subject <br>";
    } 
}
class math extends subj{
    public function int(){
        echo "Inside class maths <br>";
    }
}

// 16) single inheritance
class teacher{
    public $name;
    public $subject;
    public function __construct($name, $subject){
        $this->name = $name;
        $this->subject = $subject;
    }
    public function intro(){
        echo "$this->name teaches $this->subject <br>";
    }
}
class computer extends teacher{
    public function quick(){
        echo "Am I a subject or a book <br>";
    }
}
$computer = new computer("Mamta mam", "maths");
$computer->quick();
$computer->intro();

trait message1 {
    public function msg1() {
      echo "OOP is fun! ";
    }
}
  
trait message2 {
    public function msg2() {
      echo "OOP reduces code duplication!";
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
$obj2->msg2();


// 17) multiplw inheritence(by interface)
// interface Shape{            //M.I. is done by using trait or interface
//     public function getArea();
// }
// interface Color{
//     public function getColor();
// }
// class Square implements Shape , Color{
//     private $side;
//     private $color;
//     public function __construct($side, $color){
//         $this->side = $side;
//         $this->color = $color;
//     }
//     public function getArea(){
//         return $this->side * $this->side;
//     }
//     public function getColor(){
//         return $this->color;
//     }
// }
// $square = new Square(8, "black");
// echo "The area of square is : " . $square->getArea() . "<br>";
// echo "The color of square is : " . $square->getColor() . "<br>";

//multiple inheritance(by trait)
trait Trait1{      
    public function method1(){
        echo "Trait1 method1 <br>";
    }
}
trait Trait2{
    public function method2(){
        echo "Trait2 method2 <br>";
    }
}
class enter{
    use Trait1, Trait2;
}
$obj = new enter();
$obj->method1() . "<br>";
$obj->method2() . "<br>";

// 21) access modifier
class vegetable{
    public $name;
    public $color;
    private $weight;
    protected $cost;
}
$coriander = new vegetable();
$coriander->name = "coriander";
$coriander->color = "green";
echo "The name of the vegetable is " . $coriander->name . " and the color is " . $coriander->color . "<br>";
// $coriander->weight = "300gm . <br>";        error
// $coriander->cost = "40rs.  <br>";           error

//or
class vege{
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
}
  
$mango = new vege();
$mango->set_name('mango'); // OK
//   $mango->set_color('Yellow'); // ERROR
//   $mango->set_weight('300'); // ERROR

// 26) static methods
class myClasses{                //create and use static method and properties
    public static $str = "Hello world";
    public static function hello(){
        echo myClasses::$str;
    }
}
echo myClasses::$str . "<br>";
echo myClasses::hello();
echo "<br>";

function add(){
    static $number = 0;
    $number++;
    return $number;
}
echo add() . "<br>";
echo add() . "<br>";
echo add() . "<br>";

class classname{
    public static function staticMethod(){
        echo "Hello Jayshree Arya <br>";
    }
}
className::staticMethod();              //to access/print the values of static method

class greeting{
    public static function welcome(){
        echo "Namaste London <br>";
    }
}
greeting::welcome();

// class greet{
//     public static function well(){
//         echo "Happy Diwali . <br>";
//     }
//     public function __construct(){        //static or non static   method
//         self::well();                        //can be acces using self keyword and double colon
//     }
// }
// $obj = new greet();
// echo $obj->greet();

//static method can also be called from method in other classes
class world{
    public static function message(){
        echo "World is everything <br>";
    }
}
class universe{
    public function text(){
        world::message();
    }
}
$obj = new universe();
echo $obj->text() . "<br>";

//static methodcall from a child class
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

// 28) static properties
class pi{
    public static $value = "3.14";
}
echo pi::$value . "<br>";       //get static property

// class onion{
//     public static $value = 67;
//     public function staticValue(){     // static and non static property
//         return self::$value;
//     }
// }
// $piii = new pi();
// echo $pi->staticValue() . "<br>";

// static property from a child class
class x{
    public static $value = 45;
}
class y extends x{
    public function yesstatic(){
        return parent::$value;
    }
}
echo x::$value . "<br>";
// $x = new x();
// echo $x->yesstatic();

class testclass{
    static $name = "test";
    public function test(){
        echo self::$name;
    }
}
class subclass extends testclass{
    public function mytest(){
        echo parent::$name;
    }
}
$obj = new subclass();
$obj->mytest() . "<br>";


class wait{
    public static $name = "under";
}
echo wait::$name . "<br>";
// $var = "the table <br>";
// echo $var::$name;

// 31) abstract class
abstract class one{
    abstract public function calcNum();
}

abstract class plant{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string; 
}
class lily extends plant{
    public function intro() : string{
        return "$this->name belongs to Bangaladesh!";
    }
}
class marigold extends plant{
    public function intro() : string{
        return "$this->name belongs to India!";
    }
}
class lotus extends plant{
    public function intro() : string{
        return "$this->name is the national flower of India!";
    }
}
$lily = new lily("LILY");
echo $lily->intro() . "<br>";
$marigold = new marigold("MARIGOLD");
echo $marigold->intro() . "<br>";
$lotus = new lotus("LOTUS");
echo $lotus->intro() . "<br>";
    
//or
abstract class familyClass{
    abstract protected function prefixName($name);
}
class memberClass extends familyClass{
    public function prefixName($name){
        if($name == "Jayshree Arya"){
            $prefix = "Miss";
        }
        elseif($name == "Divyansh Arya"){
            $prefix = "Mr";
        }
        else{
            $prefix = "Mrs";
        }
        return "$prefix . $name";
    }
}
$class = new memberClass;
echo $class->prefixName("Jayshree Arya") . "<br>";
echo $class->prefixName("Divyansh Arya") . "<br>";
echo $class->prefixName("Gayatri Sharma") . "<br>";

abstract class basic{
    abstract function printdata();
}
class derived extends basic{
    function printdata(){
        echo "Data is printed <br>";
    }
}
$base1 = new derived;
$base1->printdata();

// 34) interface
interface subject{
    public function subTeacher();
}
class maths implements subject{
    public function subTeacher(){
        echo "Dolly mam teaches Maths <br>";
    }
}
class english implements subject{
    public function subTeacher(){
        echo "Malti mam taeches English <br>";
    }
}
class science implements subject{
    public function subTeacher(){
        echo "Dinesh sir teaches science <br>";
    }
}
$maths = new maths();
$english = new english();
$science = new science();
$sub = array($maths,$english,$science);
foreach ($sub as $subject) {
    $subject->subTeacher();
}

//or
interface earth{
    public function water();
    public function light();
}
class dharti implements earth{
    public function water(){
        echo "Earth is the only planet where life exist <br>";
    }
    public function light(){
        echo "water and light exist on earth <br>";
    }
}
$obj = new dharti();
$obj->water();
$obj->light();

// 36) traits
trait myluck{
    public function mess1(){
        echo "I am giving my test <br>";
    }
}
class warning{
    use myluck;
}
$obj = new warning();
$obj->mess1();

trait tower{
    public function run(){
        echo "PHP is a scripting language <br>";
    }
}
class purple{
    use tower;
}
$obj = new purple();
$obj->run();

trait good{               //multiple trait
    public function bad(){
        echo "live in happy environment \n";
    }
}
trait better{
    public function okay(){
        echo "stay away from bad people <br>";
    }
}
class loader{
    use good, better;
}
$obj = new loader();
$obj->bad();
$obj->okay();

trait myTrait{
    public function sayhello(){
        parent::sayhello();
        echo "Hello to all <br>";
    }
}
class sayTrait{             //trait override 
    public function sayhello(){
        echo "Hiee to all <br>";
    }
}
class galaxy extends sayTrait{
    use myTrait;
}
$obj = new galaxy();
$obj->sayhello();

//
?>
