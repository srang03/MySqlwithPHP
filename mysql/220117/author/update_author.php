<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Author</title>
</head>
<body>
    <h1>Create Author</h1>
    <form action="./create_author_process.php" method="POST">
        <div><input type="text" name="name" placeholder="이름"></div>
        <div><input type="text" name="position" placeholder="포지션"></div>
        <div><input type="submit" value="생성"></div>
    </form>
    <form action="../index.php" method="POST">
        <input type="submit" value="돌아가기">
    </form>
</body>
</html>