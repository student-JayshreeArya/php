<?php
    //functions of array

    //count func
    $food = array('orange', 'banana', 'grapes', 'apple');
    echo count($food);
    echo "<br>";

    //sizeof func
    $foods = array('lichi', 'strawberry', 'mango');
    echo sizeof($foods);
    echo "<br>";

    //or
    $len = count($foods);
    for ($i=0; $i < $len; $i++) { 
        echo $foods[$i] . "<br>";
        
    }

    $foodss = array(
        'fruits' => array('orange', 'mango', 'apple'),
        'vegetables' => array('pumpkin', 'lemon', 'onion', 'tomato')
    );
    echo count($foodss,1) . "<br>";        // sec parameter 1 ki madad se sare array count hoskte hai
    //mostly used with multidimensional array

    //in array              mostly used in if condtion
    $foood = array('appie', 'berry', 'nuts', 'papaya');      
    echo in_array('appie', $foood). "<br>";

    $foood = array('appie', 'berry', 'nuts', 'papaya');      
    if(in_array('lime', $foood)){
        echo "Find Successfully";
    }
    else{
        echo "Cant Find . <br";
    }

    $ab = array(array('p', 'h'), array('p', 'l'), 'o');
    if(in_array(array('p', 'h'), $ab, true)){
        echo "Find Successfully.";
    }
    else{
        echo "Cant Find . <br>";
    }

    //array search

    // $f = array('orange', 'mango', 'papaya', 'honey', 89);

    //or
    $f = array('a' => 'orange', 'b' => 'lemon', 'c' => 'pepsi');
    echo array_search('orange', $f) . "<br>";

    //replace array
    $fr = ['orange', 'banana', 'apple', 'papaya'];
    $veg = ['carrot', 'pea'];
    $newArray = array_replace($fr, $veg);

    echo "<pre>";
    print_r($newArray);
    echo "</pre> <br>";

    //ex
    $fr = ['orange', 'banana', 'apple', 'papaya'];
    $veg = ['carrot', 'pea'];
    $col = ['red', 'green', 'yellow'];
    $newArray = array_replace($fr, $veg, $col);

    echo "<pre>";
    print_r($newArray);
    echo "</pre> <br>";

    //replace recursive array
    $array1 = array("a" => array("red"), "b" => array("green", "blue"));
    $array2 = array("a" => array("yellow"), "b" => array("bllack"));

    $newArray1 = array_replace_recursive($array1, $array2);

    echo "<pre>";
    print_r($newArray1);
    echo "</pre> <br>";

    //pop array
    $flower = array("rose", "lily", "lotus", "sunflower");
    array_pop($flower);

    echo "<pre>";
    print_r($flower);
    echo "</pre> <br>";

    //array push
    $flowers = array("rose", "lily", "lotus", "sunflower");
    array_push($flowers, "marigold", "hibiscus");

    echo "<pre>";
    print_r($flowers);
    echo "</pre> <br>";

    //array shift
    $fls = ["lotus", "lily", "rose"];
    array_shift($fls);

    echo "<pre>";
    print_r($fls);
    echo "</pre> <br>";
   
    //array unshift
    $fls1 = ["lotus", "lily", "rose"];
    array_unshift($fls1, "marigold", "sunflower", "jasmine");

    echo "<pre>";
    print_r($fls1);
    echo "</pre> <br>";

    //combine array
    $fname = array("Peter","JayShree","Joe");                   //index array
    $age = array("46","57","56");

    $c = array_combine($fname, $age); //(keys,values)
    echo "<pre>";
    print_r($c);
    echo "</pre> 
    <br>";

    //array merge
    $a = ["carrot", "onion", "brinjal", "capsicum"];
    $b = ["papaya", "guava", "mango"];                 //index array
    $c = ["red", "blue"];

    $newArr = array_merge($a, $b, $c);
    echo "<pre>";
    print_r($newArr);
    echo "</pre> <br>";

    //ex
    $a1 = ["a" => "carrot", "b" => "onion", "e" => "brinjal", 89];
    $a2 = ["carrot", "onion", "brinjal", "capsicum", 56];
    $a3 = ["e" => "red", "f" => "black"];                       //associative array

    $newArr1 = array_merge($a1, $a2, $a3);
    echo "<pre>";
    print_r($newArr1);
    echo "</pre> <br>";

    //array merge recursive                          multidimentional array
    $b1 = ['a' => "cactus", 'b' => "beer", 'c' => "lemmon", 'd' => "cake"];
    $b2 = ['c' => ['car' => ['mercedes', 'scorpio', 'verna']], "water", 'd' => "sugar", 'e' => "shake"];
    $newArr2 = array_merge_recursive($b1, $b2);
    echo "<pre>";
    print_r($newArr2);
    echo "</pre> <br>";

    //array slice
    $carColor = ["red", "blue", "green", "brown", "black"];
    $newArray2 = array_slice($carColor, 3, 3, true);
    echo "<pre>";
    print_r($newArray2);
    echo "</pre> <br>";

    $ba = ['a' => "cactus", 'b' => "beer", '78' => "lemmon", 'd' => "cake"];
    $newArray3 = array_slice($ba, 2, 4, true);
    $newArray2 = array_slice($carColor, 3, 3, true);
    echo "<pre>";
    print_r($newArray3);
    echo "</pre> <br>";

    //array splice
    $col = ["red", "blue", "pink", " yellow", "green", "purple"];
    array_splice($col, 2,2);
    echo "<pre>";
    print_r($col);
    echo "</pre> <br>";

    //or 
    $fhal = ["papaya", "guava", "mango"];
    $sabzi = ["carrot", "onion", "brinjal", "capsicum"];
    array_splice($fhal, 1, 3, $sabzi);
    //or  array_splice($fhal, 2, count($fhal), $sabzi);
    echo "<pre>";
    print_r($fhal);
    echo "</pre> <br>";

    //array values            
    $animals = array("a" => "lion", "b" => "monkey", "c" => "tiger", "d" => "dog");
    $result = array_values($animals);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    //array unique              //index key a,b,c return hoga or duplicate print ni hogi
    $animal = array("a" => "lion", "b" => "monkey", "c" => "tiger", "d" => "lion");
    $result = array_unique($animal);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    //column array
    $a = array(
        array(
            'id' => 23907,
            'first_name' => 'Jaya',
            'last_name' => 'Arya',
        ),
        array(
            'id' => 64892,
            'first_name' => 'Vedu',
            'last_name' => 'Jain',
        ),
        array(
            'id' => 23643,
            'first_name' => 'Geeta',
            'last_name' => 'Rani',
        )
    );

    $last_names = array_column($a, 'last_name');    //print single field value
    echo "<pre>";
    print_r($last_names);
    echo "</pre>";
    echo "<br>";

    //array chunk
    $cars = ["Volvo", "BMW", "Toyota", "Mercedes", "Honda"];
    $newA = array_chunk($cars, 3);
    
    echo "<pre>";
    print_r($newA);
    echo "</pre> <br>";

    //example
    $age = array("Mohan" => "89", "Aman" => "54", "Priya" => "34", "Salman" => "56");

    $newArr = array_chunk($age, 2, true);
    echo "<pre>";
    print_r($newArr);
    echo "</pre> <br>";

    //flip array
    $a1 = array("A" => "RED", "B" => "BLUE", "C" => "GREEN");

    $result = array_flip($a1);
    echo "<pre>";
    print_r($result);
    echo "</pre> <br>";

    //array change key case
    $aB = array("A" => "RED", "B" => "BLUE", "C" => "GREEN", "D" => "YELLOW"); 

    $result = array_change_key_case($aB, CASE_LOWER);
    echo "<pre>";
    print_r($result);
    echo "</pre> <br>";

    //array sum and product
    $S = array(7, 89, 56, 3, 9);
    echo "Sum = " . array_sum($S) . "<br>";

    //ex ass. array
    $sum = array("a" => "4.7", "b" => "78", "c" => "5");
    echo "Sum = " . array_sum($sum) . "<br>";
    
    echo "Product = " . array_product($sum);

    //array rand
    $color = array("red", "blue", "green", "yellow", "pink");

    $newArray = array_rand($color, 4);       //4 is random number of value we want 
    echo "<pre>";
    print_r($newArray);
    echo "</pre> <br>";

    // echo $color[$newArray];        //to show the value of the index

    //array shuffle
    $colors = array("red", "blue", "green", "yellow", "pink");
    shuffle($colors);
    echo "<pre>";
    print_r($colors);
    echo "</pre> <br>";


    //count values array                ek array me same values kitni br aati hai count krta hai
    $a = array("A","Cat","Dog","B");

    echo "<pre>";
    print_r(array_count_values($a));
    echo "</pre> . <br>";
    
    //array fill
    $a1 = array_fill(5,8,"blue"); //(index, number, value)

    echo "<pre>";
    print_r($a1);
    echo "</pre>";
    echo "<br>";

    //array fill keys
    $variety = array("a", "b", "c", "d", "e");
    $newArray = array_fill_keys($variety, "test");         //(array, key
    
    echo "<pre>";
    print_r($newArray);
    echo "</pre> <br>";

    //filter array
    function test_odd($var) {
        return($var & 1);
    }
    $a1=array(1,2,8,7,4,5);
    echo "<pre>";
    print_r(array_filter($a1,"test_odd"));
    echo "</pre> <br>";

    //array walk
    $fruits = array("a" => "Lemon", "b" => "Orange", "c" => "Banana", "d" => "Apple");
    array_walk($fruits, "myFunction", "is a key of");

    function myFunction($value, $key, $param){
        echo "$key $param $value <br> <br>";
    }

    //array walk recursive
    $vege = array("1" => "carrot", "2" => "tomatoes");

    $fruit = array(
        $vege, 
        "a" => "Lemon", "b" => "Orange", "c" => "Banana", "d" => "Apple");
    
        array_walk_recursive($fruit, "myFunc", "is a key of ");
        function myFunc($val, $keys, $para){
            echo "$keys $para $val <br>";
        }
        
    //array map
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
    
    //or        returns M. D. array
    function squaress($j, $k){
        return [$j => $k];
    }
    $b = ['lemon', 'orange', 'papaya', 'aplle', 'banana'];
    $newArr = array_map('squaress', $a, $b);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

    //or        returns M. D. A. array using nll as parameter
    $newArr = array_map(null, $a, $b);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

    //example using 2 array
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
 
    //array reduce
    function myFunct($m, $p){
        return $m . "-" . $p;
    }
    $am = ['orange', 'banana', 'apple'];
    $newArray = array_reduce($am, 'myFunct');
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    //list function

