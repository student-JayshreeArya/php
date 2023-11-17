<?php


//get method
// class abc {
//     private $nm = "jayshree";
//     // public function hello(){
//     //     echo "Hello" . $this->name;
//     // }
//     public function __get(){
//         echo "this is a get method, This is private or non existiong property";
//     }
// }
// $obj = new abc();
// echo $obj->name;
// echo $obj->course;

class ab {
    private functiom $name;
    public function __get($property){
        echo "You are trying to access the non existing and private property($property)";
        echo "<br>";
    }
}
$fest = new ab();
$fest->name;


//get method in forms of array
class c{
    private $data = ["name" =>"yahoo" , "cource" => "python" , "fees" => "6000"];

    public function __get($key){
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }
        else {
            return "this key($key) is not defined";
        }
    }
}
$objt = new c();
echo $objt->name . "<br>";
echo $objt->cource;
echo "<br>";

//set method
class school{
    private $Name;
    public function __get($prop){
        echo "You are trying to access non existing and private property($properties)\n";
    }
    public function __set($prop, $val){
        echo "This is a non existing or private property";
    }
}
$subject = new school();
$subject->Name = "jayshree arya";
//$subject->cource = "php";    non existing property me bhi set method run krega

//example
class student{
    private $n;
    public function hell(){
        echo $this->n;
    }
    public function __get($properties){
        echo "You are trying to access non existing and private property($properties)";
        echo"<br>";
    }
    public function __set($properties, $value){
        if(property_exists($this , $properties)){        // inbuilt func (class = $this, property = $properties)
            $this->$properties = $value;
        }
        else{
            echo "Property does not exist : $properties .<br>";
        }
    }
}
$obt = new student();
$obt->n = "Jayshree Arya";

$obt->hell();
echo "<br>";

//call method
class MyClass{
    public function __call($method, $arguments){
        echo "calling method : $method";
        echo "Arguments : ". implode(', ', $arguments);
        echo "<br>";
    }
}
$object = new MyClass();
$object->myMethod("arg1", "arg2");

//example
class std{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){          // values set krne ke lie
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __call($method, $args){              //method = setname(jo method lia hai, args = "jayshree" "arya")
        //echo "This is private or non existing method: $method";     
        //print_r($args);
        if(method_exists($this, $method)){                 //function = $this, param_arr = $method
            call_user_func_array([$this, $method], $args);    //$this-object   $method- method name   method name jise user call krra hai
        }
        else{
            echo "Method does not exist : $method";
        }
    }
}
$test = new std();
$test->setName("Jayshree", "Arya");
// $test->personal();

echo "<pre>";
print_r($test);
echo "</pre>";


//callstatic method
class children{
    private static function hello($name){
        echo "heyy $name";
        // echo "this is static hello function";
    }
    public static function __callStatic($method, $args){
        //echo "this is private method : $method";
        if(method_exists(__CLASS__,$method)) {              //object = class = children, method_name = $methd
            call_user_func_array([__CLASS__, $method], $args);
        }
        else{
            echo "method does not exist : $method";
        }
    }
}
children::hello("jayshree Arya");
// children::hello();

//isset method
class child{
    public $course;
    private $first_name;
    private $last_name;
    private $details = ['name'=>'Teat name', 'age'=>'50'];     //in case of multi devices array

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __isset($name){             //__isset($property) to be check
        echo isset($this->detail[$name]);      //$this->first_name
    }
}
$test1 = new child();
// $test1->setName("JAYSHREE", "ARYA");

// echo isset($test1->first_name);
echo isset($test1->name); 
echo "<br>";  //to check if the value of particular array which is automatically called by isset methods


//unset method
class under{
    public $cource = "Python";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
}
$above = new under();
echo $above->cource . "<br>";

//example for ararys
class one{
    public $cource = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __unset($property){
        unset($this->$property);
    }
}

$sub = new one();
$sub->setName("JAYA", "ARYA");          //private property ko unset krne ke lie pehle unki value ko set krna hoga

unset($sub->last_name);
echo "<pre>";
print_r($sub);
echo "</pre>";

//tostring method
class two{
    public function __tostring(){
        return "cant print object as a string of class : " . get_class($this);  //to print the name of class jsime present hais
    }
}
$step = new two();
echo $step;
echo "<br>";

//example
class testC {
    public $foo;
    public function __construct($foo){
        $this->foo = $foo;
    }
    public function __tostring(){
        return $this->foo;
    }
}
$class = new testC('Helloo mam');
echo $class;
echo "<br>";


//sleep method
class wow{
    public $cource = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __sleep(){
        return array('first_name', 'last_name');   // agr array m value ni btaege to sare property ko return krega
    }
}
$objects = new wow();
$objects->setName("yahoo", "baba");     //set the values in setname
$srl = serialize($objects);
echo $srl . "<br>";


//wakeup method
class w{
    public $cource = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){         //to set the values of first and last name
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __sleep(){
        return array('first_name', 'last_name');   // agr array m value ni btaege to sare property ko return krega
    }
    public function __wakeup(){
        echo "this is a wakeup method.";
    }
}
$oct = new w();
$oct->setName("yahoo", "baba");
$srl = serialize($oct);
$us = unserialize($srl);
echo "<pre>";
print_r($us);
echo "</pre>";

//clone method
class subject{
    public $name;
    public $cource;

    public function __construct($n){
        $this->name = $n;    //set values of subject name
    }
}
$subject1 = new subject('Yashasvini Sharma ');
$subject2 = clone $subject1;               
$subject2->name = 'krishna tomar';
echo $subject1->name ;
echo $subject2->name;
echo "<br>";


//example
class sub{
    public  $name;
    public $cource;

    public function __construct($n){
        $this->name = $n;
    }
    public function setCource(cource $c){
        $this->cource = $c;
    }
    public function __clone(){        //if we chng the value of cource in sub objects otherwise by reference value same hogi cource ki
        $this->cource = clone $this->cource;
    }
}

class cource{
    public $cname;
    public function __construct($cn){
        $this->cname = $cn;
    }
}

$sub1 = new sub('Yashasvini ');

$cource1 = new cource('PHP');
$sub1->setCource($cource1);

$sub2 = clone $sub1;
$sub2->name = 'krishna tomar';
$sub2->cource->cname = 'Python';
// echo $sub1->name ;
// echo $sub2->name;
echo "<pre>";
print_r($sub1);
print_r($sub2);
echo "</pre>";
echo "<br>";

//invoke method
class calculation{
    public $a, $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }
    // public function sum(){
    //     echo $this->a + $this->b;       invoke use krne ke bd is function ki need ni hai
    // }                             
    public function __invoke(){
        echo $this->a + $this->b;
    }
}
$answer = new calculation(30, 56);
// $answer->sum(); without invol=ke error dega
$answer();
?>=