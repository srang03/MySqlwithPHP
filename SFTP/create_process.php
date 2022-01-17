<?php require_once('./lib/conn.php')?>
<?php
    if (isset($_POST['title']) && !empty($_POST['title'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        $query = "INSERT INTO topic (title, description, created)
        VALUES ('{$title}', '{$description}', NOW());";

        $result = mysqli_query($conn, $query);
        $last_id = $conn->insert_id;
        header("Location: ./index.php?id=".$last_id);
    }
?>