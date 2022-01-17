<h2>정말 삭제하시겠습니까?</h2>
<form action="./delete_process.php" method="POST">
    <input type="hidden" name="id" value="<?= $_POST['id']?>">
    <input type="submit" value="삭제">  
</form>
<?php require("./processException.php"); ?>