<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => "",
            "description" => ""
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']); 
            $query = "SELECT * FROM topic WHERE id = $id";    
            if($result = mysqli_query($conn, $query)){
               $row = mysqli_fetch_array($result);
               $article['id'] = mysqli_real_escape_string($conn, $row['id']);
               $article['title'] = mysqli_real_escape_string($conn, $row['title']);
               $article['description'] = mysqli_real_escape_string($conn, $row['description']);
            }
        }

        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = mysqli_real_escape_string($conn, $_POST['id']); 
            $query = "SELECT * FROM topic WHERE id = $id";    
            if($result = mysqli_query($conn, $query)){
               $row = mysqli_fetch_array($result);
               $article['id'] = mysqli_real_escape_string($conn, $row['id']);
               $article['title'] = mysqli_real_escape_string($conn, $row['title']);
               $article['description'] = mysqli_real_escape_string($conn, $row['description']);
            }
        }

        return $article;
        
    }

?>