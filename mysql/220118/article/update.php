<?php require_once('../lib/conn.php')?>
<?php require_once('../lib/createList.php')?>
<?php require_once('../lib/createAuthorList.php') ?>
<?php require_once('../lib/createArticle.php') ?>

<?php $list = createList($conn)?>
<?php $article = createArticle($conn) ?>
<?php $author_list = createAuthorList($conn, $article['author_id']) ?>

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
    <form action="./update_process.php" method="POST">
        <div><input type="text" name="title" placeholder="글 제목" value="<?=$article['title']?>"></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="글 내용"><?=$article['description']?></textarea></div>
        <select name="author_id" id="">
        <?=$author_list?>
        </select>
        <div><input type="submit" value="저장"></div>
    </form>
</body>
</html>