<?php require_once('./lib/conn.php')?>
<?php require_once('./lib/createList.php')?>

<?php
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
        <?=$list ?>
    </ul>
    <h3>글 생성하기</h3>
    <form action="./create_process.php" method="POST">
        <div><input type="text" name='title' placeholder="제목을 입력해주세요."></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="내용을 입력해주세요."></textarea></div>
        <div><input type="submit" value="저장"></div>
    </form>
    <?php require_once('./common/backToMain.php')?>

</body>
</html>