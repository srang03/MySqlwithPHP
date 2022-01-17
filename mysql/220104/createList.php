<?php
    function createList($_conn){
        $query = "SELECT * From topic";
        $result = mysqli_query($_conn, $query);
        $list = '';
        while($row = mysqli_fetch_array($result)){
            $list = $list."<li><a href='./index.php?id=".$row['id']."'>".$row['title']."</a></li>";
        }
        return $list;
    }
 
?>