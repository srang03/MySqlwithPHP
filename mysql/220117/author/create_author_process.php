<?php require_once('../lib/conn.php')?>

<?php
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $position = mysqli_real_escape_string($conn, $_POST['position']);
        $query = "INSERT INTO author (name, position)
        VALUES ('{$name}', '{$position}')";
        
        if($result = mysqli_query($conn, $query)){
            header("Location: ../common/complete.php");
        }
    }
    
?>