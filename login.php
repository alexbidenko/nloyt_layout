<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link rel="stylesheet" href="main.min.css?<?= filemtime('main.min.css') ?>">

    <!-- <style>
        *{
            transition: 0s!important;
        }
    </style> -->
</head>

<body class="body">

    <div class="body__section">
        <section class="sectionSign _login">
            <div class="sectionSign__item _content">
                <img src="img/logo.png" alt="" class="sectionSign__logo">
                <div class="sectionSign__nav">
                    <a href="#" class="sectionSign__link">
                        Подключиться
                    </a>
                    <img src="img/language-icon-1.svg" alt="" class="sectionSign__language">
                </div>
                <div class="sectionSign__content">
                    <div class="sectionSign__name">
                        <p class="title _medium _grey">
                            CWS SaaS Cloud v.2.1.3
                        </p>
                    </div>
                    <div class="sectionSign__box">
                        <div class="sectionSign__title">
                            <p class="title _dark">
                                Войти в профиль подключенного автосервиса
                            </p>
                        </div>
                        <div class="sectionSign__form">
                            <div class="sectionSign__formEl _fix">
                                <input placeholder="Логин" type="text" class="input">
                            </div>
                            <div class="sectionSign__formEl _fix">
                                <input placeholder="Пароль" type="text" class="input">
                            </div>
                            <div class="sectionSign__formEl _fix _confirm">
                                <button class="button _normal _hard">
                                    Войти
                                </button>
                            </div>
                            <a href="#" class="sectionSign__again">
                                Забыл пароль
                            </a>
                        </div>
                    </div>
                    <p class="sectionSign__info">
                        2019 (c) NLOYT Corporation
                    </p>
                </div>
            </div>
            <div class="sectionSign__item">
                <img src="img/image-sign.png" alt="" class="sectionSign__image">
            </div>
        </section>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="scripts.min.js?<?= filemtime('scripts.min.js') ?>"></script>



</html>