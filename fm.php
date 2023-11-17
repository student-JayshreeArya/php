<?php
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['password'];

    // echo $a;
    // echo "<br>";
    // echo $b;
    // echo "<br>";
    // echo $c;
    // echo "<br>";

    if($a == "jaya") {
        echo "Welcome admin";
    }
    else {
        echo "Welcome user";
    }

    ?>