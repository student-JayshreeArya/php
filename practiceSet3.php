<?php
// 1) indexed array
$flower = array("rose", "jasmine", "sunflower", "lotus", "orchid");
echo "<pre>";
print_r($flower);
echo "</pre>";

$car = array("Volvo", "BMW", "Scorpio", "Mercedes", "Lamborghini");
echo "<pre>";
print_r($car);
echo "</pre>";

// 2) access third eleent in array
$flower = array("rose", "jasmine", "sunflower", "lotus", "orchid");
echo $flower[2];

echo "<pre>";
print_r($flower[3]);   //like this also
echo "</pre>";

$vege = ["lemon", "brinjal", "potato", "capsicum", "coriander"];
echo $vege[2] . "<br>";

// 3) sum of all elements
$array = [45, 23, 67, 59, 87];
echo array_sum($array) . "<br>";

$S = array(7, 89, 56, 3, 9);
echo "Sum = " . array_sum($S) . "<br>";

// 4) array push and pop
$flower = array("rose", "lily", "lotus", "sunflower");
array_pop($flower);
echo "<pre>";
print_r($flower);
echo "</pre> <br>";

$flowers = array("rose", "lily", "lotus", "sunflower");
array_push($flowers, "marigold", "hibiscus");
echo "<pre>";
print_r($flowers);
echo "</pre>";   

// 5) find largest element in an array
function get_max_value($my_array){
    $n = count($my_array);
    $max_val = $my_array[0];
    for ($i=0; $i < $n; $i++) { 
        if($max_val < $my_array[$i])
        $max_val = $my_array[$i];
    return $max_val;
    }
}
$my_array = array(67, 45, 87, 34, 79);
print_r("The highest value of the array is ");
echo (get_max_value($my_array)) . "<br>";

// 6) merge array
$a1 = array('red', 'blue', 'green');
$a2 = array('orange', 'yellow', 'purple');
echo "<pre>";
print_r(array_merge($a1, $a2));
echo "</pre>";

$a1 = array("1" => "blue", "2" => "purple", "3" => "green", "4" => "black");
$a2 = array("1" => "yellow", "2" => "white", "5" => "orange", "6" => "red");
$result = array_merge($a1, $a2); 
echo "<pre>";
print_r($result);
echo "</pre>";

$a1 = ["a" => "carrot", "b" => "onion", "e" => "brinjal", 89];
$a2 = ["carrot", "onion", "brinjal", "capsicum", 56];
$a3 = ["e" => "red", "f" => "black"];                       //associative array
$newArr1 = array_merge($a1, $a2, $a3);
echo "<pre>";
print_r($newArr1);
echo "</pre> <br>";

$fname = array("Peter","JayShree","Joe");                   //index array
$age = array("46","57","56");
$c = array_combine($fname, $age); //(keys,values)
echo "<pre>";
print_r($c);

//array merge recursive                          multidimentional array
$b1 = ['a' => "cactus", 'b' => "beer", 'c' => "lemmon", 'd' => "cake"];
$b2 = ['c' => ['car' => ['mercedes', 'scorpio', 'verna']], "water", 'd' => "sugar", 'e' => "shake"];
$newArr2 = array_merge_recursive($b1, $b2);
echo "<pre>";
print_r($newArr2);
echo "</pre> <br>";

$b1 = ['a' => "blue", 'b' => "green", 'c' => "red", 'd' => "black"];
$b2 = ['a' => "lemon", 'c' => "capsicum", 'd' => "mango"];
$newArray = array_merge_recursive($b1, $b2);
echo "<pre>";
print_r($newArray);
echo "</pre><br>";

$a1 = array(
    "color" => array(
        "favourite" => "red"), 5);
$a2 = array(10, "color" => array(
    "favourite" => "green", "blue"));
$result = array_merge_recursive($a1, $a2);
echo "<pre>";
print_r($result);
echo "</pre><br>";

