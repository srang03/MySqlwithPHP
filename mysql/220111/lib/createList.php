<?php
    function createList($conn){
        $query = "SELECT * FROM topic ORDER BY id DESC;";
        $list = '';
        if($result = mysqli_query($conn, $query)){
          
           while($row = mysqli_fetch_array($result)){
            $list .= "<li><a href='./index.php?id=".$row['id']."'>".$row['title']."</a></li>";
           } 
          
       
        }  
        return $list;
    }
?>