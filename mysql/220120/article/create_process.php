<?php require_once('../lib/conn.php')?>
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
    $authorization = "Bearer 080042cad6356ad5dc0a720c18b53b8e53d4c274";

    if(isset($_POST['title']) && !empty($_POST['title'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']); 
        $description = mysqli_real_escape_string($conn, $_POST['description']); 
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $query = "INSERT INTO topic (title, description, created, user_id)
            VALUES ('{$title}', '{$description}', NOW(), $user_id);";
        
        if($result = mysqli_query($conn, $query)){
            $last_id = $conn->insert_id;
            header("Location: ../index.php?id=".$last_id);
        }
    }
?>