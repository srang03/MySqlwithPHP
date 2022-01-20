<?php require_once('../lib/conn.php') ?>
<?php require_once('../lib/createList_child.php') ?>
<?php require_once('../lib/createArticle.php') ?>

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
    <ol>
        <?=$list ?>
        
    </ol>
    <h3><?=$article['title']?></h3>
    <p><?=$article['description']?></p>
    <p><?=$article['name']." ".$article['position']?></p>

    <h3>정말 삭제하시겠습니까?</h3>
    <form action="./delete_process.php" method="POST">
        <input type="hidden" value=<?= $article['id']?> name="id">
        <input type="submit" value="글 삭제">
    </form>




</body>
</html>