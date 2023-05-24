<?php
    session_start();
?>

<form action="../assets/php/login.php" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
    <?php
        if (($_SESSION["error"])) {
            echo "<p>Неправильный логин или пароль</p>";
        }
    ?>
</form>