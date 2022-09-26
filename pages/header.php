<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thorn REC. Студия звукозаписи в Туле</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/audioplayer.css">
</head>
<body>
<header class="top-nav">
        <div class="header-menu"> 
            <div class="fixed-container">
            <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
        
    <div class='menu-button'></div>
  </label>
    <nav class="menu">
            <a href="/index.php" class="menu-nav" id=bord-top >ГЛАВНАЯ</a>
            <a href="/pages/about.php" class="menu-nav">О НАС</a>
            <a href="/pages/price.php" class="menu-nav">ЦЕНЫ</a>
            <a href="/pages/services.php" class="menu-nav">УСЛУГИ</a>
            <a href="/pages/reviews.php" class="menu-nav">ОТЗЫВЫ</a>
            <a href="/pages/blog.php" class="menu-nav">БЛОГ</a>
            <a href="/pages/contacts.php" class="menu-nav">КОНТАКТЫ</a>
            </nav>
     </div>
    </div>
    </header>
    <div class="title-section">
        <div class="fixed-container">
            <div class="title-container">
            <a href="/index.php"><img class="logotype" src="/img/logo.svg" alt="logo" style="max-width: 121px; max-height: 162px;"></a>

                <div class="main-contacts">
                <ul class="contacts-block">
                <?php include 'knowledge.php'; ?>
                     <li class="contacts"><a class="contacts-text" href="#" alt="tel"><img src="/img/tel.png" class="icons"><?php  echo $tel; ?> </a></li>
                     <li class="contacts"><a class="contacts-text" href="#" alt="tel"><img src="/img/mail.png" class="icons"><?php  echo $mail; ?></a></li>
                     <li class="contacts"><a class="contacts-text" href="#" alt="tel"><img src="/img/marker.png" class="icons"><?php  echo $adress; ?></a></li>
                </ul>
                </div>
        </div>
        </div>
    </div>
    <div class="booking-section">
        <div class="fixed-container">
            <div class="booking-container">
                <div class="booking-button">
                    <a href="#" class="booking-button-text">ЗАПИСАТЬСЯ</a>
                </div>
            </div>
        </div>
    </div>