<?php require_once('./lib/conn.php')?>
<?php
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']); 
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $aid = mysqli_real_escape_string($conn, $_POST['author_id']);
        $query = "UPDATE topic SET title='{$title}', description='{$description}', author_id={$aid} WHERE id = $id;";
     
        if($result = mysqli_query($conn, $query)){
            header("Location: ./index.php?id=".$id);
        }
    }
?>