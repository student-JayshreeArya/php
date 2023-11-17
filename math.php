<?php
//function of math

//min and max

$value = max(12,90,34,79, 34);
echo $value . "<br>";

$value = min(12,90,34,79, 34);
echo $value . "<br>";

$value = max(array(12,90,34,79, 34));     //with array
echo $value . "<br>";

$value = max(array(78,90,23,56, 10), array(12,90,34,79, 34));     //with multiple array
//echo $value . "<br>";                        //not echo ootherwise sarray to str ka error 
echo "<pre>";
print_r($value);
echo "</pre><br>";

$value = max(true, false);
echo $value . "<br>";

//ceil
echo(ceil(0.67)) . "<br>";
echo(ceil(0.4)) . "<br>";
echo(ceil(5)) . "<br>";
echo(ceil(6.1)) . "<br>";
echo(ceil(-5.6)) . "<br><br>";

//floor
echo(floor(0.67)) . "<br>";
echo(floor(0.4)) . "<br>";
echo(floor(5)) . "<br>";
echo(floor(6.1)) . "<br>";
echo(floor(-5.6)) . "<br><br>";

//round
echo(round(0.67)) . "<br>";
echo(round(0.4)) . "<br>";
echo(round(5)) . "<br>";
echo(round(6.1)) . "<br>";
echo(round(-5.6)) . "<br><br>";

//abs
echo(abs(0.67)) . "<br>";     //gives postive no as results
echo(abs(0.4)) . "<br>";
echo(abs(-5)) . "<br>";
echo(abs(6.1)) . "<br>";
echo(abs(-5.6)) . "<br><br>";

//integer division
echo intdiv(8, 4) . "<br>";
echo intdiv(5, 2) . "<br>";
echo intdiv(-5, -2) . "<br><br>";

//pow
echo(pow(2,4) . "<br>");
echo(pow(-2,4) . "<br>");
echo(pow(-2,-4) . "<br><br>");

//square root
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9) . "<br>");
echo(sqrt(0.64) . "<br>");
echo(sqrt(-9)) . "<br><br>";

//random function

//rand
echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(0,10)) . "<br>";
echo(rand(10,100)) . "<br><br>";

//mt rand
echo(mt_rand() . "<br>");
echo(mt_rand() . "<br>");
echo(mt_rand(10,100)) . "<br>";
echo(mt_rand(0,20)) . "<br><br>";

//lcg value
echo(lcg_value() . "<br>");
echo(lcg_value() . "<br><br>");

//acos
echo(acos(0.64) . "<br>");
echo(acos(-0.4) . "<br>");
echo(acos(0) . "<br>");
echo(acos(-1) . "<br>");
echo(acos(1) . "<br><br>");

//acosh
echo(acosh(7) . "<br>");
echo(acosh(56) . "<br>");
echo(acosh(2.45)) . "<br><br>";

//asin
echo(asin(0.64) . "<br>");
echo(asin(-0.4) . "<br>");
echo(asin(0) . "<br>");
echo(asin(-1) . "<br>");
echo(asin(1) . "<br><br>");

//baseconvert
$hex = "E196";        //hex to oct
echo base_convert($hex,16,8) . "<br>";

$oct = "0031";          //oct to oct
echo base_convert($oct,8,10) . "<br>";

$oct = "364";       //oct to hex
echo base_convert($oct,8,16) . "<br><br>";

//bindec
echo bindec("0011") . "<br>";
echo bindec("01") . "<br>";
echo bindec("11000110011") . "<br>";
echo bindec("111") . "<br><br>";

//decbin
echo decbin("3") . "<br>";
echo decbin("1") . "<br>";
echo decbin("1587") . "<br>";
echo decbin("7") . "<br><br>";

//dechex
echo dechex("30") . "<br>";
echo dechex("10") . "<br>";
echo dechex("1587") . "<br><br>";

//hexdec
echo hexdec("1e") . "<br>";
echo hexdec("a") . "<br>";
echo hexdec("11ff") . "<br>";
echo hexdec("cceeff") . "<br><br>";

//fmod
echo(fmod(20, 4) . "<br>");
echo(fmod(20, 3) . "<br>");
echo(fmod(15, 6) . "<br>");
echo(fmod(-10, 3) . "<br>");
echo(fmod(0, 0)) . "<br><br>";

//deg2rad
echo deg2rad("45") . "<br>";
echo deg2rad("90") . "<br>";
echo deg2rad("360") . "<br><br>";

//rad2deg
echo rad2deg(pi()) . "<br>";
echo rad2deg(pi()/4) . "<br><br>";

//exp
echo(exp(0) . "<br>");
echo(exp(1) . "<br>");
echo(exp(10) . "<br>");
echo(exp(4.8)) . "<br><br>";

//hypot
echo hypot(3,4) . "<br>";
echo hypot(4,6) . "<br>";
echo hypot(1,3) . "<br>";
echo sqrt(3*3+4*4) . "<br><br>";

//decoct
echo decoct("30") . "<br>";
echo decoct("10") . "<br>";
echo decoct("1587") . "<br>";
echo decoct("70") . "<br><br>";

//octdec
echo octdec("36") . "<br>";
echo octdec("12") . "<br>";
echo octdec("3063") . "<br>";
echo octdec("106") . "<br><br>";

//tan
echo(tan(M_PI_4) . "<br>");
echo(tan(0.50) . "<br>");
echo(tan(-0.50) . "<br>");
echo(tan(5) . "<br>");
echo(tan(10) . "<br><br>");
?>