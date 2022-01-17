<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => 'WEB',
            "description" => 'WELCOME'
        );

        if (isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);

            $query = "SELECT * FROM topic WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $article['id'] = htmlspecialchars($row['id']);
            $article['title'] = htmlspecialchars($row['title']);
            $article['description'] = htmlspecialchars($row['description']);

        } 
        
        if (isset($_POST['id']) && !empty($_POST['id'])){
            $id = mysqli_real_escape_string($conn, $_POST['id']);

            $query = "SELECT * FROM topic WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $article['id'] = htmlspecialchars($row['id']);
            $article['title'] = htmlspecialchars($row['title']);
            $article['description'] = htmlspecialchars($row['description']);
        }
        
        return $article;
    }
?>