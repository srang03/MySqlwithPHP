
<?php
// oid
// title
// description

if(isset($_POST['title']) && !empty($_POST['title'])){
    $oid = $_POST['oid'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    rename("./data/".$oid, "./data/".$title);
    file_put_contents("./data/".$title, $description);
    header("Location: ./index.php?id=".$title);
} else{
    require("./processException.php");
}



?>