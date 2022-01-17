<?php require_once("./lib/conn.php")?>

<?php
    if(isset($_POST['title']) && !empty($_POST['title'])){
        $_title = $_POST['title'];
        $_description = $_POST['description'];
        $_author_id = $_POST['author_id'];

        $filtered = array(
            "title" => mysqli_real_escape_string($conn, $_title),
            "description" => mysqli_real_escape_string($conn, $_description),
            "author_id" =>mysqli_real_escape_string($conn, $_author_id)
        );

        $query = "INSERT INTO topic (title, description, created, author_id)
            VALUES ('{$filtered['title']}', '{$filtered['description']}', NOW(), {$filtered['author_id']});
        ";
       
        $result = mysqli_query($conn, $query);
        $last_id = $conn->insert_id;
        header("Location: ./index.php?id=".$last_id);
    }
?>