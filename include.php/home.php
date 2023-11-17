<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Layout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id = "wrapper">
        <?php include 'header.php' ?>
        <div id = "content">
            <h2>Sub Heading</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id possimus eligendi deserunt odio qui quaerat sunt accusamus ea fugiat harum doloribus voluptatem cupiditate, fugit, temporibus illum amet omnis laborum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, cum iste? Enim distinctio explicabo, amet aperiam nam quae earum placeat provident facere animi illo voluptates omnis assumenda, atque doloribus expedita?</p>
            <ul id = "list">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
            </ul>
        </div>
        <?php include 'sidebar.php' ?>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>