$a1 = array(
    "vege" => array(
        "color" => array(
            "capsicum" => "green",
            "onion" => "white",
            "coriander" => "green"
        )
    )
);
$a2 = array(
    "fruits" => array(
        "color" => array(
            "mango" => "yellow",
            "papaya" => "orange",
            "apple" => "red",
            "grapes" => "green"
        )
    )
);
$result = array_merge_recursive($a1, $a2);
echo "<pre>";
print_r($result);
echo "</pre><br>";

// 7) remove duplicate values
$a = array("a" => "red", "b" => "blue", "c" => "red", "d" => "orange", "e" => "green", "f" => "blue", "g" => "pink");
echo "<pre>";
print_r(array_unique($a));
echo "</pre>";

$animal = array("a" => "lion", "b" => "monkey", "c" => "tiger", "d" => "lion");
$result = array_unique($animal);
echo "<pre>";
print_r($result);
echo "</pre>"; 

// 8) sorting array in ascending order
$food = array('orange', 'grapes', 'apple', 'lemon');
sort($food);       // asc. order  for indexed arr   
echo "<pre>";
print_r($food);
echo "</pre>";

$num = array(4, 9, 2, 92, 22, 84, 6, 24);
sort($num);
echo "<pre>";
print_r($num);
echo "</pre>";

$num = array(76,90,56,87,34,9,78,22,80);
sort($num);
$array = count($num);
for ($i=0; $i < $array; $i++) { 
    echo $num[$i] . "<br>";
}


$f = array(
    "d" => "lemon",
    "b" => "watermelon",
    "f" => "turtle",
    "a" => "mango"
);
asort($f);      //asc. order for ass. arr(arrange values)
echo "<pre>";
print_r($f);
echo "</pre>";

$name = array(
    "peter" => 76,
    "jasmine" => 44,
    "preeti" => 54,
    "garima" => 13,
    "ritu" => 8
);
asort($name);
echo "<pre>";
print_r($name);
echo "</pre>";

$age = array(
    "ayush" => 54,
    "deepak" => 76,
    "kanika" => 23
);
asort($age);
foreach ($age as $key => $value) {
    echo "$value is the age of $key . <br>";
}

$foods = array(
    "l" => "mango",
    "j" => "papaya",
    "a" => "onion", 
    "p" => "carrot"
);
ksort($foods);           //arrange keys
echo "<pre>";
print_r($foods);
echo "</pre>";

$name = array(
    "peter" => 76,
    "jasmine" => 44,
    "ritu" => 8,
    "preeti" => 54,
    "garima" => 13
);
ksort($name);
echo "<pre>";
print_r($name);
echo "</pre>";

$array1 = array("img12.png", "img1.png", "img10.png", "img2.png");
natsort($array1);                 // arrange alphanumeric values in asc. order
echo "<pre>";
print_r($array1);
echo "</pre>";

$fun = array('orange', 'banana', 'watermelon', 'apple');
$funny = array('lemon', 'onion', 'potato', 'carrot');

array_multisort($fun, $funny);
echo "<pre>";
print_r($fun);
echo "</pre>";

echo "<pre>";
print_r($funny);
echo "</pre>";

// 9) array key exist
$clr = [
    "first" => "red",
    "second" => "orange",
    "third" => "pink",
    "fourth" => "black",
    "fifth" => "brown"
];
$newArray= array_key_exists("second", $clr);

if($newArray){
    echo "key exists!";
}
else{
    echo "key does not exist!";
}
echo "<br>";

//or
$array = array(
    21 => "peter",
    56 => "nancy", 
    89 => array(
        76 => "preeti",
        45 => array(
            82 => "jaya", 
            76 => "rahul"
        )
    )
            );
$newArray= array_key_exists("45", $array);

if($newArray){
    echo "key exists in this array!";
}
else{
    echo "key doesnot exist in this array!";
}
echo "<br>";

//isset
$search_array = array('first' => null, 'second' => 4);
isset($search_array['first']);
array_key_exists('first', $search_array);
  
//or
$array = [];
$array['a'] = '';
$array['b'] = '';
$array['c'] = '';
$array['d'] = '';
$array['e'] = '';                         // all given keys a,b,c exists in the supplied array
var_dump(array_keys_exists(['a','b','c'], $array)); // bool(true)

