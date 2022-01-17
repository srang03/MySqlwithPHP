<h3>정말 삭제하시겠습니까?</h3>
<?php if(isset($_POST['id']) && !empty($_POST['id']))
 { 
$id = $_POST['id']?>
    <form action="./delete_process.php" method="POST">
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="submit" value="삭제하기">
</form>
<?php } ?>
