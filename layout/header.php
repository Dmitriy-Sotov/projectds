<?php

if (!isset($title)) $title = 'Кофейня';
if (!isset($bg)) $bg = 'main-img';
if (!isset($root)) $root = '';

date_default_timezone_set('Asia/Yekaterinburg');

$hour = (int)date('H');

if ($hour >= 20 || $hour < 6) {
    $theme = 'night';
} else {
    $theme = 'day';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/логотип.ico" type="image/x-icon">
</head>
<body class="<?php echo $theme; ?>">
<div class="block-header">
    <div class="dark-block"></div>
    <div class="img-header  <?php echo $bg; ?>"></div>
    <header>
        <img class="logo" src="../assets/images/логотип.png" alt="Логотип">
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $root; ?>index.php">Главная</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $root; ?>pages/about.php">О нас</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $root; ?>pages/menu.php">Меню</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $root; ?>pages/reviews.php">Отзывы</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $root; ?>pages/accessories.php">Аксессуары</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $root; ?>pages/sale.php">Акция</a></li>
            </ul>
        </nav>