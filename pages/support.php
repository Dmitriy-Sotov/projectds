<?php
$title = 'Поддержка';
$root = '../';
$bg = 'support-img';
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
    <p class="name_coffee_shop">Поддержка</p>
</div>
</div>
<main>
    <div class="content">
        <section class="support">
            <p class="transparent-sections-heading">Поддержка</p>
            <img class="line-pattern" src="../assets/images/the_line_pattern-catalog.png" alt="Линия узор">
            <form class="support-form">
                <input type="email" placeholder="Email">
                <textarea placeholder="Введите текст вопроса"></textarea>
                <button type="submit" class="accent_button support-btn">Отправить</button>
            </form>

        </section>
    </div>
</main>
<?php require '../layout/footer.php'; ?>