function array_keys_exists(array $keys, array $array): bool
{
    $diff = array_diff_key(array_flip($keys), $array);
    return count($diff) === 0;
}
echo "<br>";

// 10) array into string

$array = array('Hello','world!','its','a','beautiful','day!');
$str = implode(" ", $array);
echo $str . "<br>";

$str = join(" ", $array);
echo $str . "<br>";

$str = implode(":", $array);
echo $str . "<br>";

// 11) reverse a string
echo strrev("she is working in the office") . "<br>";
echo strrev("Mr. and Mrs. Khana are eating");

// 12) find length of string
$str = "Mr. and Mrs. Khana are eating";
echo strlen($str) . "<br>";

// 13) strpos and stripos
$str = "Hello world. The world is beautiful";
echo "strpos : " . strpos($str, "world", 0) . "<br>";
echo "stripos : " . stripos($str, "WORLD", 0) . "<Br>";

// 14) find a specific word in a string
$str = "This lady is going to achieve something better in her future";
$word = "lady";
if(strpos($str, $word) == true){
    echo "Word Found";
}
else{
    echo "Word not found";
}
echo "<br>";

$str = "Hello Jaya! Today Jaya is going to attend a meeting";
$word = "jaya";
if(strpos($str, $word) == true){
    echo "Word Found";
}
else{
    echo "Word not found";
}
echo "<br>";

// 15) str replace
$str = "Hello Jaya! Today Jaya is going to attend a meeting";
$find = ["Hello", "Jaya"];
$replace = ["Hiee", "Jayshree"];
echo str_replace($find, $replace, $str) . "<br>";

// 16) string to lowercase
$str =  "Today is my Birthday and I am throwing a Bithday Party to all my FRIENDS";
$newStr = strtolower($str);
echo $newStr . "<br>";

$newStr = lcfirst($str);
echo $newStr . "<br>";

// 17) count no of vowels in a string
function count_vowel($string){
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_vowel("Today is my Birthday and I am throwing a Bithday Party to all my FRIENDS"));

// 18) string into array
$str = "Today is my Birthday and I am throwing a Bithday Party to all my FRIENDS";
$newArray = explode(" ", $str);
echo "<pre>";
print_r($newArray);
echo "</pre>";

$str = "Hello world. Its a beautiful day";
$array = explode(" ", $str);
echo "<pre>";
print_r($array);
echo "</pre>";

// 19) trim functions
$str = "Jayshree Arya";
echo $str . "<br>";
echo trim($str, "a") . "<br>";
echo trim($str, "ya") . "<br>";

$stri = " JAYSHREE ARYA ";
echo $stri . "<br>";
echo trim($stri) . "<br>";

//rtrim
echo rtrim($str, "ya"). "<br>";

//ltrim
echo ltrim($str, "Ja") . "<br>";

//chop
echo chop($str, "rya") . "<br>";

// 20) palindrome string
function Palindrome($str){
    $revStr = strrev($str);
    if($revStr == $str) {
        echo $str . " is a Palindrome string <br>";
    }
    else{
        echo $str . " is not a Palindrome string <br>";
    }
}
Palindrome("radar");
Palindrome("malyalam");
Palindrome("rubber");
Palindrome("lemon");

function palindromes($string) {
    $l = 0;
    $r = strlen($string) - 1;
    $flag = 0;
    while ($r > $l) {
        if($string[$l] != $string[$r]) {
            $flag = 1;
            break;
        }
        $l++;
        $r--;
    }
    if($flag == 0) {
        echo $string . " is a Palindrome string . <br>";
    }
    else{
        echo $string . " is not a Palindrome string . <br>";
    }
}
palindromes("radar");
palindromes("malyalam");
palindromes("rubber");
palindromes("lemon");

// 21) factorial of a number
function fact($x){
    if($x == 0 || $x == 1){
        return 1;
    }        //recursive method
    else {
        return $x * fact($x-1);
    }
}
echo "9! = " . fact(9) . "\n";
echo "15! = " . fact(15) . "\n";

