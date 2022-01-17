<?php require_once('./lib/conn.php') ?>
<?php require_once('./lib/createList.php') ?>
<?php require_once('./lib/createArticle.php'); ?>
<?php
    $list = createList($conn);
    $article= createArticle($conn);
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
        <?= $list ?>
    </ul>
    <h3>글 생성하기</h3>

    <form action="./update_process.php" method="POST">
        <div><input type="hidden" name='id' value=<?= $article['id']?>></div>
        <div><input type="text" name="title" placeholder="title" value=<?= $article['title']?>></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="description"><?= $article['description']?></textarea></div>
        <div><input type="submit" value="저장"></div>
    </form>
    <?php require_once('./lib/backtoMainPage.php')?>