$color = array('red', 'green', 'yellow');
list($a, $b, $c) = $color;
echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br> <br>";

$col = array(50, 56, 90, 78);
list($x, $y, $z, $p) = $col;
echo "Value of x : $x <br>";
echo "Value of y : $y <br>";
echo "Value of z : $z <br>";
echo "Value of p : $p <br> <br>";

$c = array(0 => 'blue', 1 => 'orange', 2 => 'pink');
list($a, $b, $c) = $color;
echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br> <br>";

//extract and compact array func

$a = "orange";
$coll = array('a' => 'purple', 'b' => 'green', 'c' => 'white');
extract($coll, EXTR_OVERWRITE);
echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br><br>";

$a = "yellow";
$b = "red";
extract($coll, EXTR_SKIP);
echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br><br>";

extract($coll, EXTR_PREFIX_SAME, "test");
echo "Value of a : $a <br>";
echo "Value of a : $test_a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br><br>";

extract($coll, EXTR_PREFIX_ALL, "testt");
echo "Value of a : $a <br>";
echo "Value of a : $testt_a <br>";
echo "Value of b : $testt_b <br>";
echo "Value of c : $testt_c <br>";

$firstname = "Jayshree";      //compact array function
$lastname = "Arya";
$age = "22";

$gender = "female";
$country = "INDIA";

$extra = ["gender", "country"];
$newArr = compact("firstname", "lastname", "age", $extra);

echo "<pre>";
print_r($newArr);
echo "</pre>";

//range array func
$newArray = range(1,10);
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newA = range('a', 'k');
echo "<pre>";
print_r($newA);          // high to low bhi kr skte hai
echo "</pre>";

//using foreach loop
foreach(range('h', 'a') as $letter){
    echo $letter . "<br>";
}
?>