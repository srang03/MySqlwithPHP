<?php require_once('./lib/conn.php'); ?>

<?php 
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM topic WHERE id = $id";
        $result = mysqli_query($conn, $query);

        header("Location: ./index.php");
    }
    
?>