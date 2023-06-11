<?php 
    session_start();
    require_once("connect.php");

    $sql = "SELECT * FROM users WHERE login=? AND password=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['login'], sha1($_POST['password'])]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user']['login'] = $user['login'];
        $_SESSION['user']['role'] = $user['role'];
        header('Location: ../../index.php');
    } else {
        $_SESSION['error'] = 'Неправильный логин или пароль';
        header('Location: ../../login.php');
    }
?>