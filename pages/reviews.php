<?php
$title = 'Отзывы';
$root = '../';
$bg = 'reviews-img';
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
<?php require '../layout/footer.php'; ?>