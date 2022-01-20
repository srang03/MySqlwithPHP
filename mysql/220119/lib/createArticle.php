<?php
    function createArticle($conn){
        $article = array(
            "id" => null,
            "title" => "",
            "description" => "",
            "created" => null,
            "author_id" => null,
            "name" => "",
            "position" => ""
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = $id";

            if($result = mysqli_query($conn, $query)){
                $row =  mysqli_fetch_array($result);

                $article['id'] = htmlspecialchars($row[0]);
                $article['title'] = htmlspecialchars($row['title']);
                $article['description'] = htmlspecialchars($row['description']);
                $article['created'] = htmlspecialchars($row['created']);
                $article['author_id'] = htmlspecialchars($row['author_id']);
                $article['name'] = htmlspecialchars($row['name']);
                $article['position'] = htmlspecialchars($row['position']);
            }
        }
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = $_POST['id'];
            $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = $id";

            if($result = mysqli_query($conn, $query)){
                $row =  mysqli_fetch_array($result);

                $article['id'] = htmlspecialchars($row[0]);
                $article['title'] = htmlspecialchars($row['title']);
                $article['description'] = htmlspecialchars($row['description']);
                $article['created'] = htmlspecialchars($row['created']);
                $article['author_id'] = htmlspecialchars($row['author_id']);
                $article['name'] = htmlspecialchars($row['name']);
                $article['position'] = htmlspecialchars($row['position']);
            }
        }

        return $article;
    }

?>