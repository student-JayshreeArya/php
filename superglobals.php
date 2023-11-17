<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">  
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php

//$REQUEST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } 
    else {
        echo $name;
        echo "<br>";
        echo "<br>";
    }
}

//$POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } 
    else {
        echo $name;
    }
}

//$GET
// echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
// echo "<br>";

// echo 'HELLO' . htmlspecialchars($_GET["name"]) . '!';


?>
<?php
//$GLOBAL
$a=67;
$b=76;
function addition() {
    $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
}
addition();
echo $z;
echo "<br>";

function test() {
    $foo = "local variables";
    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";  //eample content
    echo '$foo in current scope: '. $foo . "\n";  //local variable
}
$foo = "Example content";
test();
echo "<br>";

//$SERVER
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTPS'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";

?>


</body>
</html>



