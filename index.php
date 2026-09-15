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
    <title>Главная страница</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/логотип.ico" type="image/x-icon">
</head>
<body class="<?php echo $theme; ?>">

<div class="block-header">
    <div class="dark-block"></div>
    <div class="img-header main-img"></div>
    <header>
        <img class="logo" src="assets/images/логотип.png" alt="Логотип">
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="index.php">Главная</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/about.php">О нас</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/menu.php">Меню</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/reviews.php">Отзывы</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/accessories.php">Аксессуары</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/sale.php">Акция</a></li>
            </ul>
        </nav>
        <div class="icons">
            <a href="pages/support.php"><img class="header-support-icons" src="assets/images/support.png"
                                              alt="Поддержка"></a>
            <a href="pages/login.php"><img class="header-entrance-icons" src="assets/images/entrance.png"
                                            alt="Вход"></a>
            <a class="burger-btn" href="#"><img class="header-burger-icons" src="assets/images/burger.png" alt="burger"></a>
        </div>
    </header>
    <div class="header__text">
        <p class="name_coffee_shop">Кофейная и Чайная <br> Экзотика</p>
        <p class="slogan">Откройте для себя мир редких напитков</p>
        <a class="booking_button-link" href="#table-reservation">
            <button class="accent_button booking-btn">Забронировать столик</button>
        </a>
    </div>

</div>


<main>
    <div class="container">
        <section class="our-team transparent-sections">
            <p class="transparent-sections-heading">Наша команда</p>
            <img class="line-pattern" src="assets/images/the_line_pattern-our-team.png" alt="Линия узор">
            <div class="block_our-team tr_section">
                <div class="block-employee">
                    <div class="block-employee_avatar">
                        <img src="assets/images/avatar-the_main_barista.png" alt="Аватар-Главный-бариста">
                    </div>
                    <div class="block-employee_text">
                        <div class="marker-heading marker-heading-one">
                            <p class="roles_text">Главный бариста</p>
                        </div>
                        <p class="description_text">
                            Японец из Киото, 32 года: с татуировками цветущей сакуры на руках, мастер
                            церемониального матча и эфиопского копылуа. Каждое утро проводит ритуал
                            заваривания с нотками васаби и золотой пылью, превращая эспрессо в
                            поэзию вкуса. Гости обожают его спокойный дзен и идеальную пенку — он
                            душа кофейни
                        </p>
                        <div class="dividing-line">
                        </div>
                    </div>

                </div>
                <div class="block-employee">
                    <div class="block-employee_text">
                        <div class="block-employee_avatar--phone">
                            <img src="assets/images/avatar-the_manager.png" alt="Аватар-Менеджер">
                        </div>
                        <div class="marker-heading marker-heading-two">
                            <p class="roles_text">Менеджер</p>
                        </div>
                        <p class="description_text">
                            Британец из Кента, 42 года: твидовый пиджак, портфель, серебряная запонка
                            в виде кофейного зерна. Эксперт по элитным пуэру и робусте. Проводит
                            мастер-классы с мёдом и пряностями, его баритон и легенды о плантациях
                            завораживают. Кофейня под его началом — эпицентр изысканных букетов.
                        </p>
                        <div class="dividing-line">

                        </div>
                    </div>
                    <div class="block-employee_avatar block-employee_avatar--disabled">
                        <img src="assets/images/avatar-the_manager.png" alt="Аватар-Менеджер">
                    </div>
                </div>
                <div class="block-employee">
                    <div class="block-employee_avatar">
                        <img src="assets/images/avatar-tea_sommelier.png" alt="Аватар-Сомелье-чая">
                    </div>
                    <div class="block-employee_text">
                        <div class="marker-heading marker-heading-three">
                            <p class="roles_text">Сомелье чая</p>
                        </div>
                        <p class="description_text">
                            Китаянка из Фуцзяни, 29 лет: с длинной косой и нефритовыми браслетами,
                            хранительница традиций улунных чаев с лотосом и орхидеей. Консультирует
                            по многоступенчатым заваркам в глиняных гайванах, раскрывая слои вкуса
                            от цветочного до медового. Её тихая мудрость делает каждый визит уроком
                            гурмана.
                        </p>
                        <div class="dividing-line">

                        </div>
                    </div>
                </div>
                <div class="block-employee">
                    <div class="block-employee_text">
                        <div class="block-employee_avatar--phone">
                            <img src="assets/images/avatar-assistant-barista.png" alt="Аватар-Ассистент-бариста">
                        </div>
                        <div class="marker-heading marker-heading-four">
                            <p class="roles_text">Ассистент бариста</p>
                        </div>
                        <p class="description_text">
                            Британец из Кента, 42 года: твидовый пиджак, портфель, серебряная запонка
                            в виде кофейного зерна. Эксперт по элитным пуэру и робусте. Проводит
                            мастер-классы с мёдом и пряностями, его баритон и легенды о плантациях
                            завораживают. Кофейня под его началом — эпицентр изысканных букетов.
                        </p>
                        <div class="dividing-line">

                        </div>
                    </div>
                    <div class="block-employee_avatar block-employee_avatar--disabled">
                        <img src="assets/images/avatar-assistant-barista.png" alt="Аватар-Ассистент-бариста">
                    </div>
                </div>
            </div>
        </section>
                <section class="About-the-varieties transparent-sections">
                    <p class="transparent-sections-heading">Про сорта кофе и чая</p>
                    <img class="line-pattern" src="assets/images/the_line_pattern-about-the-varieties.png" alt="Линия узор">
                    <div class="block-about-the-varieties tr_section">
                        <div class="block-varieties block-varieties--one">
                            <div class="block-varieties-img">
                                <img src="assets/images/Картинка-про-сорта-кофе.png" alt="Экзотические сорта кофе">
                            </div>
                            <div class="block-varieties_text">
                                <div class="marker-heading marker-heading-five">
                                    <p class="roles_text">Экзотические сорта кофе</p>
                                </div>
                                <p class="text-varieties">
                                    Экзотические кофе растут на диких
                                    плантациях в джунглях и горах.
                                    Зерна собирают вручную — малые урожаи
                                    делают их редкими. Уникальная обработка:
                                    животные, вулканы, ферментация дают
                                    необычный вкус. Ноты шоколада, фруктов,
                                    орехов с бархатным послевкусием.
                                    Элита мира — закажите приключение в
                                    чашке!
                                </p>

                            </div>
                        </div>
                        <div class="block-varieties block-varieties--two">
                            <div class="block-varieties_text">
                                <div class="marker-heading marker-heading-five">
                                    <p class="roles_text">Экзотические сорта чая</p>
                                </div>
                                <p class="text-varieties">
                                    Экзотические чаи создают мастера Азии по
                                    древним традициям. Ручной сбор юных почек
                                    набранных на склонах. Ферментация от белого
                                    до улун — раскрывает ароматы. Цветы, мед,
                                    дым, сладость без горечи в каждой чашке.
                                    Смеси с фруктами и специями — магия вкуса у
                                    нас!
                                </p>
                            </div>
                            <div class="block-varieties-img block-varieties-img-two">
                                <img src="assets/images/Картинка-про-сорта-чая.png" alt="Экзотические сорта чая">
                            </div>
                        </div>

                    </div>
                </section>
                <section class="table-reservation" id="table-reservation">
                    <p class="table-reservation-sections-heading">Бронь столика</p>
                    <img class="line-pattern" src="assets/images/the_line_pattern-our-team.png" alt="Линия узор">
                    <div class="block-table-reservation">
                        <form class="form-table-reservation">
                            <p class="form-table-reservation-heading">Бронь столика</p>
                            <input type="text" placeholder="Имя">
                            <input type="tel" placeholder="+7 (___) Телефон">
                            <input type="text" placeholder="Адрес кофейни">
                            <input type="text" placeholder="Гости">
                            <input type="text" placeholder="Дата">
                            <button class="accent_button booking-btn" id="Book_table" type="submit" formmethod="post">Забронировать
                                столик
                            </button>
                        </form>
                        <div class="img-table-reservation">
                            <img src="assets/images/Фото-для-блока-бронь-столика.png" alt="Фото бронь столика">
                        </div>
                    </div>
                </section>
    </div>