// function factorial($x){
//     $f= 1; 
//     for ($i=$x; $i > 0; $i++) {      //iterative method
//         $f= $f * $i;
//     }
//     return $f;
// }
// echo "10! = " . factorial(10) . "\n";
// echo "6! = " . factorial(6) . "\n";

// $num = 7;                 //without function
// $factorials = 1;
// for ($i=$num; $i >= 1; $i++) { 
//     $factorials = $factorials * $i;
// }
// echo "Factorial of $num is $factorials";

// 22) passing arguments
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

// 23) find max of three numbers
function largest($a, $b, $c){
    $max = $a;
    if ($a >= $b && $b >= $c) 
        $max = $a;
        elseif ($b >= $c && $c >= $a) 
            $max = $b;
        else
        $max = $c;
    echo "Largerst number among $a, $b and $c is : $max\n";
}
largest(100,56,627);

$a = 34;
$b = 98;                //without functiom
$c = 65;
if ($a >= $b && $b >= $c) {
        $max = $a;
}
        elseif ($b >= $c && $c >= $a) {
            $max = $b;
        }
        else{
        $max = $z;
    echo "Maximum number is : $max\n";
}

$max = max(65,87,282,9,37,28,20,83);
echo "maximum number is : $max . <br>";

// 25) prime number
// prime number using if/else
$num = 17;
$n = 0;
for ($i= 2; $i < $num; $i++) { 
    if ($num % $i == 0) {
        $n++;
        break;
    }
}
if ($n == 0) {
    echo $num . " is a prime number . <br>";
}
else {
    echo $num . " is not a prime number . <br>";
}

//prime number using function 
function primenumber($num){
    $n = 0;
    for ($i = 2; $i < ($num/2+1); $i++) { 
        if ($num % $i == 0) {
            $n++;
            break;
        }
    }
    if ($n == 0) {
        echo $num . " is a prime number . <br>";
    }
    else {
        echo $num . " is not a prime number . <br>";
    }
}
primenumber(56);
primenumber(19);

// 26) recursive function(for printing number)
// function display($num){
//     if($num <= 5){
//         echo "$num<br>";
//         display($num++);
//     }
// }
// display(1);

// function facto($n){
//     if($n < 0){
//         return -1;
//     }
//     if($n == 0){
//         return 1;
//     }
//     else{
//         return ($n * facto($n-1));
//     }
// }
// echo facto(10);

// 27) default parameter
function greeting($name = "W3 School"){
    echo "Welcome to $name \n";
}
greeting("WS");
greeting();       //passing no value
greeting("A programming learning portal");

function greet($f_name = "Jayshree", $l_name ="Arya"){
    echo "Here representing $f_name $l_name \n";
}
greet("Neeti", "Mohan");
greet();

// 28) fibonacci series
function fibonacci($num){
    if($num == 0)                      //recursive way
    return 0;
elseif($num == 1)
return 1;
else 
return (fibonacci($num - 1) + fibonacci($num - 2));
}
$num = 10;
for ($counter=0; $counter < $num; $counter++) { 
    echo Fibonacci($counter), ' ';
}
echo "<br>";

function Fibo($n){ 
    $num1 = 0;                //iterative way
    $num2 = 1; 
    $counter = 0; 
    while ($counter < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    } 
} 
$n = 18; 
Fibo($n);

// 31) merge array in descending order
$a1 = array(65,98,24,9,5,88,34);
$a2 = array(98,67,44,8,3,20,65);
$num = array_merge($a1,$a2);
array_multisort($num, SORT_DESC, SORT_NUMERIC);
echo "<pre>";
print_r($num);
echo "</pre>";

$a1 = array("write", "read", "play", "afford", "now");
$a2 = array("twin", "create", "lost", "repeat");
$a3 = array("under", "quick", "happy", "mobile", "run");
$array = array_merge($a1,$a2,$a3);
array_multisort($array, SORT_DESC, SORT_STRING);
echo "<pre>";
print_r($array);
echo "</pre>";

