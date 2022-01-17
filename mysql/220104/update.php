<?php require_once('./connect.php') ?>
<?php require_once('./createList.php')?>
<?php 
    if(isset($_POST['id']) && !empty($_POST['id'])){
  
        $id = $_POST['id'];
        
        $query = "SELECT title, description FROM topic where id = $id";
        $result = mysqli_query($conn, $query);
        $article = mysqli_fetch_array($result);
 
        $title = $article['title'];
        $description = $article['description'];
        print_r($title);
    } else{
        print_r("Failed");
    }
    
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
        <?php $list = createList($conn)?>
        <?= $list ?>
    </ul>
    <form action="./update_process.php" method="post">
        <div><input type="hidden" name="oid" id="" value=<?= $id?>></div>
        <div><input type="text" name="title" placeholder="Title" value=<?= $title?>></div>
        <div><textarea name="description" id="" cols="30" rows="10"><?= $description?></textarea></div>
        <div><input type="submit" value="저장"></div>
    </form>
    <form action="./index.php">
        <div><input type="submit" value="돌아가기"></div>
    </form>

</body>
</html>