</main>
<footer>
    <div class="block-footer-one">
        <div class="group-img">
            <img class="footer-logo" src="assets/images/Логотоип-footer.png" alt="Логотип-footer">
            <img src="assets/images/line-footer.png" alt="Линия-footer">
            <div class="block-icons">
                <div class="icon-tell">
                    <img src="assets/images/icons-call.png" alt="Иконка телефона">
                    <a href="tel:89823107546">89823107546</a>
                </div>
                <div class="icon-email">
                    <img src="assets/images/icons-email.png" alt="Иконка email">
                    <a href="mailto:sotov@dmitriy-alexandrovich.ru">sotov@dmitriy-alexandrovich.ru</a>
                </div>
            </div>
        </div>
        <div class="group-navigation">
            <nav class="navigation-footer">
                <ul class="navigation-footer__list">
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="index.php">Главная</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="pages/about.php">О нас</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="pages/menu.php">Меню</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="pages/reviews.php">Отзывы</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="pages/accessories.php">Аксессуары</a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link" href="pages/sale.php">Акция</a></li>
                </ul>
            </nav>
        </div>
        <div class="group-social-network">
            <p>Наши Соцсети</p>
            <div class="block-social">
                <img src="assets/images/icons-Vk.svg" alt="Иконка Vk">
                <img src="assets/images/icons-Tg.svg" alt="Иконка Tg">
                <img src="assets/images/icons-Youtube.svg" alt="Иконка Youtube">
                <img src="assets/images/icons-Twitter.svg" alt="Иконка Twitter">
            </div>
        </div>
    </div>
    <div class="block-footer-two">
        <img class="group-pattern" src="assets/images/line-footer-pattern.png" alt="Линия узор">
        <div class="group-text">
            <div class="Copyright">© Copyright 2026 | Sotov</div>
            <div class="Discover">Discover the world of rare naps</div>
        </div>
    </div>
</footer>
<script src="assets/script/main.js"></script>
</body>
</html>