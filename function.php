<?php
function hello(){
    echo "hello everyone<br>";
}

function hye(){
    echo "hye everyone<br>";
}
hello();
hello();
echo "hey this is an example<br>";
hello();
hello();

hye();

//functions with parameters
function functionName($p1, $p2){
    echo "hello $p1 $p2.<br>";
}
function add($a, $b){
    echo $a + $b;
}
functionName("jaya", "arya");
functionName("bill", "gates");
add(10,20.7);
echo "<br>";

//or
//$one = 38;
//$two = 78;
//sum($one, $two);

//functions with returning value
function one($fname = "First", $lname = "Last"){
    $v = "$fname $lname";

    return $v;
}
echo one("Jaya", "Arya");
echo "<br>";
//or
//$name = one("yahi", "ayay");
//echo "hello $name";

//ex
function sum($math, $eng, $sci){
    $s = $math + $eng + $sci;

    return $s;
}
function percentage($st){
    $per = $st / 3;
    echo $per . "%";
}
$total = sum(55,90,83);
percentage($total);
echo "<br>";
//echo $total;

//functions arguments by reference
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

//variable function 
// function  wow(){
//     echo "HELLO";
// }
// $func = "wow";
// $func();

$sayHello = function($name){
    echo "HELLO $name";
};

$sayHello("Jayshree Aryas");
echo "<br>";


//recursive function
function display($number){
    if($number <= 5){
        echo "$number<br>";
        display($number + 1);
    }
}
display(1);

//recursive function using factorial number
function factorial($n){
    if($n == 0){
        return 1;
    }
    else{
        return($n * factorial($n-1));
    }
}
echo factorial(4);
echo "<br>";


 
?>