<?php require_once('./lib/conn.php')?>

<?php
    if(isset($_POST['id'])&&!empty($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "DELETE FROM topic WHERE id = $id";
        print($query);
        if($result = mysqli_query($conn, $query)){
            header("Location: ./index.php");
        }else{
            require_once('./common/errorOccured.php');
        }
    }
?>