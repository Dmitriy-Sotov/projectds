<?php
$title = 'Аксессуары';
$root = '../';
$bg = 'accessories-img';
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
                <p class="card-description">Весы не менее важный аксессуары потомучто вес кофе очень важен в
                    экзотике</p>
                <p class="card-sale">2450 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Кофемолка.png" alt="Картинка Кофемолки">
                </div>
                <p class="card-name">Кофемолка</p>
                <p class="card-description">Кофемолка нужна для перемалования кофе и именно ручная потомучто так арамат
                    кофе раскроется полностью</p>
                <p class="card-sale">2568 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Турка.png" alt="Картинка Турки">
                </div>
                <p class="card-name">Турка</p>
                <p class="card-description">Турка основной предмет для варки кофе, при правильной готовке кофе
                    раскрывается полностью</p>
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
                <p class="card-description">Гавань - Ритуальная посуда для проливок чая, Чай это искуство, а с проливами
                    он будет вкуснее</p>
                <p class="card-sale">2356 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/img-Подставка.png" alt="Картинка подставки">
                </div>
                <p class="card-name">Подставка</p>
                <p class="card-description">Подставка выполненна из дерева также для проливов очень удобно и можно
                    насладится чаем по полной</p>
                <p class="card-sale">569 руб.</p>
                <button class="accent_button buy-btn">Купить</button>
            </div>
        </div>
    </section>

</main>
<?php require '../layout/footer.php'; ?>