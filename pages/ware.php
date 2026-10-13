<?php
$title = 'Товар';
$root = '../';
$bg = 'product-img';
require '../layout/header.php';
?>
<div class="icons">
    <a href="support.php"><img class="header-support-icons" src="../assets/images/support.png"
                               alt="Поддержка"></a>
    <a href="login.php"><img class="header-entrance-icons" src="../assets/images/entrance.png"
                             alt="Вход"></a>
    <a class="burger-btn" href="#"><img class="header-burger-icons" src="../assets/images/burger.png"
                                        alt="burger"></a>
</div>
</header>
<div class="header__text">
    <p class="name_coffee_shop">Карточка товара</p>
</div>
</div>
<main class="main-product">
    <div class="container">
        <section class="product">
            <div class="product-block">
                <img src="../assets/images/im-1.png" alt="Термометр">
                <div class="product-block__text">
                    <p class="card-name">Термометр</p>
                    <p class="card-description">Небольшой цифровой термометр для кофе — быстро измеряет температуру
                        напитка
                        зондом, показывает точные значения в ±0.5°C. Компактный, мгновенный результат за секунды,
                        помогает
                        подавать кофе в идеальной температуре.</p>
                    <p class="product-block__price">569 руб.</p>
                    <a href="products.php" class="accent_button buy-btn">Купить</a>
                </div>
            </div>
        </section>
    </div>
</main>
<?php require '../layout/footer.php'; ?>