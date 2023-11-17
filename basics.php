<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">This is my first PHP website</div>
    <?php
    echo "Hello world and this is printed using php";
   //single line comment
   /* 
   This 
   is 
   a
   multi
   line
   comment
   */
  $variable1=34;
  $variable2=56;
  echo $variable1;
  echo $variable2;

  echo $variable1 + $variable2;
  
  $str ="Hello Jaya";
  echo $str;
  echo "<br>";
  $float ="10.5";
  echo $float;
  echo "<br>";
  $int ="93";
  echo $int;
  echo "<br>";

  //variables
  $name = "yahoo baba";
  echo $name;

  echo "How are you : " . $name;

  //constant variables
  //syntax   -  define(name,value,case-sensitive)
  //constant variables are global variables(cant use $ with cv)
  
  define("test", 90);
  echo test;
  echo "<br>";

//local variables

// function test(){
//     $x = 10;
//     echo "Variable X inside function : $x . <br>";
// }
// test();
// echo "Variable X outside function : $x . <br>";

//global variables
$x = 10;
function test(){
    global $x;
    echo "Variable X inside function : $x . <br>";
}
test();
echo "Variable X outside function : $x . <br>";

$a = 10;
$b = 5;      // more than one variable bhi le skte hai
function tester(){
    global $a , $b;
    $a = $a + $b;
}
tester();
echo $a . "<br>";
?>



     <?php
    echo "Hello world again";

    ?>
    
    
</body>
</html>