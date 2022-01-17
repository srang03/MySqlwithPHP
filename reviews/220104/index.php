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

    <form action="./create.php" method="post">
        <input type="submit" value="Create">
    </form>
    <?php 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
    ?>
        <form action="./update.php" method="post">
            <input type="hidden" name="id" value="<?= $id?>">
            <input type="submit" value="Update">
        </form> 
        
        <form action="./delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id?>">
            <input type="submit" value="delete">
        </form>
    <?php        
        }
    ?>

    <h3><?php createTitle() ?></h3>
    <p><?php createDescription()?></p>
</body>
</html>