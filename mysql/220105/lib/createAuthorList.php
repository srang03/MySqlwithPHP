<?php
    function createAuthorList($conn, $author_id){
        $query = "SELECT id, name from author";
        $result = mysqli_query($conn, $query);
        $author_list = "<select name='auhtor_id'>";
        
        while($row = mysqli_fetch_array($result)){
            $author_list .= "<option value='{$row['id']}'".($row['id'] == $author_id ? 'selected="selected"' : '').">".$row['name']."</option>";   
        }
        $author_list .= "</select>";
        
        return $author_list;
    }

?>
