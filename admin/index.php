<?php
session_start();

if ($_SESSION['user']['role'] != 'admin') {
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
            <a href="../index.php" class="header__logo">
                <img class="header__logo-img" src="../assets/images/logo/header-logo.png" alt="logo">
            </a>
            <h1 class="header__title">
                Админ-панель
            </h1>
        </header>
        <main class="main">
            <div class="main__wrapper">
                <div class="main__container">
                    <div class="main__title block" id="faq">Вопросы клиентов</div>
                    <div class="main__application application block" id="faq">
                        <table class="application__table table">
                            <thead class="table__header">
                                <tr id="table__headlines">
                                    <th class="table__title title-name">
                                        Имя
                                    </th>
                                    <th class="table__title title-tel">
                                        Телефон
                                    </th>
                                    <th class="table__title title-application">
                                        Вопрос
                                    </th>
                                    <th class="table__title title-status">
                                        Статус
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table__body">
                                <?php
                                    foreach ($applications as $application) {
                                        echo '<tr class="table__row row">';
                                        echo '<td class="row__name">' . $application['name'] . '</td>';
                                        echo '<td class="row__tel">' . $application['tel'] . '</td>';
                                        echo '<td class="row__application">' . $application['application'] . '</td>';
                                        switch ($application['status']) {
                                            case 0:
                                                echo '<td class="review-text">Ждет ответа</td>';
                                                break;
                                            case 1:
                                                echo '<td class="review-text">Отвечно</td>';
                                                break;
                                        }
                                        echo '<td><a class="row__button" href="../assets/php/approve_application.php?id=' . $application['id'] . '"><img src="../assets/images/icon/check.png" alt="check"></a></td>';
                                        echo '<td><a class="row__button" href="../assets/php/delete_application.php?id=' . $application['id'] . '"><img src="../assets/images/icon/delete.png" alt="check"></a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="main__title block" id="reviews">Отзывы</div>
                    <div class="main__reviews reviews block" id="reviews" style="display: none;">
                        <table class="reviews__table table">
                            <thead class="table__header">
                                <tr id="table__headlines">
                                    <th class="table__title title-name">
                                        Имя
                                    </th>
                                    <th class="table__title title-tel">
                                        Отзыв
                                    </th>
                                    <th class="table__title title-status">
                                        Статус
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table__body">
                                <?php
                                    foreach ($reviews as $review) {
                                        echo '<tr class="table__row row">';
                                        echo '<td class="row__name">' . $review['name'] . '</td>';
                                        echo '<td class="row__tel">' . $review['text'] . '</td>';
                                        switch ($review['status']) {
                                            case 0:
                                                echo '<td class="review-text">На модерации</td>';
                                                break;
                                            case 1:
                                                echo '<td class="review-text">Одобрено</td>';
                                                break;
                                        }
                                        echo '<td><a onclick="handleLinkClick(event)" class="row__button accordion__link" href="../assets/php/approve_review.php?id=' . $review['id'] . '"><img src="../assets/images/icon/check.png" alt="check"></a></td>';
                                        echo '<td><a onclick="handleLinkClick(event)" class="row__button accordion__link" href="../assets/php/delete_review.php?id=' . $review['id'] . '"><img src="../assets/images/icon/delete.png" alt="check"></a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="main__sidebar sidebar">
                    <div class="sidebar__buttons">
                        <button class="sidebar__button button show_section-btn" onclick="showBlock('faq')">Вопросы клиентов</button>
                        <button class="sidebar__button show_section-btn" onclick="showBlock('reviews')">Отзывы</button>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <img src="../assets/images/logo/header-logo.png" alt="logo">
             <div class="footer__info">
                <p>
                    Все права защищены.
                </p>
                <p>
                    ООО «Автобан55» ОГРН 1145543048969 ИНН 5501262038
                </p>
             </div>
        </footer>
    </div>
    <script src="../assets/js/show_section.js"></script>
</body>

</html>