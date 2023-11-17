<?php
// 4) '==' and '===' operators
echo "The value of 6==7 is ";
echo var_dump(6==7) . "<br>";

echo "The value of 9===4 is ";
echo var_dump(9===4) . "<br>";

echo "The value of 8===8 is ";
echo var_dump(8===8) . "<br>";

// 8) declare a variable
$website = "Google baba website";
echo $website . "<br>";

$str = "This location has beautiful mountains";
echo $str . "<br>";

$a = 98;
$b = 56;
$data = $a + $b;
echo $data . "<br>";

// 9) datatypes
$int = "67";
echo $int . "<br>";

$float = "45.07";
echo $float . "<br>";

$str = "Have a good morning";
echo $str . "<br>";

$color = array("blue", "green", "yellow", "orange");
echo "<pre>";
print_r($color);
echo "</pre>";

// 10) concatenation string
$FirstName = "Jayshree";
$LastName = "Arya";
$FullName = $FirstName . $LastName;
echo $FullName . "<br>";

$FirstName = "Rajnikant";     // concatenating assignment
$LastName = "Kushwah";
$FirstName .= $LastName;
echo $FirstName . "<br>";

$FirstName = "Raja sahab is waiting outside the room ";
$LastName = "for his wife to go in a party";
$FullName = $FirstName . $LastName;
echo $FullName . "<br>";

// 11) differebt types of loop
$a =1;
while ($a <= 10) {
    echo "The number is : $a <br>";
    $a++ ;
}
echo "<br>";;

$b = 14;
while ($b <= 20) {
    echo "The number is : $b <br>";
    $b++;
}
echo "<br>";

$c = 5;
do {
    echo "The number is : $c <br>";
    $c++;
}
while ($c <= 10);
echo "<br>";

$d = 34;
do {
    echo "The value of d is $d <br>";
    $d++;
} 
while ($d <= 45);
echo "<br>";

$e = 21;
do {
    echo "The number is : $e <br>";
    $e--;
} while ($e >= 10);
echo "<br>";


for ($i=0; $i <=6 ; $i++) { 
    echo "The number is : $i <br>";
}
echo "<br>";
 
for ($v=7; $v >= 0 ; $v--) { 
    echo "The number is : $v <br>";
}
echo "<br>";

$color = array("red", "green", "blue", "yellow");
foreach ($color as $value) {
    echo "$value <br>";
}

$name = array("a" => "Peter", "b" => "Garima", "c" => "Roshni");
foreach ($name as $key => $val) {
    echo "$key is the key of $val <br>";
}

$N = array("1" => "Shomil", "2" => "Kvaita");
foreach ($N as $key => $v) {
    echo "$key represents : $v <br>";
}

$age = array("Jayshree" => "22", "Deeksha" => "22", "Gaurvi" => "21");
foreach ($age as $key => $Value) {
    echo "$Value is the age of $key <br>";
}

// 12) conditional statements
$t = 45;
if ($t >= 45) {
    echo "Have a good day <br>";
}

$age = 56;
if ($age >= 18) {
    echo "Person can vote";
}
else {
    echo "Person can not vote";
}
echo "<br>";

$age = 18;
if ($age >= 4 && $age <= 10) {
    echo "Admission in primary school is possible";
}
elseif ($age >= 11 && $age <= 15) {
    echo "Admission in secondary school is possible";
}
elseif ($age >=16 && $age <= 19) {
    echo "Admission in higher school is possible";
}
else {
    echo "Admission is not possible";
}
echo "<br>";

// 12) switch statements
$months = 7;
switch ($months) {
    case '1':
        echo "This is first month January";
        break;
    case '2':
        echo "This is second month February";
        break;
    case '3':
        echo "This is third month March";
        break;
    case '4':
        echo "This is forth month April";
        break;
    case '5':
        echo "This is Fifth moonth May";
        break;    
    case '6':
        echo "This is sixth month June";
        break;    
    case '7':
        echo "This is seventh month July";
        break;    
    case '8':
        echo "This is eighth month August";
        break;    
    case '9':
        echo "This is nineth month September";
        break;
    case '10':
        echo "This is tenth month October";
        break;    
    case '11':
        echo "This is eleventh month November";
        break;
    case '12':
        echo "This is twelth month December";
        break;
    default:
        echo "Please enter vv                 v bv  a valid month";
}
echo "<br>";

