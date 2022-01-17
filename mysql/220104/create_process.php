<?php require_once("./connect.php"); ?>

<?php 
    if(isset($_POST['title']) && !empty($_POST['title'])){
        $_title = mysqli_real_escape_string($conn, $_POST['title']);
        $_description = mysqli_real_escape_string($conn, $_POST['description']);
        $query = "INSERT INTO topic (title, description, created)
        VALUES ('{$_title}', '{$_description}', NOW())";
        var_dump($query);
        $result = mysqli_query($conn, $query);
        $last_id = $conn->insert_id;
        header("Location: ./index.php?id=".$last_id);
    } else{

    }

?>