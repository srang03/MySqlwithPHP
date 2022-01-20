<?php require_once("../lib/conn.php") ?>

<?php
    if (isset($_POST['id']) && !empty($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "DELETE FROM topic where id = $id";
        
        if($result = mysqli_query($conn, $query)){
            header("Location: ../index.php");
        }
    }
?>