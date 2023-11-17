<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    <h1>Lets learn abut php</h1>
    <p>Your party status is here:</p>
    <?php
    $age = 8;
    if($age>18){echo "You can go to the party";}
    elseif ($age==15) {
    "You are 15 years old";
    }
    elseif ($age==12){echo "You are 12 years old";}
    else{echo "You can not go the party";}
    echo "<br>";
    
    //if statement only
    $x = 15;
    if($x > 78){
        echo "X is greater";
    }
    else {
        echo "X is smaller";
    }

    $a = 50;
    if($a == 5){
        echo "X is same";
    }
    else{
        echo "X is not same";
    }


    $name = "Jayshree Arya";
    $gender = "female";
    if($gender == "male"){
        echo "Hello Mr." . $name;
    }
    else {
        echo "Hello Mrs." . $name;
    }

    // ifelse
    $per = 55;
    if($per >= 80 && $per <= 100){
        echo "You are in merit";
    }
    elseif($per >= 60 && $per <= 80){
        echo "You are in 1st Division";
    }
    elseif($per >= 45 && $per <= 60){
        echo "You are in 2nd Division";
    }
    elseif($per >= 33 && $per <= 45){
        echo "You are in 3rd Division";
    }
    elseif($per <33){
        echo "You are Fail";
    }
    else{
        echo "Please Enter Valid Percentage";
    }

    
    //arrays
    $languages = array("python", "C++", "php", "java", "NodeJs");
    echo count($languages);
   
    ?>
    </div>
</body>
</html>