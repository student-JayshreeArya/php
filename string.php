<?php
echo str_word_count("Hello world!");
echo "<br>";
echo strrev("Hello world!"); 


$str = "This is jaya";
echo $str. "<br>";
$lenn = strlen($str);
echo "The length of the string is ". $lenn . ". Thank you <br>";
echo "The number of words in this string is ". str_word_count($str) .". Thank you <br>";
echo "The reversed string is ". strrev($str) . ". Thank you <br>";
echo "The search for is in the string is ". strpos($str, "jaya") . ". Thank you <br>";
echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";

echo substr("Hello WORLD",8)."<br>";
echo strstr("Hello world","world");

//func of string

//explode and implode
$str = "Hello world. Its a beautiful day";
$array = explode(" ", $str);
echo "<pre>";
print_r($array);
echo "</pre>";

$str = 'red,green,blue,yellow,white';
$array = explode(",", $str);
echo "<pre>";
print_r($array);
echo "</pre>";

$array = array('Hello','world!','its','a','beautiful','day!');
$str = implode(" ", $array);
echo $str . "<br><br>";

$str = implode("<br>", $array);
echo $str . "<br><br>";

$str = join(" ", $array);
echo $str;

//str_split and chunk_split
$str = "Jayshree Arya";
$array = str_split($str, 2);
echo "<pre>";
print_r($array);
echo "</pre> <br>";

$newStr = chunk_split($str, 1, ".." );
echo $newStr;

//uppercase and lowercase
$str = "JAYshree Arya";
$newStr = strtolower($str);
echo $newStr . "<br>";

$newStr = strtoupper($str);
echo $newStr . "<br>";

$newStr = lcfirst($str);
echo $newStr . "<br>";

$newStr = ucfirst($str);
echo $newStr . "<br>";

$newStr = ucwords($str);
echo $newStr . "<br>";

//string length and count func
$str = "JAYshree Arya";
echo strlen($str) . "<br>";

echo str_word_count($str) . "<br>";

//or
$str = "JAYshree Arya is working";
$array = str_word_count($str, 2);
echo "<pre>";
print_r($array);
echo "</pre>";

//sub string counts
$str = "Hello world. The world is beautiful";
echo substr_count($str, "world"). "<br>";

//find position func

//str pos
$str = "Hello world. The world is beautiful";
echo "strpos : " . strpos($str, "world", 0) . "<br>";

//str reverse pos
echo "strrpos : " . strrpos($str, "world", 0) . "<br>";

//stri pos
echo "stripos : " . stripos($str, "World", 0) . "<br>";

//strri reverse pos
echo "strripos : " . strripos($str, "woRLD", 0) . "<br>";

//search functions

//strstr
$str = "Hello world. The world is beautiful";
echo strstr($str, "world") . "<br>";

$str = "Hello world. The world is beautiful";
echo strstr($str, "world", true) . "<br>";

//stristr
$str = "Hello world. The world is beautiful";
echo stristr($str, "worLD") . "<br>";

//strchr
echo strchr($str, "world") . "<br>";

//strrchr
echo strrchr($str, "worLD") . "<br>";

//strpbrk
echo strpbrk($str, "o") . "<br>";

//substr
$str = "HELLO WORLD, The world is beautiful";
echo substr($str, 8, 19) . "<br>";

//string replace function

//string replace
$str = "Hello world, The world is beautiful";
$find = ["Hello", "world"];
$replace = ["Hi", "earth"];
echo str_replace($find, $replace, $str) . "<br>";

$color = ["blue", "red", "yellow", "green"];
echo "<pre>";
print_r(str_replace("red", "pink", $color)) . "</pre>";

//str ireplace
$find = ["Hello", "WORLD"];
$replace = ["Hi", "earth"];
echo str_ireplace($find, $replace, $str) . "<br>";

//substr replace
$str = "Hello world, The world is beautiful";
echo substr_replace($str, "earth", 8) . "<br>";
echo substr_replace($str, "earth", 0, 0) . "<br>";

//strtr
$str = "Hello world, The world is beautiful" . "<br>";
// $array = ["Hello" => "Hi", "world" => "earth"] . "<br>";
// echo strtr($str, $array) . "<br>";

//or
echo strtr($str, "eo", "ia") . "<br>";

//string compare function

// $str = "Hello world, The world is beautiful" . "<br>";

echo strcmp("Hello world", "Hello world"). "<br>";
echo strncmp("Hello world", "hello world", 8). "<br>";
echo strcasecmp("HELLO world", "Hello world"). "<br>";
echo strcasecmp("HELLO world", "Hello world,hello"). "<br>";
echo strncasecmp("HELLO world", "Hello world, Hello", 7). "<br>";
echo strnatcmp("2Hello world", "10Hello WORLD"). "<br>";
echo strnatcmp("2Hello world", "2Hello WORLD"). "<br>";
echo strnatcasecmp("2Hello world", "2Hello WORLD"). "<br>";
echo substr_compare("Hello world", "world", 0, 4). "<br>";
echo substr_compare("Hello world", "d", -2, 4). "<br>";
echo substr_compare("Hello worLD", "world", -2, 2, true). "<br>";
echo similar_text("Hello world, earth", "its my world, Earth"). "<br>";
echo similar_text("Hello world, earth", "its my world, Earth", $per). "<br>";
echo "Percentage :" . $per . "<br>";

//string reverse and string shuffle

echo strrev("Jayshree Arya"). "<br>";
echo str_shuffle("Jayshree Arya"). "<br>";