// 18) array
$cars = ["Volvo", "Mercedes", "Scorpio", "Maruti"];
echo "<pre>";
print_r($cars);
echo "</pre>";

$color = array("red", "blue", "orange");
echo "I love color " . $color[0] . " and " . $color[2] . "." . "<br>";

// 20) indexed and associative array
$flower = array("jasmine", "lotus", "lily", "marigold", "rose");
echo "I like " . $flower[1] . ", " . $flower[2] . " and " . $flower[4] . "<br>";

echo "<pre>";
print_r($flower);
echo "</pre>";

$flower = array("rose" => "red", "lily" => "white", "sunflower" => "yellow", "orchid" => "purple");
echo "The color of rose is " . $flower['rose'] . "<br>";
echo "The color of lily is " . $flower['lily'] . "<br>";
echo "The color of sunflower is " . $flower['sunflower'] . "<br>";
echo "The color of orchid is " . $flower['orchid'] . "<br>";

$flower = array("rose" => "red", "lily" => "white", "sunflower" => "yellow", "orchid" => "purple");
echo "<pre>";
print_r($flower);
echo "</pre>";

$flower = array("rose" => "red", "lily" => "white", "sunflower" => "yellow", "orchid" => "purple");
foreach ($flower as $key => $value) {
    echo "The color of " . $key . " is " . $value . "<br>";
}
echo "<br>";

foreach ($flower as $key => $value) {
    echo $value . " is the color of " . $key . "<br>";
}
echo "<br>";

$arr = array(
    "Java" => "Spring Boot",
    "Python" => "Django",
    "PHP" => "CodeIgnitor"
);
print('Array : ');
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

// 21) multidimensional array
$marks = array(
    "Anchal" => array(
        "Physics" => 87,
        "Chemistry" => 78,
        "Maths" => 90
    ),
    "Roshni" => array(
        "Physics" => 56,
        "Chemistry" => 98,
        "Maths" => 56
    ),
    "Yash" => array(
        "Physics" => 37,
        "Chemistry" => 98,
        "Maths" => 78
    )
);
echo "Display Marks of students Class 10th : \n";
echo "<pre>";
print_r($marks);
echo "</pre>";

$cars = array(
    "Volvo" => array(
        "Stock" => 33,
        "Sold" => 28
    ),
    "Scorpio" => array(
        "Stock" => 33,
        "Sold" => 45
    ),
    "BMW" => array(
        "Stock" => 17,
        "Sold" => 15
    )
);
echo "List of sold cars in year 2023 : ";
echo "<pre>";
print_r($cars);
echo "</pre>";

//or
$cars = array(
    array("BMW", 23, 18, 5),
    array("Scorpio", 15, 13, 2),
    array("Mercedes", 22, 19, 2),
    array("Volvo", 15, 12, 3),
    array("Land Rover", 17, 14, 4)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].", cleaning: ".$cars[0][3].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].", cleaning: ".$cars[1][3].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].", cleaning: ".$cars[2][3].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].", cleaning: ".$cars[3][3].".<br>";
echo $cars[4][0].": In stock: ".$cars[4][1].", sold: ".$cars[4][2].", cleaning: ".$cars[4][3].".<br>";

