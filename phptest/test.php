<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <div class="container">
        
        <form action="function.php" method="get">
        <label for="">METHOD GET </label>
            <label for="name">Имя игрока</label>
            <input type="text" id="name" value="Имя" onfocus="value=''" name="name">
            <label for="pass">Пароль</label>
            <input type="text" id="pass" value="Пароль" onfocus="value=''" name="pass">
            <input type="submit">
        </form>
        <form action="post.php" method="POST">
        <label for="">METHOD POST</label>
            <label for="name">Имя игрока</label>
            <input type="text" id="name" value="Имя" onfocus="value=''" name="name">
            <label for="pass">Пароль</label>
            <input type="text" id="pass" value="Пароль" onfocus="value=''" name="pass">
            <input type="submit">
        </form>
    </div>
</body>
</html>