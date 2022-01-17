<?php
function createList(){
    $list = scandir("./data");
    $i = 2;

    while ($i < count($list)){
        echo "<li><a href='./index.php?id=".$list[$i]."'>".$list[$i]."</a></li>";
        $i += 1;
    }
}

function createTitle(){
   if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo $id;
   } else{
       echo "Welcome";
   }
}

function createDescription(){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $description = file_get_contents("./data/".$id);
        echo $description;
    } 
}
?>