<?php require_once("./lib/conn.php") ?>


<?php
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_description = $_POST['description'];

        $filtered = array(
            "id" => mysqli_real_escape_string($conn, $_id),
            "title" => mysqli_real_escape_string($conn, $_title),
            "description" => mysqli_real_escape_string($conn, $_description)
        );

        $query = "UPDATE topic SET title='{$filtered['title']}', description='{$filtered['description']}' WHERE id={$filtered['id']}";
        $result = mysqli_query($conn, $query);

        header("Location: ./index.php?id=".$filtered['id']);
    } 
?>