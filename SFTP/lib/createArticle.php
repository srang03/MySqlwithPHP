<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => "WEB",
            "description"=> "WELCOME"
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']); 
            $query = "SELECT * from topic where id = $id";
            $result = mysqli_query($conn, $query);
            
            $row = mysqli_fetch_array($result);
            $article['title'] = $row['title']; 
            $article['description'] = $row['description'];

            return $article;
        }
    }
?>