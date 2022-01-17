<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title"=> "Welcome",
            "description"=> "WEB is ..."
        );
        
        
        if(isset($_GET['id']) && !empty($_GET['id'])){
            
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $query = "SELECT * FROM topic WHERE id = $id";
            
            if($result = mysqli_query($conn, $query)){
                $row = mysqli_fetch_array($result);
                $article['id'] = $row['id']; 
                $article['title'] = $row['title'];
                $article['description'] = $row['description'];
            } else{
                // SQL 쿼리 예외처리
            }
            
        }
        if(isset($_POST['id']) && !empty($_POST['id'])){
            
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $query = "SELECT * FROM topic WHERE id = $id";
            
            if($result = mysqli_query($conn, $query)){
                $row = mysqli_fetch_array($result);
                $article['id'] = $row['id']; 
                $article['title'] = $row['title'];
                $article['description'] = $row['description'];
            } else{
                // SQL 쿼리 예외처리
            }
         }
        return $article;
    }
?>