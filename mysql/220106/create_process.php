<?php require_once('./lib/conn.php')?>
<?php
    if(isset($_POST['title']) && !empty($_POST['title'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']); 
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $aid = mysqli_real_escape_string($conn, $_POST['aid']);
        $query = "INSERT INTO topic (title, description, created, author_id)
                    VALUES('{$title}', '{$description}', NOW(), {$aid})";
        $result = mysqli_query($conn, $query);

        header("Location: ./index.php");
    }

    else{
        require('./common/wrongApproach.php');
    }

?>