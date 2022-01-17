<?php require_once('./lib/conn.php');?>
<?php require_once('./lib/createList.php');?>
<?php require_once('./lib/createArticle.php');?>

<?php $list = createList($conn);?>
<?php $article = createArticle($conn);?>

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

    <h3>글 삭제</h3>
    <h3><?= $article['title']?></h3>
    <p><?= $article['description']?></p>
        <form action="./delete_process.php" method="POST">
            <div><input type="hidden" name="id" value="<?= $_POST['id']?>"></div>
            <div><input type="submit" value="삭제"></div>
        </form>


</body>
</html>