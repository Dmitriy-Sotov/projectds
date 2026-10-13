<?php
$title = 'Вход';
$root = '../';
$bg = 'login-img';
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
    <p class="name_coffee_shop">Авторизация</p>
</div>
</div>
<main class="main-menu">
    <section class="login">
        <p class="transparent-sections-heading">Авторизация</p>
        <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
        <form class="login-form">
            <p class="login-form__heading">Вход</p>
            <input type="text" placeholder="Логин">
            <input type="text" placeholder="Пароль">
            <button class="accent_button btn-login" type="submit">Войти</button>
            <p class="login-form__text">Если нет аккаунта? <a class="login-form__link" href="registration.php">Зарегистрироваться</a>
            </p>
        </form>
    </section>
</main>
<?php require '../layout/footer.php'; ?>