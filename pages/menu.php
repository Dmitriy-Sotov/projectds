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
    <title>Меню</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/логотип.ico" type="image/x-icon">
</head>
<body class="<?php echo $theme; ?>">
<div class="block-header">
    <div class="dark-block"></div>
    <div class="img-header menu-img"></div>
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
        <p class="name_coffee_shop">Меню</p>
        <p class="slogan">Закажи и попробуй редкий экзотический <br> кофе и чай</p>
        <a class="booking_button-link" href="#">
            <button class="accent_button order-btn-main">Заказать</button>
        </a>
    </div>
</div>
<main class="main-menu">
    <section class="catalog">
        <p class="transparent-sections-heading">Экзотические сорта кофе</p>
        <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
        <div class="block-products">
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Копи-Лювак.png" alt="Картинка Копи лювак">
                </div>
                <p class="card-name">Копи-Лювак</p>
                <p class="card-description">Копи Лювак — элитный сорт
                    кофе из зерен, прошедших через
                    пищеварительную систему циветты (мусанга)</p>
                <p class="card-sale">7998 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Черный-Бивор.png" alt="Картинка Черный бивор">
                </div>
                <p class="card-name">Чёрный Бивор</p>
                <p class="card-description">Редкий сорт кофе с индонезийского острова Ява. Зерна проходят двойную
                    ферментацию</p>
                <p class="card-sale">4538 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Геша.png" alt="Картинка Геша">
                </div>
                <p class="card-name">Геша</p>
                <p class="card-description">Легендарный сорт кофе из Эфиопии с цветочно-жасминовым ароматом. Отличается
                    яркой чайной текстурой</p>
                <p class="card-sale">3500 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Сидамо.png" alt="Картинка Сидамо">
                </div>
                <p class="card-name">Сидамо</p>
                <p class="card-description">Эфиопский сорт кофе с ярким цитрусово-ягодным профилем и нотками
                    жасмина.</p>
                <p class="card-sale">2759 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
        </div>
    </section>
    <section class="catalog">
        <p class="transparent-sections-heading">Экзотические сорта чая</p>
        <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
        <div class="block-products">
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Да-Хун-Пао.png" alt="Картинка Да хун пао">
                </div>
                <p class="card-name">Да Хун Пао</p>
                <p class="card-description">Легендарный китайский улун из скал Уишань. Обладает глубоким минеральным
                    вкусом с нотами поджаренных орехов,</p>
                <p class="card-sale">1936 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Лапсанг-Сушонг.png" alt="Картинка Лапсанг Сушонг">
                </div>
                <p class="card-name">Лапсанг Сушонг</p>
                <p class="card-description">Китайский чёрный чай с уникальным дымным ароматом, копчёный над сосновыми
                    дровами.</p>
                <p class="card-sale">2489 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Панда-Дунг-Ти.png" alt="Картинка Панда дунг ти">
                </div>
                <p class="card-name">Панда Дунг Ти</p>
                <p class="card-description">Элитный зелёный чай из провинции Сычуань, удобряемый только помётом
                    панд.</p>
                <p class="card-sale">3589 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/image-Серебрянные-Иглы.png" alt="Картинка Серебрянные иглы">
                </div>
                <p class="card-name">Серебряные Иглы</p>
                <p class="card-description">Самый элитный белый чай из Китая. Обладает
                    нежнейшим цветочно-сладким вкусом с нотами дыни</p>
                <p class="card-sale">4500 руб.</p>
                <button class="accent_button order-btn">Заказать</button>
            </div>
        </div>
    </section>

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