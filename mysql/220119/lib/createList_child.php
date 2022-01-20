<?php
    function createList($conn){

        $list = '';
        $query = "SELECT * FROM topic";

        if(isset($_GET['id']) && !empty($_GET['id'])){
            
        }

        if($result = mysqli_query($conn, $query)){
            while($row = mysqli_fetch_array($result)){
                $list .= "<li><a href='../index.php?id=".$row['id']."'>".$row['title']."</a></li>";
            }  
        }else{

        }
        return $list;
    }
?>