// 32) 
$a1 = array("hotel", "read", "play", "afford", "now");
$array = array_map('strlen', $a1);
echo "The longest length of a string is : " . max($array) . "<br>";

$a = array(87, 98, 56, 34, 87, 56);
$array = array_map('strlen', $a);
echo "The shortest length of the string is : " . min($array) . "<br>";

function square($n){
    return $n * $n;
}
$a = array(1, 2, 3, 4, 5);
$newArr = array_map('square', $a);
echo "<pre>";
print_r($newArr);
echo "</pre>";

//or
function squares($n, $m){
    return "$n = $m";
}
$a = array(1, 2, 3, 4, 5);
$b = ['lemon', 'orange', 'papaya', 'aplle', 'banana'];
$newArr = array_map('squares', $a, $b);
echo "<pre>";
print_r($newArr);
echo "</pre>";

function squaress($j, $k){
    return [$j => $k];
}
$b = ['lemon', 'orange', 'papaya', 'aplle', 'banana'];
$newArr = array_map('squaress', $a, $b);
echo "<pre>";
print_r($newArr);
echo "</pre>";

function myFts($v1, $v2){
    if($v1 === $v2){
        return "same";
    }else{
        return "different";
    }
}
$a1 = array("Horse", "Goat", "Deer");
$a2 = array("Horse", "Cow", "Monkey");
echo "<pre>";
print_r(array_map("myFts", $a1, $a2));
echo "</pre>";

// 33) concatenation of strings
$str1 = "Jayshree ";
$str2 = "Arya";
$result = $str1 . $str2;
echo $result . "<br>";

$str1 = "Happy family needs ";
$str2 = "caring parents";
$result = $str1 . $str2;
echo $result . "<br>";

// 34) average of numbers of array
$a = array(76,9,34,5,6);
echo "The average number is : " . array_sum($a)/count($a) . "<br>";

function average($num){
    $sum = 0;
    $count = count($num);
    foreach ($num as $number) {
        $sum += $number;
    }
    return $count > 0 ? $sum/$count : 0;
}
$num = [6,9,45,9,7,60];
$avgNum = average($num);
echo "Number is : " . implode(", ", $num) . "<br>";
echo "Average number is : " . $avgNum . "\n";

// 35) reverse of string
$str = "Today is my Birthday";
echo "Reverse string of $str : " . strrev($str) . "<br>";

// 36) no of words in a sentence
$str = "Today is my Birthday and I am throwing a Bithday Party to all my FRIENDS";
echo "Total no. of words are " . str_word_count($str) . "<br>";

function get_words($str){
    $str = preg_replace('/\s+/', ' ', trim($str));       //remove whitw spaces
    $word = explode(" ", $str);         //convert string into array
    return count($word);                //counts number
}
$str = "Today is my Birthday and I am throwing a Bithday Party to all my FRIENDS";
echo "Total no. of words : " . get_words($str) . "<br>"; 

// 37) find common element between arrays
$i1 = array("a" => "red", "b" => "pink", "c" => "green", "d" => "black");
$i2 = array("a" => "red", "f" => "green", "d" => "purple");         //associative array
$i3 = array("g" => "red", "h" => "blue", "i" => "yellow");
$array = array_intersect($i1, $i2, $i3);  
echo "<pre>";
print_r($array);                       
echo "</pre> <br>";

$a1 = array("red", "blue", "green", "orange");             //index array
$a2 = array("green", "purple", "yellow", "red");
$array = array_intersect($a1, $a2);
echo "<pre>";
print_r($array);                       
echo "</pre>";

$a1 = array(8,9,57,52,98,3);
$a2 = array(87,6,98,57,4,0);
$array = array_intersect($a1, $a2);
echo "<pre>";
print_r($array);                       
echo "</pre>";

// 38) capitaliza each word of a string
$str = "Today is the day of the year";
echo ucwords($str) . "<br>";

// 39) refer 37)

