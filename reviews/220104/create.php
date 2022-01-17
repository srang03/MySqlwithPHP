<?php require("./function.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="./index.php">WEB</a></h1>
    <ul>   
        <?php createList() ?>
    </ul>

    <form action="./create_process.php" method="post">
        <div><input type="text" name="title" placeholder="Title"></div>
        <div><textarea name="description" id="" cols="30" rows="10"></textarea></div>
        <div><input type="submit" value="Save"></div>
    </form>
    <form action="./index.php" method="post">
        <input type="submit" value="back">
    </form>
</body>
</html>