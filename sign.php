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
        <section class="sectionSign">
            <div class="sectionSign__item _content">
                <img src="img/logo.png" alt="" class="sectionSign__logo">
                <div class="sectionSign__nav">
                    <a href="#" class="sectionSign__link">
                        Войти
                    </a>
                    <img src="img/language-icon-1.svg" alt="" class="sectionSign__language">
                </div>
                <div class="sectionSign__content">
                    <div class="sectionSign__name">
                        <p class="title _medium _grey">
                            CWS SaaS Cloud v.2.1.3
                        </p>
                    </div>
                    <div class="sectionSign__title">
                        <p class="title _dark">
                            Создайте профиль своего подключенного автосервиса
                        </p>
                    </div>
                    <div class="sectionSign__subTitle">
                        <p class="text _dark">
                            Получите прямой доступ к своим клиентам и начините оказывать современные услуги онлайн обслуживания
                        </p>
                    </div>
                    <div class="sectionSign__form">
                        <div class="sectionSign__formEl _fix">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Страна
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem">
                                            Dismiss
                                        </li>
                                        <li class="select__listItem">
                                            Book online service
                                        </li>
                                        <li class="select__listItem">
                                            Book offline maintenance
                                        </li>
                                        <li class="select__listItem">
                                            Send push notification
                                        </li>
                                        <li class="select__listItem">
                                            Send message
                                        </li>
                                        <li class="select__listItem">
                                            Start VoIP call
                                        </li>
                                        <li class="select__listItem">
                                            Dismiss
                                        </li>
                                        <li class="select__listItem">
                                            Book online service
                                        </li>
                                        <li class="select__listItem">
                                            Book offline maintenance
                                        </li>
                                        <li class="select__listItem">
                                            Send push notification
                                        </li>
                                        <li class="select__listItem">
                                            Send message
                                        </li>
                                        <li class="select__listItem">
                                            Start VoIP call
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sectionSign__formEl _fix">
                            <input placeholder="Имя" type="text" class="input">
                        </div>
                        <div class="sectionSign__formEl _fix">
                            <input placeholder="Фамилия" type="text" class="input">
                        </div>
                        <div class="sectionSign__formEl _fix">
                            <input placeholder="Электронная почта" type="text" class="input">
                        </div>
                        <div class="sectionSign__formEl _fix">
                            <input placeholder="Мобильный телефон" type="text" class="input">
                        </div>
                        <div class="sectionSign__formEl _confirm">
                            <label class="confirm">
                                <input type="checkbox" class="confirm__input">
                                <div class="confirm__view">
                                    <div class="JSfixSize confirm__field">
                                        <div class="JSfixSize confirm__fieldDot"></div>
                                    </div>
                                    <span class="confirm__content">
                                        Я согласен с уловиями <a href="#" class="confirm__link">соглашения о конфиденциальности</a>
                                    </span>
                                </div>
                            </label>
                        </div>
                        <div class="sectionSign__formEl _fix">
                            <button class="button _green _hard">
                                Создать мой профиль
                            </button>
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