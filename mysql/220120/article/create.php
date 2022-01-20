<?php require('../lib/conn.php')?>
<?php require_once('../lib/cretaetList_child.php')?>
<?php require_once('../lib/createUserList.php')?>

<?php 
    $list = createList($conn);
    $user_list = createUserList($conn, null)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
</head>
<body>
    <h1><a href="../index.php">WEB</a></h1>
    <ol>
        <?= $list?>
    </ol>

    <form action="./create_process.php" method="POST">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="글 작성"></textarea></div>
        <div><select name="user_id" id=""><?=$user_list?></select></div>
        <div><input type="submit" value="저장"></div>
    </form>
    
</body>
</html>
