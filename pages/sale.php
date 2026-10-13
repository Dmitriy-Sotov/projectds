<?php
$title = 'Акция';
$root = '../';
$bg = 'sale-img';
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
    <p class="name_coffee_shop">Акция</p>
    <p class="slogan slogan-sale">Мы проводим акцию по приготовлению экзотических сортов кофе и чая</p>
</div>
</div>
<main class="main-sale">
    <div class="container">
        <section class="sale">
            <p class="transparent-sections-heading">Акция</p>
            <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
            <div class="block-sale">
                <div class="img-glass">
                    <img src="../assets/images/img-glass.png" alt="">
                </div>
                <div class="block-sale__text">
                    <p class="block-sale__heading">
                        Экзотические <span>сорта</span> в каждой кружке !
                    </p>
                    <p class="block-sale__description">Приглашаем на уникальную акцию! Погрузитесь в ритуалы
                        приготовления кофе и чая из экзотических
                        сортов: от редких эфиопских арабик с ягодными нотками до тайских улун с цветочными
                        ароматами.</p>
                    <button class="sale-btn"><a href="menu.php">Выбрать напиток</a></button>
                    <div class="block-sale-avatars">
                        <img src="../assets/images/img-avatar-sale.png" alt="Аватарки В Акции">
                        <div class="group-stars-text">
                            <img class="sale-stars" src="../assets/images/img-stars.png" alt="Звезды">
                            <p class="sale-text">1500+отзывов</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>
<?php require '../layout/footer.php'; ?>