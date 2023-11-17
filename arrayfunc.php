<?php
//array key functions

// array key
$c = ["kitty", "happy", "reddeish", "monkey"];
$newArray4 = array_keys($c);
echo "<pre>";
print_r($newArray4);                       //not for index array
echo "</pre> <br>";

//or
$cl = [
    "first" => "red",
    "second" => "orange",
    "third" => "pink",
    "fourth" => "black",
    "fifth" => "brown"
];
$newArr3 = array_keys($cl);
// $newArr3 = array_key_last($cl) . "<br>";
// $newArr3 = array_key_first($cl) . "<br>";
// $newArr3 = array_key_exists("third", $cl) . "<br>";

echo "<pre>";
print_r($newArr3);                       
echo "</pre> <br>";

//key exist
$clr = [
    "first" => "red",
    "second" => "orange",
    "third" => "pink",
    "fourth" => "black",
    "fifth" => "brown"
];
$newArrrr = key_exists("second", $clr);

if($newArrrr){
    echo "key exists!";
}
else{
    echo "key does not exist!";
}

//array intersect functions

// array intersect
$i1 = array("a" => "red", "b" => "pink", "c" => "green", "d" => "black");
$i2 = array("a" => "red", "f" => "green", "d" => "purple");
$i3 = array("g" => "red", "h" => "blue", "i" => "yellow");
$newA = array_intersect($i1, $i2, $i3);  

echo "<pre>";
print_r($newA);                       
echo "</pre> <br>";

//array intersect key
$k1 = array("a" => "red", "b" => "pink", "c" => "green", "d" => "black");
$k2 = array("a" => "red", "f" => "green", "d" => "purple");
$k3 = array("a" => "red", "h" => "blue", "d" => "yellow");
$newAA = array_intersect_key($k1, $k2, $k3);  

echo "<pre>";
print_r($newAA);                       
echo "</pre> <br>";

//array intersect assoc
$j1 = array("a" => "red", "b" => "pink", "c" => "green", "d" => "black");
$j2 = array("a" => "red", "c" => "green", "d" => "purple");
$j3 = array("a" => "red", "h" => "blue", "d" => "yellow", "c" => "green");
$newAAA = array_intersect_assoc($j1, $j2, $j3);  

echo "<pre>";
print_r($newAAA);                       
echo "</pre> <br>";

//array   intersect uassoc
function compare($m, $n){
    if($m === $n){
        return 0;
    }
    else{
        return ($m > $n)? 1 : -1;
    }
}
$m1 = array("a" => "red", "b" => "pink", "c" => "blue", "d" => "black");
$m2 = array("a" => "red", "c" => "blue", "d" => "purple");

$newAAAA = array_intersect_uassoc($m1, $m2, "compare");  

//array uintersect
$newAr = array_uintersect($m1, $m2, "compare");

echo "<pre>";
print_r($newAAAA);                       
echo "</pre> <br>";

//array uintersect assoc
function comp($p, $q){
    if($p === $q){
        return 0;
    }
    else{
        return ($p > $q)? 1 : -1;
    }
}
$n1 = array("a" => "red", "b" => "pink", "g" => "blue", "d" => "black");
$n2 = array("a" => "red", "c" => "blue", "m" => "black");

$newAr = array_uintersect_assoc($n1, $n2, "comp");

echo "<pre>";
print_r($newAr);                       
echo "</pre> <br>";

//array intersect ukey
function compareV($j, $k){
    if($j === $k){
        return 0;
    }
    return ($j > $k)? 1 : -1;
}
$v1 = array("a" => "red", "b" => "pink", "g" => "blue", "d" => "black");
$v2 = array("a" => "red", "b" => "blue", "g" => "black");

$newAar = array_intersect_ukey($v1, $v2, "compareV");

echo "<pre>";
print_r($newAar);                       
echo "</pre> <br>";



//array uintersect uassoc
function water($r, $s){       //this func match key
    if($r === $s){
        return 0;
    }
    return($r > $s)? 1 : -1;
}
function light($r, $s){       //this func match value
    if($r === $s){
        return 0;
    }
    return($r > $s)? 1 : -1;
}
$l1 = array("a" => "blood", "b" => "pink", "g" => "blue", "d" => "black");
$l2 = array("a" => "blood", "g" => "blue", "m" => "black");

$newArrays = array_uintersect_uassoc($l1, $l2, "water", "light");

echo "<pre>";
print_r($newArrays);                       
echo "</pre> <br>";



//array diff functions

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

//array values
$animals = array("a" => "lion", "b" => "monkey", "c" => "tiger", "d" => "dog");
$result = array_values($animals);
echo "<pre>";
print_r($result);
echo "</pre>";

//array sorting functions

//sort and rsort
$food = array('orange', 'grapes', 'apple', 'lemon');

sort($food);       // asc. order  for indexed arr   
echo "<pre>";
print_r($food);
echo "</pre>";

rsort($food);       //desc order   
echo "<pre>";
print_r($food);
echo "</pre>";

//asort and arsort
$f = array(
    "d" => "lemon",
    "b" => "watermelon",
    "f" => "turtle",
    "a" => "mango"
);

asort($f);      //asc. order for ass. arr
echo "<pre>";
print_r($f);
echo "</pre>";

arsort($f);       // desc. order
echo "<pre>";
print_r($f);
echo "</pre>";

//ksort and krsort
$foods = array(
    "l" => "mango",
    "j" => "papaya",
    "a" => "onion", 
    "p" => "carrot"
);

ksort($foods);
echo "<pre>";
print_r($foods);
echo "</pre>";

krsort($foods);
echo "<pre>";
print_r($foods);
echo "</pre>";

//natsort and natcaesort
$array1 = array("img12.png", "img1.png", "img10.png", "img2.png");
natsort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";

$array0 = array("img1.png", "Img10.png", "img2.png", "Img20.png", "Img1.png");
natcasesort($array0);
echo "<pre>";
print_r($array0);
echo "</pre>";

//multisort
$fun = array('orange', 'banana', 'watermelon', 'apple');
$funny = array('lemon', 'onion', 'potato', 'carrot');

array_multisort($fun, $funny);
echo "<pre>";
print_r($fun);
echo "</pre>";

echo "<pre>";
print_r($funny);
echo "</pre>";

//reverse array
$go = array('people', 'leave', 'eagle', 'queen');
$newarray = array_reverse($go); 
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array traversing functions
$car = array('mercedes', 'BMW', 'scorpio', 'lamborghini');
echo "<br>Current : " . current($car);
echo "<br>Key : " . Key($car) . "<br>";
echo next($car);
echo "<br>Current : " . current($car);
echo "<br>" . pos($car);
echo "<br>" . end($car);
echo "<br>" . prev($car);
echo "<br>Key : " . Key($car) . "<br>";
echo "<br>" . end($car);

reset($car);

echo "<pre>";
print_r(each($car));
echo "</pre>";
    ?>