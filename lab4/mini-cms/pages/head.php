<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Бургена №1</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;399;400;600&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <a href="index.php?page=main"><img class="logo-img" src="images/logo.png" alt="logo"></a>
        <div class="logo-name">
            <a href="index.php?page=main">Бургена №1</a>
            <a href="index.php?page=main
">в твоєму місті</a>
        </div>
    </div>
    <div class="nav-buttons">
        <a class="<?php echo ($_GET['page'] == 'main' or !isset($_GET['page'])) ? 'underlined' : 'anim';?>" href="index.php?page=main">Головна</a>
        <a class="<?php echo ($_GET['page'] == 'menu') ? 'underlined' : 'anim';?>" href="index.php?page=menu">Меню</a>
        <a class="<?php echo ($_GET['page'] == 'find-us') ? 'underlined' : 'anim';?>" href="index.php?page=find-us">Знайти нас</a>
    </div>
    <div class="cp-phone">
        <button id="phone" class="phone" onclick="copyToClipBoard()" onmouseout="cpAgain()"><span class="hint" id="my-hint">Скопіювати</span>0-800-000-000</button>
    </div>
    <div class="mobile-menu">
        <input type="checkbox" id="op">
        <div class="lower">
            <label class="lover" for="op"><img class="menu-ico" src="images/menu.png"></label>
        </div>
        <div class="overlay overlay-hugeinc">
            <label for="op"></label>
            <nav>
                <ul>
                    <li><a href="index.php?page=index">Головна</a></li>
                    <li><a href="index.php?page=menu">Меню</a></li>
                    <li><a href="index.php?page=find-us">Знайти нас</a></li>
                    <li><a>0-800-000-000</a></li>
                </ul>
            </nav>
        </div>
    </div>

</nav>