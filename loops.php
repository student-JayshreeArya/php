<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div>
    <?php
    
    $languages =  array("python", "C++", "php", "java", "NodeJs");

    //while loop
    $a = 0;
    while ($a <=10){
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
        echo "<br>";
    }

    $b = 1;
    while ($b <= 10) {
        echo "Jayshree Arya";
        $b = $b + 1;
        echo "<br>";
    }

    $c = 1;
    while($c <= 5){
        echo $c . ")Hello yahoo baba<br>";
        $c++;
    }


    $v = 1;
    echo "<ul>";
    while($v <= 1){
        echo "<li>". $v . ")Hello yahoo baba<br>";
        $v = $v + 2;
        echo "</ul>";
    }

    //iteratying arrays
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
        echo "<br>;"
    }


    //do while loop
    $a = 0;
    do {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }
        while($a < count($languages));
        echo "<br>";

    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
        while($a < 10);
        echo "<br>";


    //ex
    $n = 1;
    do {
        echo $n . ")Hello yahoo baba";
        $n++;
    }
    while ($n <= 10);
    echo "<br>";

        

     //for loop
     for($num = 5; $num <= 25; $num++){
     echo "<br>The value of a is ";
     echo $num;
     echo "<br>";
     }

    //ex
    for ($i=0; $i <= 30; $i++) { 
        echo "hello arya<br>";
        echo "<br>";
    } 

     //foreach loop
     echo "<br>";
     $colors = array("red", "green", "blue", "yellow");

     foreach ($colors as $value) {
     echo "$value <br>";
     }

     $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
     foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }
    
    foreach ($languages as $value){
        echo "<br>The value is x";
       
    }

    function print5(){
        echo "<br>";
        echo "five";
    }
    print5();

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    print_number(45);
    print_number(36);

    echo "<br>";
    $var = 8;
    if($var % 2 == 0 && $var % 3 == 0){
        echo "Divisible by both";
    }
    elseif ($var % 2 == 0){
        echo "divisible by 2";
    }
    elseif ($var % 3 == 0){
        echo "divisible by 3";
    }
    else {
        echo "not divisible by either 2 or 3";
    }

    //nested loop
    for($a = 1; $a <= 100; $a = $a + 10){
        for($b = $a; $b < $a + 10; $b++){
        echo $b . " ";
    }
    echo "<br>";
}

//continue break statement
for ($number = 1; $number <= 10 ; $number++) {
    if($number == 3){
        echo "No. :" . $number . "<br>";
        continue;
    } 
    echo "Number : " . $number . "<br>";
}

//goto statement

echo "hello jaya<br>";
echo "hello jaya<br>";
echo "hello jaya<br>";
goto abc;
echo "hello jaya<br>";
echo "hello jaya<br>";
echo "hello jaya<br>";
abc:
echo "Hey this is Label ABC";
?>
    </div>
</body>
</html>