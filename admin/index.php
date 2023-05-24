<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    }
    require_once("../assets/php/connect.php");
    $sql = "SELECT * FROM applications";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $applications = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/media.css">
</head>
<body>
    <div class="applicaation__list">
    <?php
        foreach ($applications as $application) {
            echo '<h1 class="application-name">' . $application['name'] . '</h1>';
            echo '<h2 class="application-tel">' . $application['tel'] . '</h2>';
            echo '<h3 class="application-application">' . $application['application'] . '</h3>';
        }
    ?>
</div>
</body>
</html>