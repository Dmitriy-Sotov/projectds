<?php
$title = 'О нас';
$root = '../';
$bg = 'about-img';
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
    <p class="name_coffee_shop">О нас</p>
    <p class="slogan">Информация про нашу кофейню</p>
</div>
</div>
<main>
    <div class="container">
        <section class="about-us">
            <p class="transparent-sections-heading">О нас</p>
            <img class="line-pattern" src="../assets/images/the_line_pattern-about-us.png" alt="Линия узор">
            <div class="block_about-us">
                <div class="block_text">
                    <p class="text-heading-about-us">О нас</p>
                    <p class="text-about-us">У нас уютная атмосфера для ценителей редких сортов кофе и чая: Копи
                        Лювак,
                        белый чай, улун, экзотические смеси.
                        Продаем аксессуары, которые можно протестировать на месте. Проводим акции:
                        мастер-классы по
                        ритуалам заваривания кофе и чая.
                        Попробуйте разные сорта экзотического кофе и чая! Бронируйте столик — экзотика
                        нарасхват. Приходите за уникальным
                        вкусом и теплом!</p>

                </div>
                <div class="block_img">
                    <img src="../assets/images/image-about-us.png" alt="Картинка О нас">
                </div>
            </div>
        </section>
    </div>
</main>
<?php require '../layout/footer.php'; ?>