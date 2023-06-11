<?php
    session_start();

    require_once("connect.php");

    $sql = 'SELECT * FROM users WHERE login=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([addslashes($_POST['login'])]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $_SESSION['error'] = 'Пользователь с таким логином уже существует';
        header('Location: ../../registr.php');
      } else {
        $sql = 'INSERT INTO users (login, password) VALUES (?,?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([addslashes($_POST['login']), sha1($_POST['password'])]);

        $sql = 'SELECT * FROM users WHERE login=? AND password=?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([addslashes($_POST['login']), sha1($_POST['password'])]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user']['login'] = $user['login'];
        $_SESSION['user']['role'] = $user['role'];

        header('Location: ../../index.php');
      }
