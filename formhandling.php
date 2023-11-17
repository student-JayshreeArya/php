<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <?php
    pre_r($_POST);
    //the post form has been submitted
    if (isset($_POST['submit'])) {
        echo "First name:", $_POST['firstname'].'<br>';
        echo "Last name:", $_POST['lastname'].'<br>';
    }
    ?>
    <form action="" method="POST">
        <p>First name: <input type="text" name="firstname" value=""></p>
        <p>Last name: <input type="text" name="lastname" value=""></p>
        <input type="submit" name="submit" value="submit"/>
        
    </form>

    <form action="fm.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name"/>

        <label for="email">Email</label>
        <input type="text" name="email"/>

        <label for="password">Password</label>
        <input type="password" name="password"/>

        <input type="submit"/>
    </form>

</body>
</html>

<?php
function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>