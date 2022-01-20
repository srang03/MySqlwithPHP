<?php
    function createUserList($conn, $user_id){
        $list ='';
        $query = "SELECT * FROM users";
        if($result = mysqli_query($conn, $query)){
            while($row = mysqli_fetch_array($result)){
                $list .= "<option value='{$row['id']}' ".($user_id === $row['id'] ? 'selected=selected' : '').">".$row['name']."</option>";
            }
        }
        return $list;
    }

?>