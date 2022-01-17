<?php require_once('./lib/conn.php')?>
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
    <title>Document</title>
</head>
<body>
    <h1><a href="./index.php">WEB</a></h1>
    <ul>
        <?=$list ?>
    </ul>
    
    <h3><?= $article['title']?></h3>
    <p><?= $article['description']?></p>
    <h4>정말 삭제하시겠습니까?</h4>
    <?php if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
    ?>
        <form action="./delete_process.php" method="POST">
            <input type="hidden" name="id" value=<?= $id?>>
            <input type="submit" value="네">
        </form>
    <?php

    }
    ?>
    <?php require_once('./common/backToMain.php')?>
 
</body>
</html>