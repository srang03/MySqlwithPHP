<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => "",
            "description" => "",
            "created" => null,
            "user_id" => null,
            "name" => "",
            "position" => ""
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $query = "SELECT * FROM topic LEFT JOIN users ON topic.user_id = users.id WHERE topic.id = $id";
            if($result = mysqli_query($conn, $query)){
                $row = mysqli_fetch_array($result);
                    $article[0] = mysqli_real_escape_string($conn, $row[0]);
                    $article['title'] = mysqli_real_escape_string($conn, $row['title']);
                    $article['description'] = mysqli_real_escape_string($conn, $row['description']);
                    $article['created'] = mysqli_real_escape_string($conn, $row['created']);
                    $article['user_id'] = mysqli_real_escape_string($conn, $row['user_id']);
                    $article['name'] = mysqli_real_escape_string($conn, $row['name']);
                    $article['position'] = mysqli_real_escape_string($conn, $row['position']);
            }
        }

        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $query = "SELECT * FROM topic LEFT JOIN users ON topic.user_id = users.id WHERE topic.id = $id";
            if($result = mysqli_query($conn, $query)){
                $row = mysqli_fetch_array($result);
                    $article[0] = mysqli_real_escape_string($conn, $row[0]);
                    $article['title'] = mysqli_real_escape_string($conn, $row['title']);
                    $article['description'] = mysqli_real_escape_string($conn, $row['description']);
                    $article['created'] = mysqli_real_escape_string($conn, $row['created']);
                    $article['user_id'] = mysqli_real_escape_string($conn, $row['user_id']);
                    $article['name'] = mysqli_real_escape_string($conn, $row['name']);
                    $article['position'] = mysqli_real_escape_string($conn, $row['position']);
            }
        }
        return $article;
    }
?>