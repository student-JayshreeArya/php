<?php
//namespace
namespace MyNamespace;
class Classes{
    public function getNamespace(){
        return __NAMESPACE__ ;
    }
}
$obj = new Classes();
echo $obj->getNamespace();
echo "<br>";

//line 
echo "Line Number : " . __LINE__ . "<br>";
echo "Line Number : " . __LINE__ . "<br>";

//file
echo "The full path of this file is : " . __FILE__  . "<br>";

//dir
echo "The full path of this Directory is : " . __DIR__  . "<br>";

//function
function MyFunction(){
echo "The FUNCTION name is : " . __FUNCTION__  . "<br>";
}
MyFunction();

//class
class MyClass{
    public function getClassName(){
        return __CLASS__ ;
    }
}
$object = new MyClass();
echo $object->getClassName();
echo "<br>";

//method
class MineClass{
    public function getClassName(){
        return __METHOD__ ;
    }
}
$objects = new MineClass();
echo $objects->getClassName();
echo "<br>";

//trait
trait MyTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}
class Mclass{
    use MyTrait;
}
$objs = new Mclass();
echo $objs->getTraitName();

?>