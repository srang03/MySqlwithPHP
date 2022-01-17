<?php require_once('./connect.php') ?>
<?php require_once('./createList.php')?>
<?php
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $query = "SELECT * FROM topic where id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
        } else{
            $title = "WELCOME";
            $description = "Thank you";
        }
        
    ?>
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
        <?php $list = createList($conn)?>
        <?= $list ?>
    </ul>
    <form action="./create.php" method="post">
        <input type="submit" value="생성">
    </form>
    <?php
        if(isset($_GET['id']) && !empty($_GET['id'])){
    ?>
        <form action="./update.php" method="post">
            <input type="hidden" name="id" value=<?= $_GET['id']?>>
            <input type="submit" value="수정">
        </form>
    <?php
        }
    ?>
    <h3><?= $title ?></h3>
    <p><?= $description ?> </p>
</body>
</html>