// 40) can refer 17) 
//find vowels and consonants in a string
$vCount = 0;
$cCount = 0;
$str = "This is a simple sentence";
$str = strtolower($str);
for ($i=0; $i < strlen($str); $i++) { 
    if($str[$i] == 'a'|| $str[$i] == 'e'|| $str[$i] == 'i' || $str[$i] == 'e' || $str[$i] == 'u'){
        $vCount++;
    }
    elseif ($str[$i] >= 'a' && $str[$i] <= 'z'){
        $cCount++;
    }
}
echo "Number of vowels : $vCount . <br>";
echo "Number of consonants : $cCount . <br>";

// 41) union of two arrays
$a = array(67,9,0,55,7,56);
$b = array(87,4,98,45,9,33);
function array_union($x, $y){
    $aunion = array_merge(
        array_intersect($x, $y),
        array_diff($x, $y),
        array_merge($y, $x)
    );
    return $aunion;
}
echo "<pre>";
print_r(array_union($a, $b));
echo "</pre>";

$a1 = array(67,99,56,33,83);
$a2 = array(98,45,62,26,76,57);
$array = array_merge($a1,$a2);
array_multisort($array, SORT_DESC, SORT_NUMERIC);
echo "<pre>";
print_r($array);
echo "</pre>";

$a1 = array("apple", "fruit", "kite", "people", "king");
$a2 = array("orange", "tiger", "capsicum", "white", "lemon");
$array = array_multisort($a1,SORT_DESC, SORT_STRING, $a2, SORT_DESC, SORT_STRING);
echo "<pre>";
print_r($a1);
echo "</pre>";
echo "<pre>";
print_r($a2);
echo "</pre>";

$a1 = array("apple", "people", "king");
$a2 = array("orange", "tiger", "capsicum");
$array = array_merge($a1,$a2);
array_multisort($array);
echo "<pre>";
print_r($array);
echo "</pre>";

$a1 = array(
    "lemon" => "yellow",
    "sky" => "blue",
    "heart" => "red",
);
$a2 = array(
    "leaves" => "green",
    "mango" => "orange",
    "pages" => "white" 
);
$array = array_merge_recursive($a1,$a2);
echo "<pre>";
print_r($array);
echo "</pre>";

$record = array(
    array(
        "first_name" => "John",
        "last_name" => "Deol",
        "email" => "john.deol@gmail.com",
    ),
    array(
        "first_name" => "Kavita",
        "last_name" => "Singh",
        "email" => "singh.kavita@gmail.com",
    )
);
$result = array_column($record, "first_name", "email");
array_multisort($result, SORT_ASC, $record);
echo "<pre>";
print_r($result);
echo "</pre>";

$name = array("Pawan","Tanya", "Raju", "Keerti", "Rani");
$age = array("65","98","23","67","14");
$result = array_combine($name, $age);
ksort($result);
echo "<pre>";
print_r($result);
echo "</pre>";

$name = array("Pawan","Tanya", "Raju", "Keerti", "Rani");
$age = array("65","98","23","67","14");
$result = array_combine($name, $age);
natsort($result);
echo "<pre>";
print_r($result);
echo "</pre>";

$fruit = array("avocado", "apple", "papaya", "banana");
$color = array("green", "red", "orange", "yellow");
$result = array_combine($fruit, $color);
echo "<pre>";
print_r($result);
echo "</pre>";

// 42) can refer 7)
$a = array("lion", "tiger", "onion", "plane", "lion", "plane", "toy");
$result = array_unique($a);
echo "<pre>";
print_r($result);
echo "</pre>";

$animal = array("a" => "lion", "h" => "leopard", "b" => "monkey", "c" => "tiger", "d" => "lion");
$result = array_unique($animal);
echo "<pre>";
print_r($result);
echo "</pre>";

$fruit = array("avocado", "apple", "papaya", "lemon","purple,", "yellow");
$color = array("green", "red", "green", "yellow", "papaya", "blue");
$res = array_merge($fruit, $color);
$result = array_unique($res); 
echo "<pre>";
print_r($result);
echo "</pre>";

