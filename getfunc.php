<?php
//get class
class MyClass{
    function name(){
        echo "Class Name : " . get_class($this) . "\n" ."<br>";    //also inside the class
    }
}
$object = new MyClass();
$object->name();
echo "Class Name is : " . get_class($object) . "<br>";     //can find like this (outside the class)

//get parent class
class abc{

}
class xyz extends abc{
    function name(){
        echo "Parent Class Name : " . get_parent_class($this) . "\n". "<br>";
    }
}
$obj = new xyz();
$obj->name();
echo "Parent Class Name is : " . get_parent_class($obj) . "<br>";
echo "<br>";

//get class method
class abcd{
    function __construct(){
        // print_r(get_class_methods($this));       //done by this also for both public and private func
    }
    function myfunc1(){

    }
    function myfunc2(){

    }
}
// $OBJ = new abcd();
$class_method = get_class_methods('abcd') . "<br>";     // array will return due to multiple func
print_r($class_method);

foreach ($class_method as $method) {      //can also be done by foreach loop
    echo $method . "\n" . "<br>";
    echo "<br>";
    echo "<br>";       
}

//get class vars
class school{
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    function __construct(){
        $this->var1 = "wow";
        $this->var2 = "yahoo";
        print_r(get_class_vars(__CLASS__));
        echo "<br>";
    }
}
$student = new school();
$class_vars = get_class_vars(get_class($student));
print_r($class_vars);
echo "<br>";
echo "<br>";

//get object vars
class qrs{
    public $var1;
    public $var2 = "happy";
    public $var3 = 100;
    private $var4;

    function __construct(){
        $this->var1 = "hello";
        $this->var2 = "yahoo";
        print_r(get_object_vars($this));      //called inside the class private func bhi return hoga 
        echo "<br>";
    }
}
$pqr = new qrs();
$class_vars = get_object_vars($pqr);         //called outside the class private func will not return
print_r($class_vars);
echo "<br>";
echo "<br>";

//get called class
class paper{
    static public function test(){
        var_dump(get_called_class());
    }
}
class exam extends paper{

}
paper::test();
exam::test();
echo "<br>";
echo "<br>";


//get declared class
class mnc{

}
class gate extends mnc{

}
print_r(get_declared_classes());
echo "<br>";
echo "<br>";

       
//get declared interface class
interface domain{

}
class helo{

}
class hye extends helo{

}
print_r(get_declared_interfaces());
echo "<br>";
echo "<br>";


//get declared trait class
trait tester{

}
trait tester2{

}
class bcd{

}
class efg extends bcd{

}
print_r(get_declared_traits());
echo "<br>";
echo "<br>";

//get class alias
class education{
    public $test;
}
class_alias("education", "mc");

$a = new education();
$b = new mc();

$b->test1 = "hello";
echo $b->test1;
?>