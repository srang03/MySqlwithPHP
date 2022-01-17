<?php require_once('./connect.php') ?>
<?php
    if(isset($_POST['title']) && !empty($_POST['title'])){
        $_oid = $_POST['oid'] ;
        settype($_oid, 'integer');
        $_title = mysqli_real_escape_string($conn, $_POST['title']); 
        $_description = mysqli_real_escape_string($conn, $_POST['description']);

        $query = "UPD AT E topic SET 
        title= '{$_title}', description= '{$_description}' 
        WHERE id = $_oid";

        $result = mysqli_query($conn, $query);
   
        header("Location: ./index.php?id=".$_oid);

    } else{

    }

?>