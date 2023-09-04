<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>

    <form action="auth.php" method="POST" class="auth">
    <h2>Aвторизации</h2>
    <input type="text" name="login"><br><br>
    <input type="password" name="pass"><br><br>
    <button type="submit">Авторизоваться</button>
    </form>
    <?php
    $error = (isset($_GET['error']) ? $_GET['error']:'');
    //echo var_dump($_GET);
    switch($error){
        case 'not_valid':
         echo 'Все поля должны быть заполнены ';
         break;
         case 'not_valid1':
            echo 'Такого логина нет ';
            break;
    }
    ?>
</body>
</html>