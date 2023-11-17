<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
    //arithmetic operators
    $variable1 = 50;
    $variable2 = 25;

    echo "the value of variable1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "the value of variable1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "the value of variable1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "the value of variable1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";

    //assignment operators
    $newVar = $variable1;
    //$newVar +=1;
   // $newVar -=1;
    //$newVar *=1;
    $newVar /=1;
    echo "the value of new variable is ";
    echo $newVar;
    echo "<br>";

    //comparison operators(used in if-else)
    //echo "<h1>Comparison operators</h1>"
    echo "the value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1==4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1==4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    //Increment/Decremnt operators
    // echo $variable2++;
    // echo "<br>";
    // echo $variable2
    echo $variable2--;
    echo "<br>";
    echo $variable2;
    echo "<br>";
    // echo --$variable2;
    // echo "<br>";
    // echo $variable2;
    // echo ++$variable2++;
    // echo "<br>";
    // echo $variable2;

    //Logical operators
    $myVariable = $variable2;
    $myVariable = (true or true);
    echo "<br>";

    echo var_dump($myVariable);

    $myVar = (true xor true);
    echo "<br>";

    echo var_dump($myVar);
    echo "<br>";

    $age = 26;
    if($age >= 18 && $age <= 30){
        echo "you are eligible <br>";
    }

    $age = 26;
    if(!($age >= 18)){
        echo "you are eligible <br>";
    }
   
    //constant
    define('pi3' , 3.14);
    echo pi3;
    echo "<br>";


    //string operators
    $text1="Hello ";  //concatenation
    $text2="World";
    echo $text1 . $text2;
    echo "<br>";

    $text1="Jaya ";  //concatenation assignment
    $text2="Arya";
    $text1.=$text2;
    echo $text1;
    echo "<br>";

    $a = 500;
    $s = $a . "world" . 40;
    echo $s;

    $b = "Hello";
    $b .= "this is";
    $b .= "our world";
    echo $b;

    //array operators
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    
    print_r($x + $y); // union of $x and $y
    echo "<br>";

    //comparison of arrays
    $arr1=array(0=>68, 2=>79, 1=>48);
    $arr2=array(68,48,79);
    var_dump($arr1==$arr2);  //equality of $x anD $y
    echo "<br>";
    var_dump($arr1!=$arr2);  //inequality of $x and $y
    echo "<br>";
    var_dump($arr1===$arr2);   //identity operators
    echo "<br>";
    $arr3=[68,79,48];
    var_dump($arr3===$arr1);

    //ternary operators
    $a = 10;
    ($a > 20)? $z = "Greater" : $z = "Smaller";
    echo $z;


    

    ?>
</body>
</html>