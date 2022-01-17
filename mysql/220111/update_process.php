<?php require_once('./lib/conn.php')?>
<?php
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $query = "UPDATE topic SET title='{$title}', description='{$description}' WHERE id = $id;";

       if($result = mysqli_query($conn, $query)){
           header("Location: ./index.php?id=".$id);
       }else{
            require_once('./common/errorOccured.php');
       }
    }
?>