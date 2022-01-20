<?php require('./lib/conn.php')?>
<?php require_once('./lib/createList.php')?>
<?php require_once('./lib/createArticle.php')?>
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
    <title>WEB</title>
</head>
<body>
    <h1><a href="./index.php">WEB</a></h1>
    <ol>
        <?= $list?>
    </ol>

    <form action="./article/create.php" method="POST">
        <input type="submit" value="글 생성">
    </form>
    <?php
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
    ?>
        <form action="./article/delete.php">
            <input type="hidden" value=<?=$id?> name="id">
            <input type="submit" value="글 삭제">
        </form>
        <form action="./article/update.php">
            <input type="hidden" value=<?=$id?> name="id">
            <input type="submit" value="글 수정">
        </form>
    <?php
        }
    ?>
    <h3><?=$article['title']?></h3>
    <p><?=$article['description']?></p>
</body>
</html>