//or
for ($row=0; $row < 5 ; $row++) { 
    echo "<p><b>Row Number $row</b></p>";
    echo "<ul>";
    for ($col=0; $col < 4 ; $col++) { 
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}

//or
$marks = [
    "Krishna" => [
        "Physics" => 86,
        "Maths" => 78,
        "Chemistry" => 93
    ], 
    "Jayshree" => [
        "Physics" => 88,
        "Maths" => 37,
        "Chemistry" => 67
    ], 
    "Ashutosh" => [
        "Physics" => 45,
        "Maths" => 78,
        "Chemistry" => 24
    ], 
    "Samiksha" => [
        "Physics" => 34,
        "Maths" => 90,
        "Chemistry" => 67
    ] 
];
echo "<table border='2px', cellpadding='5px', cellspacing='0'>
<tr>
<th>Student Name</th>
<th>Physics</th>
<th>Maths</th>
<th>Chemistry</th>
</tr>";
foreach ($marks as $key => $value) {
    echo $key . "<br>";
    echo "<tr>
    <td>$key</td>";
    foreach ($value as $val){
        echo "<td>$val</td> ";
    }
    echo "</tr>";     
}
echo "</table>";

echo "<pre>";
print_r($marks);
echo "</pre>";

//or
$employee = [
    [
    "Id" => 1,
    "Name" => "Sohan",
    "Salary" => 40000,
    "Designation"=> "Manager"
],
[
    "Id" => 2,
    "Name" => "Kartik",
    "Salary" => 30000,
    "Designation"=> "Secretary"
],
[
    "Id" => 3,
    "Name" => "Monika",
    "Salary" => 35000,
    "Designation"=> "Teacher"
]
];
echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Salary</th>
<th>Designation</th>
</tr>";
foreach ($employee as list("Id" => $id, "Name" => $name, "Salary" => $salary, "Designation" => $designation)) {
    echo "<tr><td>$id</td> <td>$name</td> <td>$salary</td> <td>$designation</td></tr>";
}
echo "</table>";

// 21) functions
function message(){
    echo "jayshree arya <br>";
}
message();

function family($name){                   //passing function by arguments
    echo "$name is my family member <br>";
}
family("Kavita");
family("Laxman");

function member($name, $age){
    echo "$name is $age years old <br>";
}
member("Lata","33");
member("Reena", "45");

function number($a, $b){
    return $a + $b;
}
echo number(5,9) . "<br>";
echo number(6,"7 days") . "<br>";

// declare(strict_types = 1);
// function num($x, $y){
//     $z = $x * $y;
//     return $z;
// }
// echo num(4,"8 days"). "<br>";    //error will occur

function height($h = 90){        //default argument
    echo "The height is $h <br>";
}
echo height(67);
echo height();
echo height(54);

function sum($x,$y){       //returning values
    $z = $x + $y;
    return $z;
}
echo "6 + 4 = " . sum(6, 4) . "<br>";

function addNum($p, $q){        //return type declaratiom
    return $p + $q;
}
echo addNum(6,9) . "<br>";
echo addNum(6.8,4.9) . "<br>";

function add($values){    //passing by reference
    $values += 5;
}
$num = 3;
add($num);
echo $num . "<br>";

function testing(&$string){
    $string .= " and something extra";

}
$str = "This is a string";
testing($str);
echo $str;
echo "<br>";

//ex
function first($num){
    $num += 4;
}
function second(&$num){
    $num += 7;
}
$number = 10;
first($number);
echo "Original Value is $number<br>";

second($number);
echo "Original Value is $number<br>";

// 24) varible scope
//local variables

function test(){
    $x = 10;
    echo "Variable X inside function : $x . <br>";
}
test();
 
//or 
function mytest(){
    $lang = "PHP";
    echo "Web development language :" . $lang . "<br>";
}
mytest();

//global variable 
$x = 10;
function mytester(){
    global $x;
    echo "Variable X inside function : $x . <br>";
}
mytester();
echo "Variable X outside function : $x . <br>";

//or
$name = "Roshni Sharma";
function hint(){
    global $name;
    echo "Variable inside the function : " . $name . "<br>";
}
hint();
echo "Variable outside the function : " . $name . "<br>";

//static variable
function static_var(){
    static $num1 = 3;      //static variable
    $num2 = 5;             // non static 
    $num1++;
    $num2++;
    echo "Static : " . $num1 . "<br>";
    echo "Non Static : " . $num2 . "<br>";
}
static_var();     //first func call
static_var();     //second func call

// 25) passing arguments
function takes_array($input){
    echo "$input[0] + $input[1] = ";
    $input[0] + $input[1];
}       // will not list

function makecoffee($type){
    return "Making a cup of $type . \n";
}
echo makecoffee("cappuccino") . "<br>";
echo makecoffee("espresso") . "<Br>";
echo makecoffee(null) . "<br>";

//using objects as default values
class defaultCoffeemaker{
    public function bru(){
        return "Making coffee. ";
    }
}
class fancyCoffeemaker{
    public function bru(){
        return "Crafting a beautiful coffee. ";
    }
}
function coffeemaker($coffeeMaker = new defaultCoffeemaker){
    return $coffeeMaker->bru();
}
echo coffeemaker();
echo coffeemaker(new fancyCoffeemaker) . "<br>";

//correct usage of default arguments
function makeyogurt($flavour, $container){
    return "Making a $container of $flavour yogurt. \n";
}
echo makeyogurt("raspberry", "bowl") . "<br>";

// 26) length of string
$str = "What a beautiful morning and a loving weather today";
echo strlen($str) . "<br>";

// 27) position of string
$str = "Hello world. The world is beautiful";
echo "strpos : " . strpos($str, "world", 0) . "<br>";

$str = "Today is my birthday and I am throwing a bithday party to all my friends";
echo strpos($str, "birthday", 0) . "<br>";

// 28) replace string
$str = "Today is my birthday and I am throwing a birthday party to all my friends";
$find = ["birthday", "friends"];
$replace = ["anniversary", "family and friends"];
echo str_replace($find, $replace, $str) . "<br>";

$str = "Today is my birthday and I am throwing a birthday party to all my friends";
$find = ["BIRTHDAY", "And"];
$replace = ["anniversary", "also"];
echo str_ireplace($find, $replace, $str) . "<br>";

$str = "Hello world, The world is beautiful";
echo substr_replace($str, "earth", 8) . "<br>";
echo substr_replace($str, "earth", 0, 0) . "<br>";

$str = "Today is my birthday and I am throwing a birthday party to all my friends";
echo substr_replace($str, "anniversary",10, 0) . "<br>";

// 29) uppercase and lowercase
$str =  "Today is my birthday and I am throwing a bithday party to all my friends";
$newStr = strtolower($str);
echo $newStr . "<br>";

$newStr = strtoupper($str);
echo $newStr . "<br>";

$newStr = lcfirst($str);
echo $newStr . "<br>";

$newStr = ucfirst($str);
echo $newStr . "<br>";

$newStr = ucwords($str);
echo $newStr . "<br>";

// 32) define a class
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

//or 
class car {
    public $name;
    public $color;
    public $city;

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

// 35) object of class
class Fruits {
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
$apple = new Fruits();
$banana = new Fruits();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";

class subject{
    public $science;
    public $maths;
    public $hindi;

    function set_name($science){
        $this->science = $science;
    }
    function get_name(){
        return $this->science;
    }
}
$tenth = new subject();
$twelth = new subject();
$tenth->set_name('45');
echo $tenth->get_name() . "<br>";
$twelth->set_name('Neetu Mam');
echo $twelth->get_name() . "<br>";

//or
class book{
    public $title;
    public $author;
    public $published;
    public $pages;
}
$copy = new book();
$copy->title = "Harry Potter";
$copy->author = "JK Rowling";
$copy->published = 1999;
$copy->pages = 400;

echo $copy->title . "<br>";
echo $copy->author . "<br>";
echo $copy->published . "<br>";
echo $copy->pages . "<br>";

//properties and methods
// class calculation{
//     public $a, $b, $c;      //property
//     $this->a = $a;
//     $this->b = $b;
// } 
// function sum(){               //method
//     $this->$c = $this->$a + $this->$b;
//     return $this->$c;
// }
// $c1 = new calculation();
// sum();

// 41) session
session_start();
$_SESSION["favcolor"] = "orange";
echo "Session Variable is set. ";

// 43) cookie
$cookie_name = "user";
$cookie_value = "yahoo baba";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                          // 86400 = seconds in 24hrs * 30 days     "/" = in any page we can access cookie 
                          // "/aboust us" = we can acces cookie onli in about us page 
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set";
        }
        else{
        echo $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>