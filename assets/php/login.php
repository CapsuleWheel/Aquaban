<?php 
    session_start();
    require_once("connect.php");

    $sql = "SELECT * FROM users WHERE login=? AND password=? LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['login'], sha1($_POST['password'])]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: ../../admin/index.php');
    } else {
        $_SESSION['error'] = 'Неправильный логин или пароль';
        header('Location: ../../admin/login.php');
    }
?>