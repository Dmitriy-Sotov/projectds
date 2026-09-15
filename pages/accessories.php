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
    <div class="img-header accessories-img"></div>
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
        <p class="name_coffee_shop">Аксессуары</p>
        <p class="slogan">Купи и создавай экзотику дома</p>
        <a class="booking_button-link" href="#catalog">
            <button class="accent_button buy-btn-main">Купить</button>
        </a>
    </div>
</div>
<main class="main-menu">
    <section class="catalog" id="catalog">
        <p class="transparent-sections-heading">Аксессуары для кофе</p>
        <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
        <div class="block-products">
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Термометр.png" alt="Картинка Термометра">
                </div>
                <p class="card-name">Термометр</p>
                <p class="card-description">Термометр для регулирования температуры кофе и молока тк это очень важно при
                    создании кофе</p>
                <p class="card-sale">569 руб.</p>
                <a href="products.php" class="accent_button buy-btn">Купить</a>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Весы.png" alt="Картинка Весов">
                </div>
                <p class="card-name">Весы</p>
                <p class="card-description">Весы не менее важный аксессуары потомучто вес кофе очень важен в экзотике</p>
                <p class="card-sale">2450 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Кофемолка.png" alt="Картинка Кофемолки">
                </div>
                <p class="card-name">Кофемолка</p>
                <p class="card-description">Кофемолка нужна для перемалования кофе и именно ручная потомучто так арамат кофе раскроется полностью</p>
                <p class="card-sale">2568 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Турка.png" alt="Картинка Турки">
                </div>
                <p class="card-name">Турка</p>
                <p class="card-description">Турка основной предмет для варки кофе, при правильной готовке кофе раскрывается полностью</p>
                <p class="card-sale">2800 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
        </div>
    </section>
    <section class="catalog">
        <p class="transparent-sections-heading">Аксессуары для чая</p>
        <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
        <div class="block-products">
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Чайник.png" alt="Картинка чайника">
                </div>
                <p class="card-name">Чайник</p>
                <p class="card-description">Чайник Для проливовчая это как ритуал чтобы чай был вкусным и насыщенным</p>
                <p class="card-sale">4389 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Сито.png" alt="Картинка сито">
                </div>
                <p class="card-name">Сито</p>
                <p class="card-description">Сито нужно чтобы чай был насыщеным и ничего не помешало чаепитию</p>
                <p class="card-sale">302 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Гайвань.png" alt="Картинка гайвани">
                </div>
                <p class="card-name">Гавань</p>
                <p class="card-description">Гавань - Ритуальная посуда для проливок чая, Чай это искуство, а с проливами он будет вкуснее</p>
                <p class="card-sale">2356 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Подставка.png" alt="Картинка подставки">
                </div>
                <p class="card-name">Подставка</p>
                <p class="card-description">Подставка выполненна из дерева также для проливов очень удобно и можно насладится чаем по полной</p>
                <p class="card-sale">569 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
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