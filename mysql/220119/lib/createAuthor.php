<?php
    function createAuthor($conn, $author_id){
        $query = "SELECT * FROM author";
        $author_list = "";
        if($result = mysqli_query($conn, $query)){
            while($row = mysqli_fetch_array($result)){
                $author_list .= "<option value='{$row['id']}' ".($author_id === $row['id'] ? 'selected=selected':'').">".$row['name']."</option>";
            }
        }

        return $author_list;
    }
    
?>