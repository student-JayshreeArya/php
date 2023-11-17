<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    if(isset($_SESSION["favcolor"])){   //agr koi session set hai to ye msg display hoga
    echo "Favourite Color : " . $_SESSION["favcolor"];
    } //otherwise unset hone pr error aega

    ?>
</body>
</html> 