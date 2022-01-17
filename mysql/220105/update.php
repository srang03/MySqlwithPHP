<?php require_once("./lib/conn.php"); ?>
<?php require_once("./lib/createList.php"); ?>
<?php require_once("./lib/getArticleFromDB_post.php"); ?>
<?php require_once("./lib/createAuthorList.php") ?>
<?php
    $list = createList($conn);
    $article = getArticleFromDBPost($conn);
    $author_list = createAuthorList($conn, $article['author_id']);
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
    <div>글 수정</div>
    <form action="./update_process.php" method="post">
        <input type="hidden" name="id" value=<?= $article['id']?>>
        <div><input type="text" placeholder="Title" name="title" value=<?= $article['title']?>></div>
        <div><textarea name="description" id="" cols="30" rows="10"><?= $article['description']?></textarea></div>
        <?= $author_list ?>
        <div><input type="submit" value="저장"></div>
    </form>
    <form action="./index.php">
        <input type="submit" value="뒤로가기">
    </form>

</body>

</html>