$animal = array("a" => "lion", "h" => "leopard", "b" => "monkey", "c" => "tiger","k" => "pigeon", "d" => "lion");
$bird = array("a" => "sparrow", "d" => "leopard", "h" => "crow", "c" => "pigeion", "j" => "peacock");
$res = array_merge($animal, $bird);
$result = array_unique($animal);
echo "<pre>";
print_r($result);
echo "</pre>";

// 43) difference between arrays
//array diff
$a1 = array("A" => "RED", "B" => "BLUE", "C" => "GREEN");
$a2 = array("D" => "RED", "E" => "PINK", "F" => "BROWN");
$result = array_diff($a1,$a2);
echo "<pre>";
print_r($result);
echo "</pre> <br>";

//array diff key
$a1 = array("A" => "RED", "B" => "BLUE", "C" => "GREEN", "H" => "PURPLE");
$a2 = array("A" => "YELLOW", "E" => "PINK", "C" => "BROWN");
$result = array_diff_key($a1,$a2);
echo "<pre>";
print_r($result);
echo "</pre> <br>";

//array diff assoc
$a1 = array("P" => "car", "Q" => "rabbit", "R" => "happy", "G" => "water");
$a2 = array("P" => "car", "R" => "lion", "G" => "manner", "Q" => "rabbit");
$result = array_diff_assoc($a1,$a2);
echo "<pre>";
print_r($result);
echo "</pre> <br>";

//array diff uassoc
function compareVal($a, $b){
    if($a === $b){
        return 0;
    } 
    return($a > $b)? 1 : -1;
}
$a1 = array("P" => "one", "Q" => "carrot", "R" => "madam", "K" => "water");
$a2 = array("P" => "one", "R" => "lion", "G" => "madam", "K" => "rabbit");
$result = array_diff_uassoc($a1, $a2, "compareVal");
echo "<pre>";
print_r($result);
echo "</pre> <br>";

//array udiff assoc   ->   same as array diff uassoc

//array diff ukey
function compareValue1($a, $b){
    if($a === $b){
        return 0;
    } 
    return($a > $b)? 1 : -1;
}
$a1 = array("M" => "one", "Q" => "henry", "K" => "madam", "U" => "water");
$a2 = array("O" => "one", "M" => "peter", "J" => "madam", "U" => "rabbit");
$result = array_diff_ukey($a1, $a2, "compareValue1");
echo "<pre>";
print_r($result);
echo "</pre> <br>";

//array udiff
function compareVal2($a, $b){
    if($a === $b){
        return 0;
    } 
    return($a > $b)? 1 : -1;
}
$a1 = array("M" => "one", "Q" => "henry", "K" => "madam", "U" => "water");
$a2 = array("O" => "one", "M" => "peter", "J" => "madam", "U" => "rabbit");
$result = array_udiff($a1, $a2, "compareVal2");
echo "<pre>";
print_r($result);
echo "</pre> <br>";

//array udiff uassoc
function compareVal3($a, $b){        //this func match key
    if($a === $b){
        return 0;
    } 
    return($a > $b)? 1 : -1;
}
function compareVal4($a, $b){            //this func match value
    if($a === $b){
        return 0;
    } 
    return($a > $b)? 1 : -1;
}
$a1 = array("O" => "PARROT", "Q" => "PAINTER", "K" => "PEACOCK", "U" => "MONKEY");
$a2 = array("O" => "QUEEN", "M" => "PAINTER", "J" => "LEMON", "U" => "LIGHT");
$result = array_udiff_uassoc($a1, $a2, "compareVal3", "compareVal4");
echo "<pre>";
print_r($result);
echo "</pre> <br>";

// 44) frequency of element in an array
// $a1 = array("first", "second", "third","fourth","fifth","second","third");
// $new_array = array_count_values($a1);

// while (list ($key, $val) = each ($new_array)) {
// echo "$key -> $val <br>";
// }

$arr = array("Laptop","Keyboard","Mouse","Keyboard","Keyboard", "Mouse","Keyboard");
echo "<pre>";
print_r(array_count_values($arr));
echo "</pre>";

