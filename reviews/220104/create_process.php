<?php
    if(isset($_POST['title']) && !empty($_POST['title'])){
            $get_title = $_POST['title'];
            $get_description = $_POST['description'];
            file_put_contents("./data/".$get_title, $get_description);

            header("Location: ./index.php?id=".$get_title);
            
    } 
    else{ 
       require("./processException.php");
    }
?>