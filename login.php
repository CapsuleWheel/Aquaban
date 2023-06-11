<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aquaban</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="./assets/style/login.css">
</head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="title">Вход в аккаунт</div>
                <form class="form" action="./assets/php/login.php" method="post">
                    <input class="form__name" type="text" name="login" placeholder="Имя">
                    <input class="form__password" type="password" name="password" placeholder="Пароль">
                    <button class="form__submit">Войти</button>
                </form>
                <div class="form__text">Еще не зарегистрироаны? <a href="./registr.php" class="form__link">Регистрация</a></div>
            </div>

            <button id="history-button" class="back-button">Назад</button>
        </div>
        <script>
            document.getElementById('history-button').addEventListener('click', () => {
            history.back();
            });
        </script>
    </body>
</html>