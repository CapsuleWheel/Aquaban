<?php
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
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <a href="index.html" class="header__logo">
                    <img class="header__logo-img" src="./assets/images/logo/header-logo.png" alt="logo">
                </a>
                <nav class="header__menu menu">
                    <img class="menu__logo" src="./assets/images/logo/contacts-logo.png" alt="">
                    <ul class="menu__nav-list">
                        <li class="menu__item"><a href="#price" class="menu__link">Аквабан - онлайн</a></li>
                        <li class="menu__item"><a href="#price" class="menu__link">Цены</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Акции</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Отзывы</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Контакты</a></li>
                    </ul>
                    <div class="menu__mobile_nav-contacts">
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
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
        </header>
        <main class="page">
            <div class="page__main-block main-block">
                <div class="main-block__body  _container">
                    <div class="main-block__container">
                        <div class="main-block__text">
                            <div class="main-block__slogan">
                                Аквабан - лучшая туннельная автомойка в Омске. Работаем быстро и качественно 24 часа в сутки.
                            </div>
                            <div class="main-block__desc desc">
                                <div class="desc__item">
                                    <p>24/7</p>
                                </div>
                                <div class="desc__item">
                                    <p>
                                        Современные
                                        <br>
                                        технологии
                                    </p>
                                </div>
                                <div class="desc__item">
                                    <p>
                                        Любая форма
                                        <br>
                                        оплаты
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="main-block__image">
                            <img src="./assets/images/pictures/img-header.png" alt="">
                        </div>
                    </div>
                    <div class="main-block__mobile-container _mobile-container">
                        <div class="main-block__slogan">
                            Аквабан - лучшая туннельная автомойка в Омске. Работаем быстро и качественно 24 часа в сутки.
                        </div>
                        <div class="main-block__image">
                            <img src="./assets/images/pictures/img-header.png" alt="">
                        </div>
                        <div class="main-block__desc desc">
                            <div class="desc__item">
                                <p>24/7</p>
                            </div>
                            <div class="desc__item">
                                <p>
                                    Современные
                                    <br>
                                    технологии
                                </p>
                            </div>
                            <div class="desc__item">
                                <p>
                                    Любая форма
                                    <br>
                                    оплаты
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-block__sections sections">
                    <div class="sections__wrapper">
                        <div id="broadcast" class="sections__container broadcast _container">
                            <div class="broadcast__image">
                                <img src="./assets/images/pictures/aqua-online_image.png" alt="">
                            </div>
                            <div class="broadcast__info">
                                <div class="broadcast__title">
                                    Аквабан - онлайн
                                </div>
                                <div class="broadcast__text">
                                    У нас вы можете отслеживать загруженность автомойки и качество выполнения работ в режиме прямой онлайн-трансляции.
                                </div>
                                <a href="#" class="broadcast__button button">
                                    Смотреть
                                </a>
                            </div>
                        </div>
                        <div id="price" class="sections__container price _container">
                            <div class="sections__container-title">
                                Цены    
                            </div>
                            <div class="price__cards">
                                <div class="price__card">
                                    <div class="price__image">
                                        <img src="./assets/images/prise_card/econom.png" alt="">
                                    </div>
                                    <a href="#" class="price__button button _btn-popup" id="button1">
                                        Эконом 400 руб.
                                    </a>
                                </div>
                                <div class="price__card">
                                    <div class="price__image">
                                        <img src="./assets/images/prise_card/standart.png" alt="">
                                    </div>
                                    <a href="#" class="price__button button" id="button2">
                                        Стандарт 500 руб.
                                    </a>
                                </div>
                                <div class="price__card">
                                    <div class="price__image">
                                        <img src="./assets/images/prise_card/maximum.png" alt="">
                                    </div>
                                    <a href="#" class="price__button button" id="button3">
                                        Максимум 650 руб.
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="stocks" class="sections__container stocks _container">
                            <div class="sections__container-title">
                                Акции  
                            </div>
                            <div class="swiper">
                                <div class="swiper__tape">
                                    <div class="swiper__image-container accent">
                                        <button class="swiper__button swiper__prev"></button>
                                        <button class="swiper__button swiper__next"></button>
                                        <img src="./assets/images/pictures/slide.png" alt="" class="swiper__image">
                                    </div>
                                    <div class="swiper__image-container">
                                        <button class="swiper__button swiper__prev"></button>
                                        <button class="swiper__button swiper__next"></button>
                                        <img src="./assets/images/pictures/slide.png" alt="" class="swiper__image">
                                    </div>
                                    <div class="swiper__image-container">
                                        <button class="swiper__button swiper__prev"></button>
                                        <button class="swiper__button swiper__next"></button>
                                        <img src="./assets/images/pictures/slide.png" alt="" class="swiper__image">
                                    </div>
                                    <div class="swiper__image-container">
                                        <button class="swiper__button swiper__prev"></button>
                                        <button class="swiper__button swiper__next"></button>
                                        <img src="./assets/images/pictures/slide.png" alt="" class="swiper__image">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__counter">
                                <div class="swiper__dot accent"></div>
                                <div class="swiper__dot"></div>
                                <div class="swiper__dot"></div>
                                <div class="swiper__dot"></div>
                            </div>
                        </div>
                        <div id="reviews" class="sections__container _container">
                            <div class="sections__container-title">
                                Отзывы 
                            </div>
                            <div class="reviews__container reviews ">
                                <div class="reviews__content">
                                    <div class="reviews__info">
                                        Нам важен каждый отзыв, мы учитываем все ваши замечания.
                                    </div>
                                    <form action="./assets/php/create_review.php" class="reviews__form" method="post">
                                        <input type="text" name="name" required placeholder="Ваше имя" class="reviews__input-name" >
                                        <textarea name="review" placeholder="Ваш отзыв" class="reviews__textarea"></textarea>
                                        <input type="submit" class="reviews__button button">
                                    </form>
                                </div>
                                <div class="reviews__image">
                                    <img src="./assets/images/pictures/revew_image.png" alt="">
                                </div>
                            </div>
                            <div class="reviews__list">
                                <?php
                                foreach ($reviews as $review) {
                                    echo '<h1 class="review-name">' . $review['name'] . '</h1>';
                                    echo '<h2 class="review-text">' . $review['text'] . '</h2>';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="contacts"class="sections__container _container">
                            <div class="sections__container-title">
                                Контакты
                            </div>
                            <div class="sections__container-contacts contacts">
                                <div class="contacts__content">
                                    <div class="contacts__block">
                                        <div class="contacts__block-info">
                                            <div class="contacts__title">
                                                Аквабан
                                            </div>
                                            <div class="contacts__texts">
                                                <p class="contacts__text">
                                                    Это моечный комплекс нового поколения, состоящий из ряда модулей, по которым автомобили передвигаются с помощью специального транспортера. 
                                                </p>
                                                <p class="contacts__text">
                                                    Благодаря современным технологиям мойка автомобиля в “Аквабан” займёт всего 5 минут и сохранит наш бюджет.
                                                </p>
                                            </div>
                                        </div>
                                        <img class="contacts__logo" src="./assets/images/logo/contacts-logo.png" alt="logo">
                                    </div>
                                    <div class="contacts__desc">
                                        <div class="contacts__desc-item">
                                            <p class="contacts__desc-number">
                                                15 + 
                                            </p>
                                            <p class="contacts__desc-text">
                                                лет опыта <br> и совершенствования
                                            </p>
                                        </div>
                                        <div class="contacts__desc-item">
                                            <p class="contacts__desc-number">
                                                100 + 
                                            </p>
                                            <p class="contacts__desc-text">
                                                специалистов - наша гордость <br> и главный ресурс
                                            </p>
                                        </div>
                                        <div class="contacts__desc-item">
                                            <p class="contacts__desc-number">
                                                20 000 + 
                                            </p>
                                            <p class="contacts__desc-text">
                                                довольных клиентов <br> каждый месяц
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contacts__info">
                                    <div class="contacts__info-column column">
                                        <div class="column__item">
                                            <p class="column__title">
                                                Адреса:
                                            </p>
                                            <p class="column__text">
                                                ул. Конева, 18
                                            </p>
                                            <p class="column__text">
                                                ул. Лукашевича, 14/6
                                            </p>
                                        </div>
                                        <div class="column__item">
                                            <p class="column__text">
                                                тел. 8 (3812) 955-055
                                            </p>
                                            <p class="column__text">
                                                Аквабан ВКонтакте
                                            </p>
                                            <p class="column__text">
                                                e-mail. mailto:955055@bk.ru
                                            </p>
                                        </div>
                                        <div class="column__item">
                                            <p class="column__title">
                                                Время работы:
                                            </p>
                                            <p class="column__text">
                                                Ежедневно 24 часа
                                            </p>
                                            <p class="column__title">
                                                Перерыв:
                                            </p>
                                            <p class="column__text">
                                                01:00 - 04:00 Пн-Чт
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contacts__map">
                                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaa18175ac962ad628ed54ad3072a97ea2cb03090424f95c0bc8cfcddb034ce93&amp;source=constructor" width="499" height="386" frameborder="0"></iframe>
                                    </div>
                                    <div class="contacts__map-mobile">
                                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaa18175ac962ad628ed54ad3072a97ea2cb03090424f95c0bc8cfcddb034ce93&amp;source=constructor" width="260" height="201" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div class="contacts__content">
                                    <div class="contacts__title">
                                        Мы на связи
                                    </div>
                                    <div class="contacts__texts">
                                        <p class="contacts__text">
                                            Напишите нам, если остались вопросы. Ответим каждому.
                                        </p>
                                    </div>
                                    <form action="./assets/php/create_application.php" class="contacts__form" method="post">
                                        <div class="contacts__input-block">
                                            <input type="text" name="name" required placeholder="Ваше имя" class="contacts__input-name" >
                                            <input type="tel" name="tel" required placeholder="Номер телефона" class="contacts__input-number" >
                                            <input type="submit" class="contacts__button button">
                                            <p class="contacts__warning">Нажимая кнопку «Отправить», вы соглашаетесь на обработку персональных данных в соответствии с Политикой конфиденциальности</p>
                                        </div>
                                        <textarea name="application" placeholder="Опишите ваш вопрос" class="contacts__textarea"></textarea>
                                    </form>
                                    <form action="./assets/php/create_application.php" class="contacts__form-mobile" method="post">
                                        <div class="contacts__input-block">
                                            <input type="text" name="name" required placeholder="Ваше имя" class="contacts__input-name" >
                                            <input type="tel" name="tel" required placeholder="Номер телефона" class="contacts__input-number" >
                                            <textarea name="application" placeholder="Опишите ваш вопрос" class="contacts__textarea"></textarea>
                                            <p class="contacts__warning">
                                                Нажимая кнопку «Отправить», вы соглашаетесь на обработку персональных данных в соответствии 
                                                с Политикой конфиденциальности
                                            </p>
                                            <input type="submit" class="contacts__button button">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer _container">
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
        
        <div class="popup" id="popup1">
            <div class="popup__content">
                <img src="./assets/images/prise_card/econom__popup.png" alt="" class="popup__image">
                <div class="popup__info">
                    <div class="popup__title">
                        Эконом
                    </div>
                    <div class="popup__text">
                    Предварительная мойка 1-фазный автошампунь Арки высокого давления 
                    Мойка автоматизированными щетками Сушка турбовентиляторами
                    </div>
                    <div class="popup__price">
                        450 руб.
                    </div>
                </div>
                <button class="close-btn">Закрыть</button>
            </div>
        </div>

        <div class="popup" id="popup2">
            <div class="popup__content">
                <img src="./assets/images/prise_card/standart__popup.png" alt="" class="popup__image">
                <div class="popup__info">
                    <div class="popup__title">
                        Стандарт
                    </div>
                    <div class="popup__text">
                        Пакет ЭКОНОМ + Полироль трехцветный Продувка сжатым воздухом Дотирка
                    </div>
                    <div class="popup__price">
                        550р.
                    </div>
                </div>
                <button class="close-btn">Закрыть</button>
            </div>
        </div>

        <div class="popup" id="popup3">
            <div class="popup__content">
                <img src="./assets/images/prise_card/maximum__popup.png" alt="" class="popup__image">
                <div class="popup__info">
                    <div class="popup__title">
                        Максимум
                    </div>
                    <div class="popup__text">
                    Пакет СТАНДАРТ + 2-фазный шампунь Тефлоновое покрытие Чернение колес
                    </div>
                    <div class="popup__price">
                        700р.
                    </div>
                </div>
                <button class="close-btn">Закрыть</button>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
        <script src="./assets/js/script.js"></script>
        <script src="./assets/js/swiper.js"></script>
        <script src="./assets/js/modal.js"></script>
    </div>
</body>
</html>