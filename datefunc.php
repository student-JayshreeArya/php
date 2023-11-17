<?php
//function of date and time

//date
echo "Today is " . date("d") . "<br>";
echo "Today is " . date("j") . "<br>";
echo "Today is " . date("jS") . "<br>";
echo "Month is " . date("F") . "<br>";
echo "Month is " . date("m") . "<br>";
echo "Month is " . date("n") . "<br>";
echo "Month is " . date("M") . "<br>";
echo "Year is " . date("Y") . "<br>";
echo "Year is " . date("y") . "<br>";

echo "Full Date is " . date("d/m/Y") . "<br>";
echo "Full Date is " . date("Y-m-d") . "<br>";
echo "Full Date is " . date("Y-M-d") . "<br>";

echo "Week Day is " . date("D") . "<br>";
echo "Week Day is " . date("l") . "<br>";
echo "Week Day is " . date("N") . "<br>";
echo "Week Day is " . date("w") . "<br>";
echo "Day of the year is " . date("z") . "<br>";
echo "Week of the year " . date("W") . "<br>";
echo "Day of the month " . date("t") . "<br>";
echo "Is this is Leap year " . date("L") . "<br>";

//time
echo "Hour is " . date("h") . "<br>";
echo "Hour is " . date("H") . "<br>";
echo "Hour is " . date("g") . "<br>";
echo "Hour is " . date("G") . "<br>";

echo "Minutes is " . date("i") . "<br>";

echo "Seconds is " . date("s") . "<br>";

echo "Meridiem is " . date("A") . "<br>";
echo "Meridiem is " . date("a") . "<br>";

echo "Time is " . date("h:i:sa") . "<br>";
echo "Date and Time is " . date("d- m-Y h:i:sA") . "<br>";

date_default_timezone_set("Asia/Kolkata");
echo "Time is " . date("h:i:sa") . "<br>";

date_default_timezone_set("Europe/San_Marino");
echo "Time is " . date("h:i:sa e") . "<br>";

//mktime and gmmktime

echo "Time & Date : " . date("d-m-Y h:i:sA") . "<br><br>";
// echo date("d-m-Y", mktime(0,0,0,08,05,2001));

// echo date("d-m-Y h:i:sa", gmmktime(0,0,0,08,05,2001));

//date create and date format

$date = date_create("2027-05-15");
echo date_format($date, "l") . "<br>";

$date = date_create("2027-05-15 22:45:00");
echo date_format($date, "d-m-Y H:i:s") . "<br>";

$date = date_create("2027-05-15 22:45:00", timezone_open("Asia/Kolkata"));
echo date_format($date, "d-m-Y H:i:s") . "<br>";

//checkdate and datediff

echo checkdate(9,15,2015) . "<br>";
echo checkdate(2,29,2019) . "<br>";
echo checkdate(2,15,2030) . "<br>";

$date1 = date_create("2013-03-09");
$date2 = date_create("2013-12-12");
$diff = date_diff($date1, $date2,);
echo $diff->days . "Days";

echo $diff->format("%R%a%m");
echo "<pre>";
print_r($diff);
echo "</pre>";

//date add

$date = date_create("2015-03-15");
date_add($date, date_interval_create_from_date_string("30 days"));
echo date_format($date, "d-m-Y") . "<br>";

//date sub

$date = date_create("2015-03-15");
date_sub($date, date_interval_create_from_date_string("45 days"));
echo date_format($date, "d-m-Y") . "<br>";

//date modify

$date = date_create("2015-03-15");
date_modify($date, "30 weeks");
echo date_format($date, "d-m-Y") . "<br>";

$date = date_create("2015-03-15");
date_modify($date, "-30 days");
echo date_format($date, "d-m-Y") . "<br>";

//getdate

echo "<pre>";
print_r(getdate());
echo "</pre><br>";

$date = getdate();       //to print specific keys
echo $date['month'] . "<br>";

$date = getdate();      
echo $date['month'] . "-" . $date['year'] . "<br>";

// $olddate = mktime(0,0,0,08,05,2001);           to set past date also
// $date = getdate($olddate);
// echo $date['month'] . "-" . $date['year'] . "<br>";

//gettimeofday

echo "<pre>";
print_r(gettimeofday());
echo "</pre><br>";

$date = gettimeofday();
echo $date['sec'] . "<br>";

echo gettimeofday(true) . "<br>";

//localtime
echo "<pre>";        //not in readable form
print_r(localtime());
echo "</pre><br>";

echo "<pre>";        //readable form in ass. arr
print_r(localtime(time(),true)); 
echo "</pre><br>";

// $olddate = mktime(0,0,0,08,05,2001);           //to set past date also
// echo "<pre>";        
// print_r(localtime($olddate(),true)); 
// echo "</pre><br>"; 

//date parse

echo "<pre>";
print_r(date_parse("2014-03-14 12:30:25.7"));
echo "</pre>";

$date = date_parse("2014-03-14 12:30:25.7");    //for specific key
echo $date['day'];

echo "<pre>";
print_r(date_parse_from_format("mmddyyyy", "03152006"));
echo "</pre>";

echo "<pre>";
print_r(date_parse_from_format("d.n.Y", "15-06-2007"));
echo "</pre>";

//string to time function

//strtotime
echo(strtotime("now")). "<br>";     //not readable
echo date("d-m-Y", strtotime("now")) . "<br>";
echo date("d-m-Y", strtotime("5 aug 2001")) . "<br>";
echo date("d-m-Y H:m", strtotime("next monday")) . "<br>";
echo date("d-m-Y H:m", strtotime("+10 hours")) . "<br>";
echo date("d-m-Y H:m", strtotime("+1 week")) . "<br>";
echo date("d-m-Y H:m", strtotime("+1 week 3 days 5 hours 6 min")) . "<br>";
echo date("d-m-Y", strtotime("First day of last month")) . "<br>";
echo date("d-m-Y", strtotime("34th week of year 2023")) . "<br><br>";

//strftime
echo strftime("%B %d %Y, %X %Z") . "<br>";
echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";
echo strftime("%d/%m/%Y, %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br><br>";

//gmstrftime
echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";

//date time set
$date = date_create("2015-09-14");
date_time_set($date, 13, 40);
echo date_format($date, "d-m-Y H:i:s") . "<br>";

date_time_set($date, 05, 56, 07);
echo date_format($date, "d-m-Y H:i:s") . "<br>";

//date time set

echo date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get() . "<br>";

$tz = timezone_open("Asia/Kolkata");           //another way
echo timezone_name_get($tz);

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(1));
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(512));
echo "</pre>";

//include and require statement


?> 