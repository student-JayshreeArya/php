<?php
function sum($v){
    echo $v + 5;
    echo "<br>";
}
sum(10);
// sum("hello"); //will show error


function fruits(array $names){
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}
$test = ["Apple", "Banana", "Orange"];
fruits($test);

//example
class hello{
    public function sayhello(){
        echo "Hello Everyone";
    }
}
class bye{
    public function saybye(){
        echo "Bye Eveyone";
    }
}
function wow(hello $c){
    $c->sayhello();
}
$test = new hello();     // object bhi class hello ka hi hona chahiye
wow($test);


//example
class school{
    public function getNames($names){
        echo "<ul>";
        foreach ($names->Names() as $name) {
            echo "<li>" . $name . "</li>" . "<br>";
        }
        echo "</ul>";
    }
}
class student{
    public function Names(){
        return ["Ram", "Sita", "Gopal"];
    }
}
class library{

}
$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);
?>
