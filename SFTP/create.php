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
    <title>WEB</title>
</head>
<body>
    <h1><a href="./index.php">WEB</a></h1>
    <ul>
        <?= $list ?>
    </ul>
    <form action="./create_process.php" method="POST">
        <div><input type="text" name="title" placeholder="Title"></div>
        <div><textarea name="description" id="" cols="30" rows="10" placeholder="Type on it"></textarea></div>
        <div><input type="submit" value="저장"></div>
    </form>

</body>
</html>