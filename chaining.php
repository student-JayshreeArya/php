<?php
class abc{
    public function FIRST(){
        echo "This is first function<br>\n";
        return $this;     //$this is used to call the function in the chaining method other wise it will give error
    }
    public function SECOND(){
        echo "This is second function<br>\n";
        return $this;
    }
    public function THIRD(){
        echo "This is third function<br>\n";
    }
}

$test = new abc();
$test->first()->second()->third();
// $test-> FIRST();
// $test-> SECOND();
// $test-> THIRD();

?>