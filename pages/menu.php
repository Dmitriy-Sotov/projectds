<?php
$title = 'Меню';
$root = '../';
$bg = 'menu-img';
require '../layout/header.php';
?>
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
<?php require '../layout/footer.php'; ?>