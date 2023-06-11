<?php

    session_start();
    require_once("./assets/php/connect.php");
    $sql = "SELECT * FROM reviews WHERE status=1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aquaban</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/profile.css">
    <link rel="stylesheet" href="./assets/style/media.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
                <div class="header__container">
                    <a href="./index.php" class="header__logo">
                        <img class="header__logo-img" src="./assets/images/logo/header-logo.png" alt="logo">
                    </a>
                    <nav class="header__menu menu">
                        <img class="menu__logo" src="./assets/images/logo/contacts-logo.png" alt="">
                        <ul class="menu__nav-list">
                            <li class="menu__item"><a href="#broadcast" class="menu__link">Аквабан - онлайн</a></li>
                            <li class="menu__item"><a href="#price  " class="menu__link">Цены</a></li>
                            <li class="menu__item"><a href="#stocks" class="menu__link">Акции</a></li>
                            <li class="menu__item"><a href="#reviews" class="menu__link">Отзывы</a></li>
                            <li class="menu__item"><a href="#contacts" class="menu__link">Контакты</a></li>
                        </ul>
                        <div class="menu__mobile_nav-contacts">
                            <ul class="menu__nav-list">
                                <?php
                                if($_SESSION['user']) {
                                    if ($_SESSION['user']['role'] == 'admin') {
                                        echo "<li class='menu__item'><a class='menu__link' href='admin/index.php'>Админ-панель</a></li>";
                                    
                                    }
                                    echo "<li class='menu__item'><a class='menu__link' href='assets/php/logout.php'>Выйти</a></li>";
                                    if ($_SESSION['user']['role'] == 'user') {
                                        echo "<li class='menu__item'><a href='./profile.php'><img class='menu__user-icon' src='./assets/images/icon/user-profile.png' alt='#'></a></li>";
                                    }
                                }else {
                                    echo "<li class='menu__item'><a class='menu__link' href='login.php'>Войти</a></li>";
                                    echo "<li class='menu__item'><a class='menu__link' href='registr.php'>Регистрация</a></li>";
                                }
                                ?>
                            </ul>
                            <p class="menu__mobile_nav-text">
                                тел. 8 (3812) 955-055
                            </p>
                            <p class="menu__mobile_nav-text">
                                Аквабан ВКонтакте
                            </p>
                            <p class="menu__mobile_nav-text">
                                e-mail. mailto:955055@bk.ru
                            </p>
                        </div>
                    </nav>
                        <ul class="menu__nav-list hide">
                            <?php
                            if($_SESSION['user']) {
                                if ($_SESSION['user']['role'] == 'admin') {
                                    echo "<li class='menu__item'><a class='menu__link' href='admin/index.php'>Админ-панель</a></li>";
                                
                                }
                                echo "<li class='menu__item'><a class='menu__link' href='assets/php/logout.php'>Выйти</a></li>";
                                if ($_SESSION['user']['role'] == 'user') {
                                    echo "<li class='menu__item'><a href='./profile.php'><img class='menu__user-icon' src='./assets/images/icon/user-profile.png' alt='#'></a></li>";
                                }
                            }else {
                                echo "<li class='menu__item'><a class='menu__link' href='login.php'>Войти</a></li>";
                                echo "<li class='menu__item'><a class='menu__link' href='registr.php'>Регистрация</a></li>";
                            }
                            ?>
                        </ul>
                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </header>
        <main class="page">
            <div class="main__profile profile _container">
                <div class="profile__container">
                    <div class="profile__data">
                        <img src="./assets/images/icon/user_img.png" alt="user-profile" class="prifile__image">
                        <div class="profile__info">
                            <h1 class="profile__name">Иванов Иван</h1>
                            <h2 class="profile__email">email@mail.ru</h2>
                            <h3 class="profile__tel">+7(999)000 11-22</h3>
                            <button class="button-editing button">Редактировать профиль</button>
                        </div>
                    </div>
                    <div class="profile__promo">
                        <div class="profile__promo-title">
                            Промокод:
                        </div>
                        <div class="profile__promo-field">
                            <p class="profile__promo-code">
                                RAND12345
                            </p>
                        </div>
                    </div>
                </div>
                <div class="profile__promo-info promo">
                    <div class="promo__line">
                        
                    </div>
                    <div class="promo__info">
                        Каждые 10 покупок вам дается промокод на бесплатную мойку "Стандарт"
                    </div>
                </div>
                <div class="profile__orders orders">
                    <div class="orders__title">Текущий заказ:</div>
                    <ul class="orders__block">
                            <div class="orders__items">
                                <p class="orders__item"></p>
                                <p class="orders__item"></p>
                                <p class="orders__item"></p>
                                <p class="orders__item"></p>
                            </div>
                        </ul>
                </div>
                <div class="profile__orders orders">
                    <div class="orders__title">История заказов:</div>
                    <div id="orders__container" class="orders__container">
                        <div class="orders__block">
                            
                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <div class="orders__block">

                        </div>
                        <button class="button btn-show" id="showMoreBtn" onclick="showMore()">Показать больше</button>
                        <button class="button btn-hide" id="hideAllBtn" onclick="showMore()">Скрыть</button>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
             <img src="./assets/images/logo/header-logo.png" alt="logo">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/show_more_orders.js"></script>

</body>

</html>