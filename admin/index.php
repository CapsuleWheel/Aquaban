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
    
    $sql = "SELECT * FROM reviews";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <link rel="stylesheet" href="../assets/style/admin-panel.css">
    <link rel="stylesheet" href="./assets/style/media.css">
</head>
<body>
    <div class="wrapper">
        <header class="header _container">
            <a href="index.html" class="header__logo">
                <img class="header__logo-img" src="../assets/images/logo/header-logo.png" alt="logo">
            </a>
            <h1 class="header__title">
                Админ-панель
            </h1>
        </header>
        <main class="main">
            <div class="main__application application">
                <div class="application__title">
                    Вопросы клиентов
                </div>
                <div class="application__list">
                    <div class="application__items">
                        <div class="application__name">
                            Имя
                        </div>
                        <div class="application__tel">
                            Телефон
                        </div>
                        <div class="application__application">
                            Вопрос
                        </div>
                    </div>
                    <div class="application__container">
                        <?php
                            foreach ($applications as $application) {
                                echo '<div class="application__string">';
                                echo '<h1 class="application-name">' . $application['name'] . '</h1>';
                                echo '<h2 class="application-tel">' . $application['tel'] . '</h2>';
                                echo '<h3 class="application-application">' . $application['application'] . '</h3>';
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
                <div class="reviews-list">
                    <?php
                        foreach ($reviews as $review) {
                            echo '<h1 class="review-name">' . $review['name'] . '</h1>';
                            echo '<h2 class="review-text">' . $review['text'] . '</h2>';
                            switch($review['status']) {
                                case 0:
                                    echo '<h2 class="review-text">На модерации</h2>';
                                    break;
                                case 1:
                                    echo '<h2 class="review-text">Одобрено</h2>';
                                    break;
                            }
                            echo '<a href="../assets/php/approve_review.php?id='.$review['id'].'">Одобрить</a>';
                            echo '<a href="../assets/php/delete_review.php?id='.$review['id'].'">Удалить</a>';
                        }
                    ?>
                </div>
            </div>
        </main>
        <footer class="footer">

        </footer>
    </div>
</body>
</html>