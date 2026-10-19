<?php
if (!isset($root)) $root = '';
?>
<footer>
    <div class="block-footer-one">
        <div class="group-img">
            <img class="footer-logo" src="../assets/images/Логотоип-footer.png" alt="Логотип-footer">
            <img src="../assets/images/line-footer.png" alt="Линия-footer">
            <div class="block-icons">
                <div class="icon-tell">
                    <img src="../assets/images/icons-call.png" alt="Иконка телефона">
                    <a href="tel:89823107546">
                        <?php
                        $text_28 = '89823107546';
                        echo $text_28;
                        ?>
                    </a>
                </div>
                <div class="icon-email">
                    <img src="../assets/images/icons-email.png" alt="Иконка email">
                    <a href="mailto:sotov@dmitriy-alexandrovich.ru">
                        <?php
                        $text_29 = 'sotov@dmitriy-alexandrovich.ru';
                        echo $text_29;
                        ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="group-navigation">
            <nav class="navigation-footer">
                <ul class="navigation-footer__list">
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="<?php echo $root; ?>index.php"><?php $text_30 = "Главная";
                            echo $text_30; ?></a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="<?php echo $root; ?>pages/about.php"><?php $text_31 = "О нас";
                            echo $text_31; ?></a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="<?php echo $root; ?>pages/menu.php"><?php $text_32 = "Меню";
                            echo $text_32; ?></a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="<?php echo $root; ?>pages/reviews.php"><?php $text_33 = "Отзывы";
                            echo $text_33; ?></a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="<?php echo $root; ?>pages/accessories.php"><?php $text_34 = "Аксессуары";
                            echo $text_34; ?></a></li>
                    <li class="navigation-footer__item"><a class="navigation-footer__link"
                                                           href="<?php echo $root; ?>pages/sale.php"><?php $text_35 = "Акция";
                            echo $text_35; ?></a></li>
                </ul>
            </nav>
        </div>
        <div class="group-social-network">
            <p>
                <?php
                $text_36 = 'Наши Соцсети';
                echo $text_36;
                ?>
            </p>
            <div class="block-social">
                <img src="../assets/images/icons-Vk.svg" alt="Иконка Vk">
                <img src="../assets/images/icons-Tg.svg" alt="Иконка Tg">
                <img src="../assets/images/icons-Youtube.svg" alt="Иконка Youtube">
                <img src="../assets/images/icons-Twitter.svg" alt="Иконка Twitter">
            </div>
        </div>
    </div>
    <div class="block-footer-two">
        <img class="group-pattern" src="../assets/images/line-footer-pattern.png" alt="Линия узор">
        <div class="group-text">
            <div class="Copyright">
                <?php
                $text_37 = '© Copyright 2026 | Sotov';
                echo $text_37;
                ?>
            </div>
            <div class="Discover">
                <?php
                $text_38 = 'Discover the world of rare naps';
                echo $text_38;
                ?>
            </div>
        </div>

        <?php
        $text_footer = [$text_28, $text_29, $text_30, $text_31, $text_32, $text_33, $text_34, $text_35, $text_36, $text_37, $text_38];
        ?>

        <!--Задание 2-->

        <?php
        $page_text = mb_strtolower(implode(' ', $text_header) . " $text_1 $text_2 $text_3 $text_4 $text_5 $text_6 $text_7 $text_8 $text_9 $text_10 $text_11 $text_12 $text_13 $text_14 $text_15 $text_16 $text_17 $text_18 $text_19 $text_20 $text_21 " . implode(' ', $text_footer));
        $vowels = 'аеёиоуыэюяaeiouy';
        $vowel_count = 0;
        for ($i = 0; $i < mb_strlen($vowels); $i++) {
            $vowel = mb_substr($vowels, $i, 1);
            $vowel_count += mb_substr_count($page_text, $vowel);
        }

        //Задание 3

        $words = explode(' ', $page_text);
        $word_count = 0;
        for ($i = 0; $i < count($words); $i++) {
            if ($words[$i] == '') {
                continue;
            }
            $word_count++;
        }

        //Задание 4

        //Текущее время
        $current_date = date('d.m.Y');
        $now = time();

        // Новый год в секундах
        $next_year = (int)date('Y') + 1;
        $new_year_time = strtotime("01.01.$next_year");

        // Вычисление текущего времени
        $diff = $new_year_time - $now;

        //Перевод в секунды
        $sec_in_min = 60;
        $sec_in_hour = 60 * 60;
        $sec_in_day = 60 * 60 * 24;

        // Перевод секунд в дни, часы, минуты, секунды
        $days = (int)($diff / $sec_in_day);
        $hours = (int)(($diff % $sec_in_day) / $sec_in_hour);
        $minutes = (int)(($diff % $sec_in_hour) / $sec_in_min);
        $seconds = $diff % $sec_in_min;

        // Склонение для слова день
        if ($days % 100 >= 11 && $days % 100 <= 19) {
            $day_word = 'дней';
        } elseif ($days % 10 == 1) {
            $day_word = 'день';
        } elseif ($days % 10 >= 2 && $days % 10 <= 4) {
            $day_word = 'дня';
        } else {
            $day_word = 'дней';
        }

        // Склонение для слова час
        if ($hours % 100 >= 11 && $hours % 100 <= 19) {
            $hour_word = 'часов';
        } elseif ($hours % 10 == 1) {
            $hour_word = 'час';
        } elseif ($hours % 10 >= 2 && $hours % 10 <= 4) {
            $hour_word = 'часа';
        } else {
            $hour_word = 'часов';
        }

        // Склонение для слова минута
        if ($minutes % 100 >= 11 && $minutes % 100 <= 19) {
            $min_word = 'минут';
        } elseif ($minutes % 10 == 1) {
            $min_word = 'минута';
        } elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4) {
            $min_word = 'минуты';
        } else {
            $min_word = 'минут';
        }

        // Склонение для слова секунда
        if ($seconds % 100 >= 11 && $seconds % 100 <= 19) {
            $sec_word = 'секунд';
        } elseif ($seconds % 10 == 1) {
            $sec_word = 'секунда';
        } elseif ($seconds % 10 >= 2 && $seconds % 10 <= 4) {
            $sec_word = 'секунды';
        } else {
            $sec_word = 'секунд';
        }
        ?>

        <div style="background-color: #3D3C3A; display: flex; justify-content:center; gap: 40px; padding-bottom: 30px;">
            <p style="color:#FFD7BA;">Гласных букв на странице: <?php echo $vowel_count; ?></p>
            <p style="color:#FFD7BA;">Количество слов: <?php echo $word_count; ?></p>
            <p style="color:#FFD7BA;">Текущая дата: <?php echo $current_date; ?></p>
            <p style="color:#FFD7BA;">
                До Нового года: <?php
                echo $days . ' ' . $day_word . ', ' .
                    $hours . ' ' . $hour_word . ', ' .
                    $minutes . ' ' . $min_word . ', ' .
                    $seconds . ' ' . $sec_word;
                ?>
            </p>
        </div>
    </div>
</footer>
<script src="../assets/script/main.js"></script>
</body>
</html>
