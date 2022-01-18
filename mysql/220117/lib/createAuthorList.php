<?php   
    function createAuthorList($conn, $aid){
        $author_list = "";

        $query = "SELECT * FROM author";
        if ($result = mysqli_query($conn, $query)){
            while($row = mysqli_fetch_array($result)){
                $author_list .= "<option value='{$row['id']}' name='author_id' "
                                    .($aid == $row['id'] ? 'selected=selected' : ''). ">"
                                    .$row['name']
                                    ."</option>";
            }
        }
        return $author_list;
    }
?>