
<?php
    function GetArticleFromDB($conn) {
        $article = array(
            "id" => 0,
            "title"=>"WEB",
            "description" => "WELCOME",
            "author_name" => "",
            "author_position" => ""
        );
    
        if (isset($_GET['id']) && !empty($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $article['id'] = $row[0];
            $article['title'] = $row['title'];
            $article['description'] = $row['description'];
            $article['author_name'] = $row['name'];
            $article['author_position'] = $row['position'];
    
        }     
        return $article;
    }
