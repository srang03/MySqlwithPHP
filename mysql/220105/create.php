<?php require_once("./lib/conn.php"); ?>
<?php require_once("./lib/createList.php"); ?>
<?php require_once("./lib/createAuthorList.php"); ?>


<?php
    $list = createList($conn);
?>

<?php
    $query = "SELECT id, name from author";
    $result = mysqli_query($conn, $query);
    $author_list = "<select name='author_id'>";
    while($row = mysqli_fetch_array($result)){
        $author_list .= "<option value='".$row['id']."'>".$row['name']."</option>";
    }
    $author_list .= "</select>";
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
    <div>글 작성</div>
    <form action="./create_process.php" method="post">
        <div><input type="text" placeholder="Title" name="title"></div>
        <div><textarea name="description" id="" cols="30" rows="10"></textarea></div>
        <?= $author_list?>
        <div><input type="submit" value="저장"></div>
       
    </form>
    <form action="./index.php">
        <input type="submit" value="뒤로가기">
    </form>
 

</body>

</html>