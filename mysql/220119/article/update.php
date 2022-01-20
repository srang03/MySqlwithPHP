<?php require_once("../lib/conn.php") ?>
<?php require_once("../lib/createList_child.php") ?>
<?php require_once("../lib/createArticle.php") ?>
<?php require_once("../lib/createAuthor.php") ?>

<?php 
    $list = createList($conn);
    $article = createArticle($conn);
    $author_list = createAuthor($conn, $article['author_id']);
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
    <h1><a href="../index.php">WEB</a></h1>
    <ol>
        <?=$list ?>
        
    </ol>
    <form action="./update_process.php" method="POST">
        <div><input type="hidden" name="id" value=<?= $article['id']?>></div>
        <div><input type="text" name="title" placeholder="Title" value="<?= $article['title']?>"></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="Description"><?=$article['description']?></textarea></div>
        <div><select name="author_id" id=""><?=$author_list?></select></div>
        <div><input type="submit" value="저장"></div>
    </form>
</body>
</html>