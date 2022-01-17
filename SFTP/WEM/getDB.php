<?php require_once('../lib/conn.php')?>

<?php
    $list = [];
    $query = "SELECT * FROM topic";
    
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)){
        $arr = array(
            "id"=> $row['id'],
            "title"=> $row['title'],
            "description"=>$row ['description']
        );
  
        array_push($list, $arr);
    }
    echo json_encode($list);
    
    
?>
