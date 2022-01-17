<?php require_once('./lib/connect.php') ?>
<?php require_once('./lib/createList.php') ?>
<?php require_once('./lib/createArticle.php') ?>
<?php  
    $list = createList($conn);
    $article = createArticle($conn);
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
        <?=$list?>
    </ul>
    <form action="./create.php" method="POST">
        <input type="submit" value="생성">
    </form>

    <?php
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
    ?>
        <form action="./delete.php" method="POST">
            <input type="hidden" name='id' value=<?= $id?>>
            <input type="submit" value=" 글 생성">
        </form>

        <form action="./update.php" method="POST">
            <input type="hidden" name='id' value=<?= $id?>>
            <input type="submit" value=" 글 수정">
        </form>

    <?php
        }
    ?>
    <h3><?= $article['title']?></h3>
    <p><?= $article['description']?></p>

</body>
</html>