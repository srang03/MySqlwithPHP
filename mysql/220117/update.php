<?php require_once('./lib/conn.php');?>
<?php require_once('./lib/createList.php');?>
<?php require_once('./lib/createArticle.php');?>
<?php require_once('./lib/createAuthorList.php')?>

<?php $list = createList($conn);?>
<?php $article = createArticle($conn);?>
<?php $author_list = createAuthorList($conn, $_POST['author_id']) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My WEN</title>
    
</head>
<body>
    <h1><a href="./index.php">WEB</a></h1>
    <ul>
        <?= $list?>
    </ul>
    <h3>글 수정</h3>
        <form action="./update_process.php" method="POST">
            <div><input type="hidden" name="id" value="<?= $_POST['id']?>"></div>
            <div><input type="text" name="title" placeholder="Title" value="<?= $article['title']?>"></div>
            <div><textarea name="description" id="" cols="30" rows="10"><?= $article['description']?></textarea></div>
            <div><select name="author_id" id="aid"><?=$author_list?></select></div>
            <div><input type="submit" value="저장"></div>
        </form>


</body>
</html>