<?php

if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];
    unlink("./data/".$id);
    header("Location: ./index.php");
} else{
    require("./processException.php");
}

?>