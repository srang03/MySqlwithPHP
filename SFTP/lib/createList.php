<?php
    function createList($conn){
        $query = "SELECT * FROM topic";
        $result = mysqli_query($conn, $query);
        $list = "";
        while($row = mysqli_fetch_array($result)){
            $list .= "<li><a href='./index.php?id={$row['id']}'>{$row['title']}</a></li>";
        }
        return $list;
    }
?>