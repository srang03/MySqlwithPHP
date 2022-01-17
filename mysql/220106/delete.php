<?php require_once('./lib/conn.php'); ?>
<?php if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];    
?>
    
    <h3>정말 삭제하시겠습니까?</h3>
    <form action="./delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="삭제">
    </form>
    <?php require_once('./common/back.php'); ?>
<?php
}
?>
