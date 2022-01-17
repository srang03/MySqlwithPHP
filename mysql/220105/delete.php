
<h3>정말 삭제하시겠습니까?</h3>
<form action="./delete_process.php" method="POST">
    <input type="hidden" value=<?= $_POST['id']?> name='id'>
    <input type="submit" value="삭제">
</form>

<form action="./index.php">
    <input type="submit" value="돌아가기"> 
</form>