function counting($array){
    return(array_count_values($array));
}
$array = array("Laptop","Keyboard","Mouse","Keyboard","Keyboard", "Mouse","Keyboard");
echo "<pre>";
print_r(counting($array));
echo "</pre>";

$a1 = array("A" => "RED", "B" => "BLUE", "C" => "GREEN", "H" => "PURPLE");
$a2 = array("A" => "YELLOW", "E" => "PINK", "C" => "BROWN");
$result = array_merge($a1,$a2);
echo "<pre>";
print_r(array_count_values($result));
echo "</pre> <br>";

// 45) rotation of array to right 
function rotateLeft($array, $times){
    for ($i=0; $i < $times; $i++) { 
        $array[] = array_shift($array);
    }
    return $array;
}
function rotateRight($array, $times){
    for ($i=0; $i < $times; $i++) { 
        $array[] = array_unshift($array, array_pop($array));
    }
    return $array;
}
$a = ["place", "sun", "loan", "danger"];
$a = rotateRight($a,1);
echo "<pre>";
print_r($a);
echo "</pre>";

//or
function array_pop_unshift($array){
    array_unshift($array, array_pop($array));
    return $array;
}
$a = [1,2,3,4,5];
$new = array_pop_unshift($a);
echo "<pre>";
print_r($new);
echo "</pre>";

// 46) check arrays are equal
$a1 = [1,3,4,6,7];
$a2 = [1,3,4,6,7];
if(array_diff($a1,$a2) == []){
    echo "The arrays are equal";
}
else{
    echo "The array are not equal";
}
echo "<br>";

$a1 = ['peach', 'radar', 'onion', 'seen'];
$a2 = ['gun', 'twin', 'under', 'seen'];
if(array_intersect($a1,$a2) == []){
    echo "The arrays are equal";
}
else{
    echo "The arrays are not equal";
}
echo "<br>";

$a1 = [56,98,67,82,62,59];
$a2 = [67,98,67,78,83,90];
if($a1 == $a2){
    echo "The arrays are equal";
}
else{
    echo "The arrays are not equal";
}
echo "<br>";

$array1 = array(
    array(5, 2),
    array(3, 6),
    array(2, 9, 4)
);
$array2 = array(
    array(3, 6),
    array(2, 9, 4),
    array(5, 2)
);

if($array1 === array_uintersect($array1, $array2, 'compare') && $array2 === array_uintersect($array2, $array1, 'compare')) {
    echo 'Equal';
} else {
    echo 'Not equal';
}

function compare($v1, $v2) {
    if ($v1===$v2) {
        return 0;
    }
    if ($v1 > $v2) return 1;
    return -1;
}
echo "<br>";

// 47) find median of array
function getMedian($a1,$a2,$n){
    $i = 0;
    $j = 0;
    $count ;
    $m1 = -1;
    $m2 = 1;
    for ($count=0; $count <= $n; $count++) { 
        if ($i == $n) {
            $m1 = $m2;
            $m2 = $a2[0];
            break;
        }
        elseif ($j == $n) {
            $m1 = $m2;
            $m2 = $a1[0];
            break;
        }
        if($a1[$i] < $a2[$j]){
            $m1 = $m2;
            $m2 = $a1[0];
            $i++;
        }
        else{
            $m1 = $m2;
            $m2 = $a2[0];
            $j++;
        }
    }
    return ($m1 + $m2)/2;
}
$a1 = [12,45,87,93,37];
$a2 = [67,45,83,67,19];
$n1 = sizeof($a1);
$n2 = sizeof($a2);
if($n1 == $n2){
    echo "Median is " . getMedian($a1,$a2,$n1);
}
else{
    echo "Median is not equal" . "of unequal size";
}
echo "<br>";

//or 
$num = [78,33,19,20,56];
$length = count($num);
$half_length = $length / 2;
$median_index = (int) $half_length;
$median = $num[$median_index];
echo $median . "<br>";
?>