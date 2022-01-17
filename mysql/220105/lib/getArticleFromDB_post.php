<?php require_once('./lib/conn.php'); ?>

<?php
    function getArticleFromDBPost($conn){  
        $article = array(
            "id" => 0,
            "title" => "",
            "description" => "",
            "author_name" =>"",
            "author_position" => "",
            "author_id" => ""
        );

        if (isset($_POST['id']) && !empty($_POST['id'])){
            $_id = $_POST['id'];
            $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id=$_id";
            
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $article['id'] = $row[0];
            $article['title'] = $row['title'];
            $article['description'] = $row['description'];
            $article['author_name'] = $row['name'];
            $article['author_position'] = $row['position'];
            $article['author_id'] = $row['id'];
        
        }else{

        }
        return $article;
    }
?>
