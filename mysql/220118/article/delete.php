<?php require_once('../lib/conn.php')?>
<?php require_once('../lib/createArticle.php')?>

<?php $article = createArticle($conn)?>

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

    <h3>아래의 글을 정말 삭제하시겠습니까?</h3>
    <h3><?=$article['title']?></h3>
    <p><?=$article['description']?></p>

    <form action="./delete_process.php" method="POST">
        <input type="hidden" name="id" value=<?=$article['id']?>>
        <input type="submit" value="네"> 
    </form>
    <form action="../index.php" method="POST">
        <input type="submit" value="아니오">
    </form>
    

  
</body>
</html>