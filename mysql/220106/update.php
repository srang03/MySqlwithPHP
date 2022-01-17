<?php require_once('./lib/conn.php'); ?>
<?php require_once('./lib/createList.php') ?>
<?php require_once('./lib/createArticle.php') ?>
<?php require_once('./lib/createAuthorList.php') ?>
<?php
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];  
        $article = createArticle($conn, $id);
        $author_list = createAuthorList($conn, $article['aid']);
    } else{
        $id = 0;
    }
    $list = createList($conn);    
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
        <?= $list?>
    </ul> 
    <h3>문서 수정하기</h3>
    <form action="./update_process.php" method="POST">
        <div><input type="hidden" name="id" value=<?= $article['id']?>></div>
        <div><input type="text" name='title' placeholder="Title" value=<?= $article['title']?>></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="내용을 입력해주세요."><?= $article['description']?></textarea></div>
        <div><select name="aid" id="">

        </select></div>
        <div><input type="submit" value="저장"></div>
    </form>
    <?php require_once('./common/back.php'); ?>
</body>
</html>