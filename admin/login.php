<?php
    session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aquaban</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="..//assets/style/admin-login.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
        <div class="title">Авторизуйтесь, чтобы войти в админ-панель</div>
            <form class="form" action="../assets/php/login.php" method="post">
                <input class="form__name" type="text" name="login">
                <input class="form__password" type="password" name="password">
                <input class="form__submit" type="submit" value="Войти">
                <?php
                    if (isset($_SESSION["error"])) {
                        echo "<p class='error'>Неправильный логин или пароль!</p>";
                    }
                ?>
            </form>
        </div>
    </div>
</div>
</body>
</html>