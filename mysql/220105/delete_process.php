<?php require('./lib/conn.php') ?>

<?php
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $_id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "DELETE FROM topic WHERE id = $_id";
        $result = mysqli_query($conn, $query);

        header("Location: ./index.php");
    } 

?>