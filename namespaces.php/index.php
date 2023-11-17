<?php
require 'namespace.php';
require 'testing.php';

function wow(){
    echo "Wow from index file.<br>";
}

// $obj = new test\product();
$obj = new pro\product();
pro\wow();
// $obj1 = new pro\product();
?>