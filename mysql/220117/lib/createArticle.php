<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => "",
            "description" => "",
            "author_id" => null,
            "name" => "",
            "position" =>""
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']); 
            $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = $id";    
            if($result = mysqli_query($conn, $query)){
               $row = mysqli_fetch_array($result);
               $article['id'] = mysqli_real_escape_string($conn, $row[0]);
               $article['title'] = mysqli_real_escape_string($conn, $row['title']);
               $article['description'] = mysqli_real_escape_string($conn, $row['description']);
               $article['author_id'] = mysqli_real_escape_string($conn, $row['id']);
               $article['name'] = mysqli_real_escape_string($conn, $row['name']);
               $article['position'] = mysqli_real_escape_string($conn, $row['position']);
            }
        }

        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = mysqli_real_escape_string($conn, $_POST['id']); 
            $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = $id";       
            if($result = mysqli_query($conn, $query)){
                $row = mysqli_fetch_array($result);
                $article['id'] = mysqli_real_escape_string($conn, $row[0]);
                $article['title'] = mysqli_real_escape_string($conn, $row['title']);
                $article['description'] = mysqli_real_escape_string($conn, $row['description']);
                $article['author_id'] = mysqli_real_escape_string($conn, $row['id']);
                $article['name'] = mysqli_real_escape_string($conn, $row['name']);
                $article['position'] = mysqli_real_escape_string($conn, $row['position']);
            }
        }
        return $article;
        
    }

?>