<?php
    function createArticle($conn, $id){
        $article = array(
            "id" => 0,
            "title" => "Welcome", 
            "description" => "This is WEB",
            "aid" => 0,
            "name" => "",
            "position" => ""
        );

        if(isset($id) && !empty($id)){
            $query = "SELECT * from topic LEFT JOIN author ON topic.author_id = author.id where topic.id = {$id}";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);

            $article['id'] = $row[0];
            $article['title'] = $row['title'];
            $article['description'] = $row['description'];
            $article['aid'] = $row['id'];
            $article['name'] = $row['name'];
            $article['position'] = $row['position'];

        }
        
        return $article;
        
    }

?>

