<?php
//class exist
class MyClass{

}
if(class_exists('MyClass')){
    // echo "This class exists.";
    $obj = new MyClass();
}
else{
    echo "This class does not exists.";
}

//interface exist
interface MyInterface{

}
if(interface_exists('MyInterface')){
    echo "This interface exists.";
    class MyClasses implements MyInterface{

    }
}
else{
    echo "This interface does not exists.";
}

//method exist
class classes{
    public function myMethod(){

    }
}
$obj = new classes();
if(method_exists($obj, 'myMethod')){
    echo "This method exists.";
}
else{
    echo "This method does not exists.";
}

//trait exist
trait MyTrait{
    public function myMethod(){

    }
}
if(trait_exists('MyTrait')){
    // echo "This trait is exist.";
    class MineClass{
        use MyTrait;
    }
}
else{
    echo "Thsi trait is not exist.";
}

//property exist
class subject{
    public $test;
}
if(property_exists('subject', 'test')){
    echo "This property is exist. ";
}
else{
    echo "This property is not exist.";
}

//is_a exist
class subClass{

}
$object = new subClass();
 if(is_a($object, 'subClass')){
    echo "This object of class subClass.";
}
else{
    echo "This object is not of class subClass.";
}

//is_subclass_of exist
class parentClass{
    
}
class childClass extends parentClass{

}
$sub = new childClass();
if(is_subclass_of($sub, 'parentClass')){
    echo "This \$sub is a object of subclass of parentClass.";
}
else{
    echo "This\$sub is not a object of subclass of parentClass.";
}
?>