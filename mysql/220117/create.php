<?php require_once('./lib/conn.php')?>
<?php require_once('./lib/createList.php')?>
<?php require_once('./lib/createAuthorList.php')?>

<?php $list = createList($conn);?>
<?php $author_list = createAuthorList($conn, null);?>

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
    <h3>글 생성</h3>
        <form action="./create_process.php" method="POST">
            <div><input type="text" name="title" placeholder="Title"></div>
            <div><textarea name="description" id="" cols="30" rows="10"></textarea></div>
            <div><select name="author_id" id=""><?= $author_list?></select></div>
            <div><input type="submit" value="저장"></div>
        </form>


</body>
</html>