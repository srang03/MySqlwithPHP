<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => "WEB",
            "description" => "This is WEB..."
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            
            $query = "SELECT * FROM topic where id = $id";
            print($query);
                if ($result = mysqli_query($conn, $query)){
                    $row = mysqli_fetch_array($result);
                    $article["id"] = $row['id'];
                    $article["title"] = $row['title'];
                    $article["description"] = $row['description'];
            }

        }

        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            
            $query = "SELECT * FROM topic where id = $id";
            print($query);
                if ($result = mysqli_query($conn, $query)){
                    $row = mysqli_fetch_array($result);
                    $article["id"] = $row['id'];
                    $article["title"] = $row['title'];
                    $article["description"] = $row['description'];
            }

        }
        return $article;
    }
?>