//string pad and string repeat
$str = "Hello world";
echo str_pad($str, 15, ".") . "<br>";
echo str_pad($str, 20, ":", STR_PAD_BOTH) . "<br>";
echo str_pad($str, 20, "++", STR_PAD_LEFT) . "<br>"; 

echo str_repeat($str, 5) . "<br>";

//string trim function

//trim
$str = "Jayshree Arya";
echo $str . "<br>";
echo trim($str, "a") . "<br>";
echo trim($str, "ya") . "<br>";

$stri = " JAYSHREE ARYA ";
echo $stri . "<br>";
echo trim($stri) . "<br>";

//rtrim
echo rtrim($str, "ya"). "<br>";

//ltrim
echo ltrim($str, "Ja") . "<br>";

//chop
echo chop($str, "rya") . "<br>";

//addslashes and stripslashes

$str = "Hello I am 'Jayshree Arya'";
echo $str . "<br>";
echo addslashes($str) . "<br>";

$str = 'Hello I am "Jayshree Arya"';
echo $str . "<br>";
$newStr = addslashes($str);
echo stripslashes($newStr). "<br>";

//addcslashes and stripcslashes

$str = "Hello I am Jayshree Arya";
echo $str . "<br>";
$newStr = addcslashes($str, "J");
echo $newStr . "<br>";

$newStr = addcslashes($str, "A..Z");
echo $newStr . "<br>";

$newStr = addcslashes($str, "a..j");
echo $newStr . "<br>";

$str = 'Hello \I am Jayshree \Arya';
echo $str . "<br>";
$newStr = addcslashes($str, "a");
echo stripcslashes($str) . "<br>";

//htmlentities and htmlspecialchars

$string = "A 'quote' is <b>bold</b>";
echo $string . "<br><br>";
echo htmlentities($string) . "<br>";

$string = '<a href="https://www.gmail.net">Gmail Website</a>';
echo $string . "<br><br>";
echo htmlentities($string) . "<br>";

$string = '<a href="https://www.gmail.net">Gmail Website</a>';
echo $string . "<br><br>";
echo htmlentities($string, ENT_QUOTES) . "<br>";

$string = "A 'quote' is <b>bold</b>";
echo $string . "<br><br>";
echo htmlentities($string, ENT_QUOTES) . "<br>";

$string = "A 'quote' is <b>bold</b>";
echo $string . "<br><br>";
echo htmlentities($string, ENT_NOQUOTES) . "<br>";

$string =  '<a href="https://www.gmail.net">Gmail Website</a>';
echo $string . "<br><br>";
echo htmlentities($string, ENT_NOQUOTES) . "<br>";

$string =  '<a href="https://www.gmail.net">Gmail Website</a>';
echo $string . "<br><br>";
echo htmlspecialchars($string, ENT_QUOTES) . "<br>";

$string =  '<a href="https://www.gmail.net">Gmail Website</a>';
$htmlenty = html_entity_decode($string, ENT_QUOTES) . "<br>";
echo $htmlenty;
echo html_entity_decode($htmlenty) . "<br>";

$string =  '<a href="https://www.gmail.net">Gmail Website</a>';
$htmlent = htmlspecialchars($string, ENT_QUOTES) . "<br>";
echo $htmlent;
echo htmlspecialchars_decode($htmlent) . "<br>";

//get html translation table

echo "<br>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "<br>";

echo "<br>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "<br>";

//md5 and sha1   

$str = "Hello";
echo "The String : " . $str . "<br><br>";
echo "md5 Binary : " . md5($str, TRUE) . "<br><br>";
echo "md5 Hex : " . md5($str, false) . "<br><br>";
echo "sha1 Binary : " . sha1($str, true) . "<br><br>";
echo "sha1 Hex : " . sha1($str) . "<br><br>";

//using if condtion
$str = "Hello";  //hello ki jgah kisi or char ko likhke dusre ka binary num dalege to match ni krega
if (md5($str) == "8b1a9953c4611296a827abf8c47804d7") {
    echo "Password Matched . <br>";
}

$str = "Jayshree Arya Jayshree Arya";
echo md5($str) . "<br>";

//convert uuencode and uudecode

$str = "Hello world";
echo convert_uuencode($str) . "<br>";

$string = "Hello world";
$encString = convert_uuencode($string) . "<br>";
echo $encString;
$decString = convert_uudecode($encString) . "<br><br>";
echo $decString;

//bin2hex and hex2bin

echo bin2hex("Hello world" . "<br>");
echo bin2hex("Hello world! Hello earth") . "<br>";

$str = bin2hex("Hello world, Hello earth");
echo $str . "<br>";
echo hex2bin($str) . "<br>";

//chr and ord

$str = chr(65);     //ASCII value
echo $str . "<br>";

$str = chr(97);
echo $str . "<br>";

$str = chr(0120);    //octal value
echo $str . "<br>";

$str = chr(0x48);       //hexa value
echo $str . "<br>";

$str = ord("A");
echo $str . "<br>";

$str = ord("Lemon");
echo $str . "<br>";

//striptags and wordwrap

$str = "Hello <b>world</b>, Hello <i>Jayshree</i>";
echo $str . "<br>";

echo strip_tags($str) . "<br>";
echo strip_tags($str, "<b>") . "<br>";

$str = "This earth is beautiful and precious";
echo wordwrap($str, 4, "<br>") . "<br>";

echo wordwrap($str, 3, "<br>", true);


?>