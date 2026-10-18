<?php
$title = 'Товар';
$root = '';
$bg = 'product-img';
$text_header = [];
$text_footer = [];
require 'layout/header.php';
?>
    <div class="icons">
        <a href="pages/support.php"><img class="header-support-icons" src="assets/images/support.png"
                                         alt="Поддержка"></a>
        <a href="pages/login.php"><img class="header-entrance-icons" src="assets/images/entrance.png"
                                       alt="Вход"></a>
        <a class="burger-btn" href="#"><img class="header-burger-icons" src="assets/images/burger.png" alt="burger"></a>
    </div>
    </header>
    <div class="header__text">
        <p class="name_coffee_shop">
            <?php
            $text_1 = 'Кофейная и Чайная';
            $text_2 = 'Экзотика';
            echo $text_1 . '<br>' . $text_2;
            ?>
        </p>
        <p class="slogan">
            <?php
            $text_3 = 'Откройте для себя мир редких напитков';
            echo $text_3;
            ?>
        </p>
        <a class="booking_button-link" href="#table-reservation">
            <button class="accent_button booking-btn">
                <?php
                $text_4 = 'Забронировать столик';
                echo $text_4;
                ?>
            </button>
        </a>
    </div>
    </div>
    <main>
        <div class="container">
            <section class="our-team transparent-sections">
                <p class="transparent-sections-heading">
                    <?php
                    $text_5 = 'Наша команда';
                    echo $text_5;
                    ?>
                </p>
                <img class="line-pattern" src="assets/images/the_line_pattern-our-team.png" alt="Линия узор">
                <div class="block_our-team tr_section">
                    <div class="block-employee">
                        <div class="block-employee_avatar">
                            <img src="assets/images/avatar-the_main_barista.png" alt="Аватар-Главный-бариста">
                        </div>
                        <div class="block-employee_text">
                            <div class="marker-heading marker-heading-one">
                                <p class="roles_text">
                                    <?php
                                    $text_6 = 'Главный бариста';
                                    echo $text_6;
                                    ?>
                                </p>
                            </div>
                            <p class="description_text">
                                <!--Задание 1-->
                                <?php
                                $text_7 = "
                            Японец из Киото, 32 года: с татуировками цветущей сакуры на руках, мастер
                            церемониального матча и эфиопского копылуа. Каждое утро проводит ритуал
                            заваривания с нотками васаби и золотой пылью, превращая эспрессо в
                            поэзию вкуса. Гости обожают его спокойный дзен и идеальную пенку — он
                            душа кофейни";
                                $arr_text = explode(' ', $text_7);
                                $num = 0;
                                for ($i = 0; $i < count($arr_text); $i++) {
                                    if ($arr_text[$i] == '') {
                                        continue;
                                    }
                                    $num++;
                                    if ($num % 2 == 0) {
                                        echo '<span style="color: #fd8e0d;">' . $arr_text[$i] . '</span> ';
                                    } else {
                                        echo '<span style="color: #734109;">' . $arr_text[$i] . '</span> ';
                                    }
                                }
                                ?>
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
                                <p class="roles_text">
                                    <?php
                                    $text_8 = 'Менеджер';
                                    echo $text_8;
                                    ?>
                                </p>
                            </div>
                            <p class="description_text">
                                <?php
                                $text_9 = 'Британец из Кента, 42 года: твидовый пиджак, портфель, серебряная запонка
                                в виде кофейного зерна. Эксперт по элитным пуэру и робусте. Проводит
                                мастер-классы с мёдом и пряностями, его баритон и легенды о плантациях
                                завораживают. Кофейня под его началом — эпицентр изысканных букетов.';
                                echo $text_9;
                                ?>
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
                                <p class="roles_text">
                                    <?php
                                    $text_10 = 'Сомелье чая';
                                    echo $text_10;
                                    ?>
                                </p>
                            </div>
                            <p class="description_text">
                                <?php
                                $text_11 = 'Китаянка из Фуцзяни, 29 лет: с длинной косой и нефритовыми браслетами,
                                хранительница традиций улунных чаев с лотосом и орхидеей. Консультирует
                                по многоступенчатым заваркам в глиняных гайванах, раскрывая слои вкуса
                                от цветочного до медового. Её тихая мудрость делает каждый визит уроком
                                гурмана.';
                                echo $text_11;
                                ?>

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
                                <p class="roles_text">
                                    <?php
                                    $text_12 = 'Ассистент бариста';
                                    echo $text_12;
                                    ?>
                                </p>
                            </div>
                            <p class="description_text">
                                <?php
                                $text_13 = 'Британец из Кента, 42 года: твидовый пиджак, портфель, серебряная запонка
                                в виде кофейного зерна. Эксперт по элитным пуэру и робусте. Проводит
                                мастер-классы с мёдом и пряностями, его баритон и легенды о плантациях
                                завораживают. Кофейня под его началом — эпицентр изысканных букетов.';
                                echo $text_13;
                                ?>
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
                <p class="transparent-sections-heading">
                    <?php
                    $text_14 = 'Про сорта кофе и чая';
                    echo $text_14;
                    ?>
                </p>
                <img class="line-pattern" src="assets/images/the_line_pattern-about-the-varieties.png" alt="Линия узор">
                <div class="block-about-the-varieties tr_section">
                    <div class="block-varieties block-varieties--one">
                        <div class="block-varieties-img">
                            <img src="assets/images/Картинка-про-сорта-кофе.png" alt="Экзотические сорта кофе">
                        </div>
                        <div class="block-varieties_text">
                            <div class="marker-heading marker-heading-five">
                                <p class="roles_text">
                                    <?php
                                    $text_15 = 'Экзотические сорта кофе';
                                    echo $text_15;
                                    ?>
                                </p>
                            </div>
                            <p class="text-varieties">
                                <?php
                                $text_16 = 'Экзотические кофе растут на диких
                                плантациях в джунглях и горах.
                                Зерна собирают вручную — малые урожаи
                                делают их редкими. Уникальная обработка:
                                животные, вулканы, ферментация дают
                                необычный вкус. Ноты шоколада, фруктов,
                                орехов с бархатным послевкусием.
                                Элита мира — закажите приключение в
                                чашке!';
                                echo $text_16;
                                ?>
                            </p>

                        </div>
                    </div>
                    <div class="block-varieties block-varieties--two">
                        <div class="block-varieties_text">
                            <div class="marker-heading marker-heading-five">
                                <p class="roles_text">
                                    <?php
                                    $text_17 = 'Экзотические сорта чая';
                                    echo $text_17;
                                    ?>
                                </p>
                            </div>
                            <p class="text-varieties">
                                <?php
                                $text_18 = 'Экзотические чаи создают мастера Азии по
                                древним традициям. Ручной сбор юных почек
                                набранных на склонах. Ферментация от белого
                                до улун — раскрывает ароматы. Цветы, мед,
                                дым, сладость без горечи в каждой чашке.
                                Смеси с фруктами и специями — магия вкуса у
                                нас!';
                                echo $text_18;
                                ?>
                            </p>
                        </div>
                        <div class="block-varieties-img block-varieties-img-two">
                            <img src="assets/images/Картинка-про-сорта-чая.png" alt="Экзотические сорта чая">
                        </div>
                    </div>

                </div>
            </section>
            <section class="table-reservation" id="table-reservation">
                <p class="table-reservation-sections-heading">
                    <?php
                    $text_19 = 'Бронь столика';
                    echo $text_19;
                    ?>
                </p>
                <img class="line-pattern" src="assets/images/the_line_pattern-our-team.png" alt="Линия узор">
                <div class="block-table-reservation">
                    <form class="form-table-reservation">
                        <p class="form-table-reservation-heading">
                            <?php
                            $text_20 = 'Бронь столика';
                            echo $text_20;
                            ?>
                        </p>
                        <input type="text" placeholder="Имя">
                        <input type="tel" placeholder="+7 (___) Телефон">
                        <input type="text" placeholder="Адрес кофейни">
                        <input type="text" placeholder="Гости">
                        <input type="text" placeholder="Дата">
                        <button class="accent_button booking-btn" id="Book_table" type="submit" formmethod="post">
                            <?php
                            $text_21 = 'Забронировать столик';
                            echo $text_21;
                            ?>
                        </button>
                    </form>
                    <div class="img-table-reservation">
                        <img src="assets/images/Фото-для-блока-бронь-столика.png" alt="Фото бронь столика">
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php require 'layout/footer.php'; ?>