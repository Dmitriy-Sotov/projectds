<?php
$title = 'Регистрация';
$root = '../';
$bg = 'registration-img';
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
    <p class="name_coffee_shop">Регистрация</p>
</div>
</div>
<main class="main-menu">
    <section class="registration">
        <p class="transparent-sections-heading">Регистрация</p>
        <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
        <form class="registration-form">
            <p class="registration-form__heading">Регистрация</p>
            <input type="text" placeholder="Имя">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Логин">
            <input type="text" placeholder="Пароль">
            <button class="accent_button btn-registration" type="submit">Войти</button>
            <p class="registration-form__text">Если есть аккаунт? <a class="registration-form__link" href="login.php">Войти</a>
            </p>
        </form>
    </section>
</main>
<?php require '../layout/footer.php'; ?>