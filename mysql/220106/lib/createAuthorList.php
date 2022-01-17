<?php
    function createAuthorList($conn, $aid){
        $query = "SELECT * FROM author";
        $result = mysqli_query($conn, $query);
        $list = '';
        while($row = mysqli_fetch_array($result)){
            
            $list . = "<option value='".$row['id'] $aid == $row['id'] ? ' selected=selected' : ''>".$row['name']."</option>";
         
            print($list);
  
        }

        return $list;
        
    }
?>