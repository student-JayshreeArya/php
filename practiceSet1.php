<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border = "1px" width = "400px" cellspacing = "0px" cellpadding = "0px">
   <?php
   //create chess board
for ($row=1; $row <= 8; $row++) { 
    echo "<tr>";
for ($column=1; $column <=8 ; $column++) { 
    $total = $row + $column;
    if($total%2 == 0){
        echo "<td height=35px width=30px bgcolor=#FFFFFF></td>"; 
    }
    else{
        echo "<td height=35px width=30px bgcolor=#000000></td>";
    }
}
echo "</tr>";
}
echo "<br>";

   ?>
   </table>

   <?php
//to count 5 to 15 using loop
$count = 5;
while ($count <=  15) {
    echo $count . "<br>";
$count++;
}
echo "<br>";

//factorial program using loop
$num = 5;
$factorial = 1;
for ($i=$num; $i >= 1 ; $i--) { 
    $factorial = $factorial * 2;
}
echo "The factorial of $num is $factorial<br>";

?>
<!DOCTYPE html>
<head>
    <title>Calculate Electricity Bill</title>
</head>
<?php
//calculate electricity bill
$result_str = $result = '';
if(isset($_POST['unit_submit'])){
    $units = $_POST['units'];
    if(!empty($units)){
        $result = calculate_bill($units);
        $result_str = 'Total aamount of' . $units . ' - ' . $result;
    }
}
//to calculate bill as per unit cost
function calculate_bill($units){
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.10;
    $unit_cost_fourth = 7.50;

    if($units <= 50){
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <=100){
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else{
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
?>
<body>
    <div id = "page-wrap">
        <h1>Php - Calculate Electricity Bill</h1>
        <form action = "" method = "post" id = "quiz-form">
            <input type = "number" name = "units" id = "units" placeholder = "Please enter no. of Units"/>
            <input type="submit" name = "unit-submit" id = "unit-submit" value = "Submit" />
        </form>
    </div>
    <?php
    echo "<br/>" . $result_str;
    ?>
    <div>

    </div>
</body>
<?php

//array avlue
$animals = ["tiger", "lion", "monkey", "deer", "dog"];
$newArray = array_values($animals);
echo "<pre>";
print_r($animals);
echo "</pre>";

//array column
$class = array(
    array(
        'First_name' => 'jayshree',
        'Last_name' => 'arya',
        'Age' => 22,
        'Gender' => 'female',
    ),
    array(
        'First_name' => 'khushi',
        'Last_name' => 'dixit',
        'Age' => 20,
        'Gender' => 'female',
    ),
    array(
        'First_name' => 'arjun',
        'Last_name' => 'pawaiya',
        'Age' => 14,
        'Gender' => 'male',
    )
);
$Age = array_column($class, 'Age');
echo "<pre>";
print_r($Age);
echo "</pre>";

//to calculate area of rectangle
function rect_area($length, $width){
    $area = $length * $width;
    echo "Area of rectangle is $area . <br>" ;
}
rect_area(5,6);

//check eligibility to vote
function check_vote(){
    $age = 34;
    if($age >= 18){
        echo "Person is eligible to vote";
    }else{
        echo "Person is not eligible to vote";
    }
}
check_vote() . "<br>";
?>

<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>

<?php
//simple calculator program
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $result = $first_num + $second_num;
             break;
                case "Subtract":
                    $result = $first_num - $second_num;
                    break;
                        case "Multiply":
                            $result = $first_num * $second_num;
                            break;
                                case "Divide";
                                    $result = $first_num / $second_num;
                                    break; 
                            }
                    }
                    
?>
<body>
    <div id = "page-wrap">
        <h1>Simple Calculator Program using PHP</h1>
        <form action="" method = "post" id = "quiz-form">
        <p>
            <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
        </p>
            <p>
                <input type="number" name= "second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly = "readonly" name= "result" value =" <?php echo $result; ?>" /> <b>Result</b> 
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>
</body>

<?php
//explode
$str = "Happy birthday to the most pretty girl";
$array = explode(" ", $str);
echo "<pre>";
print_r($array);
echo "</pre>";

//implode
$array = array('Happy', 'birthday', 'to', 'the', 'most', 'pretty', 'girl');
$str = implode(" ", $array);
echo $str;

//str split
$str = 'Mr. and Mrs. Aloowalia going to maleysia';
$array = str_split($str, 3);           // character ko todta hai
echo "<pre>";
print_r($array);
echo "</pre>";

//chunk split
$str =  'Mr. and Mrs. Aloowalia going to maleysia';
$newStr = chunk_split($str, 4, "...");
echo $newStr . "<br>";

//string length and count func
$str =  'Mr. and Mrs. Aloowalia are going to maleysia';
echo strlen($str) . "<br>";

echo str_word_count($str) . "<br>";

//or
$str = "JAYshree Arya is working";
$array = str_word_count($str, 2);
echo "<pre>";
print_r($array);
echo "</pre>";

//sub string counts
$str = "Hello world. The world is beautiful and I love thi world";
echo substr_count($str, "world"). "<br>";

//str replace
$str = "Mr. and Mrs. Aloowalia are talking to each other";
$find = ["Mr.", "and", "Mrs."];
$replace = ["Shri", "aur", "Shrimati"];
echo str_replace($find, $replace, $str) . "<br>";

//chop
$str = "Mr. and Mrs. Aloowalia are talking to each other";
echo chop($str, "other");

//htmlentties
$string = '<a href="https://www.gmail.net">Gmail Website</a>';
echo $string . "<br><br>";
echo htmlentities($string) . "<br>";

$string = '<a href="https://www.gmail.net">Gmail Website</a>';
echo $string . "<br><br>";
echo htmlentities($string, ENT_QUOTES) . "<br>";

//html characters
$string =  '<a href="https://www.gmail.net">Gmail Website</a>';
$htmlent = htmlspecialchars($string, ENT_QUOTES) . "<br>";
echo $htmlent;
echo htmlspecialchars_decode($htmlent) . "<br>";

//remove month name using diff key
$delete_item = 'april';
$months= array('jan', 'feb', 'march', 'april', 'may');
$final_months= array_diff($months, array($delete_item));
echo "<pre>";
var_dump($final_months);
echo "</pre>";

//palindrome check
function palindrome($string){
    if (strrev($string) == $string){
        return 1;
    }
    else{
        return 0;
    }
}
$org = "malyalam";
if (palindrome($org)){
    echo "It is a palindrome";
}
else{
    echo "It is not a palindrome";
}
echo "<br>";

function Palin($str){
    $revStr = strrev($str);
    if($revStr == $str) {
        echo $str . " is a Palindrome string <br>";
    }
    else{
        echo $str . " is not a Palindrome string <br>";
    }
}
Palin("radar");
Palin("malyalam");
Palin("rubber");
Palin("lemon");
?>