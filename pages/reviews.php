<?php
date_default_timezone_set('Asia/Yekaterinburg');

$hour = (int)date('H');

if ($hour >= 20 || $hour < 6) {
    $theme = 'night';
} else {
    $theme = 'day';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/логотип.ico" type="image/x-icon">
</head>
<body class="<?php echo $theme; ?>">
<div class="block-header">
    <div class="dark-block"></div>
    <div class="img-header reviews-img"></div>
    <header>
        <img class="logo" src="../assets/images/логотип.png" alt="Логотип">
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="../index.php">Главная</a></li>
                <li class="navigation__item"><a class="navigation__link" href="about.php">О нас</a></li>
                <li class="navigation__item"><a class="navigation__link" href="menu.php">Меню</a></li>
                <li class="navigation__item"><a class="navigation__link" href="reviews.php">Отзывы</a></li>
                <li class="navigation__item"><a class="navigation__link" href="accessories.php">Аксессуары</a></li>
                <li class="navigation__item"><a class="navigation__link" href="sale.php">Акция</a></li>
            </ul>
        </nav>
        <div class="icons">
            <a href="support.php"><img class="header-support-icons" src="../assets/images/support.png"
                                        alt="Поддержка"></a>
            <a href="login.php"><img class="header-entrance-icons" src="../assets/images/entrance.png"
                                      alt="Вход"></a>
            <a class="burger-btn" href="#"><img class="header-burger-icons" src="../assets/images/burger.png" alt="burger"></a>
        </div>
    </header>
    <div class="header__text">
        <p class="name_coffee_shop">Отзывы</p>
        <p class="slogan">Отавте мнение о нас, нам это очень важно</p>
        <a class="booking_button-link" href="#">
            <button class="accent_button review-btn">Оставить отзыв</button>
        </a>
    </div>
</div>
<main class="main-reviews">
    <div class="container">
        <section class="reviews">
            <p class="transparent-sections-heading">Отзывы</p>
            <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
            <div class="group-img-form">
                <form class="form-leave-review">
                    <p class="form-heading-review">Оставить отзыв</p>
                    <p class="form-slogan-review">Нам важно ваше мнение, чтобы стать еще лучше</p>
                    <div class="group-input-name-lastname">
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Фамилия">
                    </div>
                    <div class="group-input-reviews">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="+7 (___) Телефон">
                        <input type="text" placeholder="Адрес кофейни">
                        <input type="text" placeholder="Коментарии">
                    </div>
                    <button class="accent_button review-btn">Оставить отзыв</button>
                </form>

            </div>
        </section>
    </div>
</main>
<footer>
    <div class="block-footer-one">
        <div class="group-img">
            <img class="footer-logo" src="../assets/images/Логотоип-footer.png" alt="Логотип-footer">
            <img src="../assets/images/line-footer.png" alt="Линия-footer">
            <div class="block-icons">
                <div class="icon-tell">
                    <img src="../assets/images/icons-call.png" alt="Иконка телефона">
                    <a href="tel:89823107546">89823107546</a>
                </div>
                <div class="icon-email">
                    <img src="../assets/images/icons-email.png" alt="Иконка email">
                    <a href="mailto:sotov@dmitriy-alexandrovich.ru">sotov@dmitriy-alexandrovich.ru</a>
                </div>
            </div>
        </div>
        <div class="group-navigation">
            <nav class="navigation-footer">
                <ul class="navigation-footer__list">
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="../index.php">Главная</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="about.php">О нас</a>
                    </li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="menu.php">Меню</a>
                    </li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="reviews.php">Отзывы</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="accessories.php">Аксессуары</a>
                    </li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="sale.php">Акция</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="group-social-network">
            <p>Наши Соцсети</p>
            <div class="block-social">
                <img src="../assets/images/icons-Vk.svg" alt="Иконка Vk">
                <img src="../assets/images/icons-Tg.svg" alt="Иконка Tg">
                <img src="../assets/images/icons-Youtube.svg" alt="Иконка Youtube">
                <img src="../assets/images/icons-Twitter.svg" alt="Иконка Twitter">
            </div>
        </div>
    </div>
    <div class="block-footer-two">
        <img class="group-pattern" src="../assets/images/line-footer-pattern.png" alt="Линия узор">
        <div class="group-text">
            <div class="Copyright">© Copyright 2026 | Sotov</div>
            <div class="Discover">Discover the world of rare naps</div>
        </div>
    </div>
</footer>
<script src="../assets/script/main.js"></script>
</body>
</html>