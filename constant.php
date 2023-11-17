<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
    class Goodbye {
        const LEAVING_MESSAGE = "Thankyou for learning PHP Tutorial from the w3school!";
    }
    echo Goodbye :: LEAVING_MESSAGE;
    
    echo "<br>";

    class Goodnight {
        const LEAVING_MESSAGE = "Thankyou for watching the tutorial of w3school!";
        public function byebye() {
            echo self :: LEAVING_MESSAGE;
        }
    }

    $Goodnight = new Goodnight();
    $Goodnight->byebye();

    ?>
</body>
</html>