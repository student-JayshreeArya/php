<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php

    $color = array("red", 89, "green", "yellow", 56.7);
    echo $color[0] . "<br>";
    echo $color[1] . "<br>";
    echo $color[3] . "<br>";

    //or
    $colors = ["red", "green", 78, "blue"];
    echo "<pre>";
    print_r($colors) . "<br>";
    echo "</pre>";

    //or
    $col[0] = "red";
    $col[1] = "orange";
    $col[2] = "pink";
    $col[3] = "green";

    echo "<pre>";
    print_r($col) . "<br>";
    echo "</pre>";

    //using for loop
    $cols = ["red", "purple", 67, "black"];
    echo "<ul>";
    for ($i=0; $i <  4 ; $i++) { 
        echo "<li> $cols[$i] </li>";
    }
    echo "</ul>";


    //indexed array
    $cars = array("Volvo" , "Scorpio" , "Mercedes");
    echo "I like" . $cars[0] . "," . $cars[1] . "," . $cars[2] . ".";
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota","Land Rover");
    echo count($cars);
    echo "<br>";
    //ex1
    $arr = array(1, 2, 3, 4, 5);
    echo ('Array : ');
    print_r($arr);

    //loop through an indexed array
    $flowers = array("Rose", "Lily", "Jasmine");
    $arrlength = count($flowers);

    for ($i=0; $i < $arrlength; $i++) { 
        echo $flowers[$i];
        echo "<br>";
    }

    //associative array
    $age = array("Jaya"=>"22", "Jayshree"=>"25", "Harsh"=>"23");
    echo "Jaya is" . $age['Jaya'] . "years old";
    echo "<br>";
    //ex
    $arr = array(
        "Java" => "Spring Boot",
        "Python" => "Django",
        "PHP" => "CodeIgnitor"
    );
    print('Array : ');
    print_r($arr);
    echo "<br>";

    //loop through an assosiative array
    $age = array("Vedu"=>"17", "Janvi"=>"35", "Vidhi"=>"25");

    foreach($age as $x => $x_value) {
        echo "key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        echo "<br>";
    }

    //multidirectional array
    $emp = [
        [1, "Krishna", "Manager", 50000],
        [2, "Hariram", "Salesman", 60000],
        [3, "Shreya", "Computer Operator", 40000],
        [4, "Priya", "Driver", 20000]
    ];

    echo $emp[0][0] . " ";
    echo $emp[0][1] . " ";
    echo $emp[0][2] . " ";
    echo $emp[0][3] . " ";
    echo "<br>";

    echo $emp[1][0] . " ";
    echo $emp[1][1] . " ";
    echo $emp[1][2] . " ";
    echo $emp[1][3] . " ";

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

    //or to ease/short the code use for loop
    // $emp = [
    //     [1, "Krishna", "Manager", 50000],     index array
    //     [2, "Hariram", "Salesman", 60000],
    //     [3, "Shreya", "Computer Operator", 40000],
    //     [4, "Priya", "Driver", 20000]
    // ];


    for ($row=0; $row < 4; $row++) { 
        for ($col=0; $col < 4; $col++) { 
            echo $emp[$row][$col] . " ";
        }
        echo "<br>";
        echo "<br>";
    }
    //or by foreach also
    echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
    <th>Emp Id.</th>
    <th>Emp Name</th>
    <th>Designation</th>
    <th>salary</th>
    </tr>";
    foreach ($emp as $v1) {
        echo "<tr>";
        foreach ($v1 as $v2) {
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";

    //foreach loop with list() in multidumeantional array

    $emp = [
        [                      //associative array form
            "id" => 1,
            "name" => "krishna",
            "designation" => "Manager",
            "salary" => 7000,
        ], 
        [
            "id" => 2,
            "name" => "Mayuri",
            "designation" => "Service Person",
            "salary" => 7000,
        ], 
        [
            "id" => 3,
            "name" => "Kavita",
            "designation" => "Teacher",
            "salary" => 7999,
        ], 
        [
            "id" => 4,
            "name" => "Prerna",
            "designation" => "Driver",
            "salary" => 5000
        ] 
    ];
    echo "<table border='2px', cellpadding='5px', cellspacing='0'>";
    echo "<tr>
    <th>Id.</th>
    <th>Name</th>
    <th>Designation</th>
    <th>salary</th>
    </tr>";
    foreach ($emp as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)) {
        echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
        echo "<br>";
    }
    echo "</table>";


    // $cars = array("Volvo", "BMW", "Toyota","Land Rover");
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

    //loop through a multidirectional array
    for ($row=0; $row < 4; $row++) { 
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col=0; $col < 3; $col++) { 
            echo "<li>" .$cars[$row][$col] ."</li>";
        }
        echo "</ul>";
    }

    //ex
    $languages = array();

    $languages['Python'] = array(
        "first_release" => "1991",
        "latest_release" => "3.8.0",
        "designed_by" => "Guido van Rossum",
        "description" => array(
            "extention" => ".py",
            "typing_discipline" => "duck, dynamic, gradual",
            "license" => "Python Software Foundation License"
            )
        );
        echo "<br>";
        $languages['PHP'] = array(
            "first_release" => "1995",
            "latest_release" => "7.8.11",
            "designed_by" => "Rasmus Lerdorf",
            "description" => array(
                "extention" => ".php",
                "typing_discipline" => "dynamic, weak",
                "license" => "PHP License (most of Zend engine under Zend Engine License)"
                )
            );
            echo "<pre>";
            print_r($languages);
            echo "</pre>";
            echo "<br>";
            echo "<br>";

            //as a key
            print_r($languages['Python'] ['description']);
            echo $languages['Python'] ['latest_release'];
            echo "<br>";
            echo "<br>";

            //as a foreach loop
            foreach ($languages as $key => $value) {
                echo $key . "\n";
                foreach ($value as $sub_key => $sub_value) {
                    if(is_array ($sub_value)) {
                        echo $sub_key . " : \n";
                        foreach ($sub_value as $k => $v) {
                            echo "\t" . $k . " = " . $v . "\n";
                            echo "<br>";
                        }
                    }
                    else {
                        echo $sub_key . " = " . $sub_value . "\n";
                        echo "<br>";
                        
                
                }
            }
        }

        
        //ex
        $marks = [
            "Krishna" => [
                "Physics" => 86,
                "Maths" => 78,
                "Chemistry" => 93
            ], 
            "Jayshree" => [
                "Physics" => 88,
                "Maths" => 37,
                "Chemistry" => 67
            ], 
            "Ashutosh" => [
                "Physics" => 45,
                "Maths" => 78,
                "Chemistry" => 24
            ], 
            "Samiksha" => [
                "Physics" => 34,
                "Maths" => 90,
                "Chemistry" => 67
            ] 
        ];
        echo "<table border='2px', cellpadding='5px', cellspacing='0'>
        <tr>
        <th>Student Name</th>
        <th>Physics</th>
        <th>Maths</th>
        <th>Chemistry</th>
        </tr>";

        foreach ($marks as $key => $value) {
            echo $key . "<br>";
            echo "<tr>
            <td>$key</td>";
            foreach ($value as $val){
                echo "<td>$val</td> ";
            }
            echo "</tr>";     
        }
        echo "</table>";

        echo "<pre>";
        print_r($marks);
        echo "</pre>";




    //sorting array
    //sorting in ascending order
    // $fruits = array("Mango", "Orange", "Grapes");
    // sort($fruits);

    // $numbers = array(4, 6, 2, 22, 11);
    // sort($numbers);

    // $cars = array("Volvo", "BMW", "Toyota");
    // rsort($cars);
    ?>
</body>
</html>