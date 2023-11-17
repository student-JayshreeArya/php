<?php
class base{
    public $name = "Parent Class";

    public function calc($a, $b){    //calc - method overrriding
        return $a * $b;
    }
}
class derived extends base{
    public $name = "Child Class";  //$name- property overrriding

    public function calc($a, $b){
        return $a + $b;
    }
}
$test = new base();
echo $test->calc(5,78);
?>