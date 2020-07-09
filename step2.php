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

    <div class="JSmaskRow body__elemChoiceTableRow" data-dir="left"></div>
    <div class="JSmaskRow body__elemChoiceTableRow" data-dir="top"></div>
    <div class="JSmaskRow body__elemChoiceTableRow" data-dir="right"></div>
    <div class="JSmaskRow body__elemChoiceTableRow" data-dir="bottom"></div>

    <div class="JSsideBar body__sideBar _active">
        <?php include "templates/sideBar.php"; ?>
    </div>

    <div class="JStopBar body__topBar _active">
        <?php include "templates/topBar.php"; ?>
    </div>

    <div class="JSpopup body__popup" data-name="create">
        <div class="popupBox _create">
            <div class="popupBox__inner">
                <img src="img/close-grey-icon.svg" alt="" class="JSpopupBtn popupBox__close" data-action="close" data-name="create">
                <div class="popupBox__title">
                    <p class="title _medium _dark">
                        Создать новую запись онлайн услуги
                    </p>
                </div>
                <div class="popupBox__form">
                    <div class="popupBox__formCol">
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Марка
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Модель
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Поколение
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Модификация
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Комплектация
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popupBox__formCol">
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Комплектация
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl _photo">
                            <label class="popupBox__formPhoto">
                                <input type="file" class="popupBox__formPhotoInput">
                                Фото услуги
                            </label>
                        </div>
                    </div>
                    <div class="popupBox__formCol _long">
                        <div class="popupBox__formEl _half">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Время работ
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl _half">
                            <input placeholder="Стоимость услуги" type="text" class="input">
                        </div>
                        <div class="popupBox__formEl">
                            <div class="JSselect select _sign">
                                <div class="JSselectBtn select__view">
                                    <span class="select__support">
                                        Категория услуги
                                    </span>
                                </div>
                                <div class="JSselectDrop select__drop">
                                    <ul class="select__list">
                                        <li class="select__listItem _check">
                                            ISTA
                                        </li>
                                        <li class="select__listItem">
                                            BOSCH KTS
                                        </li>
                                        <li class="select__listItem">
                                            ODIS
                                        </li>
                                        <li class="select__listItem">
                                            VCDS
                                        </li>
                                        <li class="select__listItem">
                                            Mangoose
                                        </li>
                                        <li class="select__listItem">
                                            XENTRY connect
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="popupBox__formEl">
                            <input placeholder="Наименование услуги" type="text" class="input">
                        </div>
                        <div class="popupBox__formEl">
                            <textarea placeholder="Описание услуги" class="input _area _services"></textarea>
                        </div>
                    </div>
                </div>
                <div class="popupBox__button">
                    <button class="button _normal _hard">
                        Добавить
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="JScontent body__content _active">
        <div class="contentBox">
            <div class="contentBox__inner">
                <div class="registrationBox">
                    <div class="registrationBox__title">
                        <p class="title _dark">
                            Сформируйте свой каталог онлайн услуг
                        </p>
                    </div>
                    <div class="registrationBox__content">
                        <div class="registrationBox__item _steps">
                            <ul class="registrationBox__steps">
                                <li class="registrationBox__step _active">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Домен автосервиса
                                    </span>
                                </li>
                                <li class="registrationBox__step _current">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Список услуг
                                    </span>
                                </li>
                                <li class="registrationBox__step">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Клиентские платежи
                                    </span>
                                </li>
                                <li class="registrationBox__step">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Пользователи и доступ
                                    </span>
                                </li>
                                <li class="registrationBox__step">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Общие настройки
                                    </span>
                                </li>
                                <li class="registrationBox__step">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Дистрибуция продукции
                                    </span>
                                </li>
                                <li class="registrationBox__step">
                                    <div class="JSfixSize registrationBox__stepDot"></div>
                                    <span class="registrationBox__stepContent">
                                        Активация профиля
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="registrationBox__item _content _services">
                            <div class="servicesBox">
                                <div class="servicesBox__head">
                                    <div class="servicesBox__headElem _search">
                                        <div class="JSselect select _sign _search">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Поиск услуги
                                                </span>
                                            </div>
                                            <div class="JSselectDrop select__drop">
                                                <ul class="select__list">
                                                    <li class="select__listItem _check">
                                                        ISTA
                                                    </li>
                                                    <li class="select__listItem">
                                                        BOSCH KTS
                                                    </li>
                                                    <li class="select__listItem">
                                                        ODIS
                                                    </li>
                                                    <li class="select__listItem">
                                                        VCDS
                                                    </li>
                                                    <li class="select__listItem">
                                                        Mangoose
                                                    </li>
                                                    <li class="select__listItem">
                                                        XENTRY connect
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="servicesBox__headElem">
                                        <div class="button _disable _hard">
                                            Добавить
                                        </div>
                                    </div>
                                    <div class="servicesBox__headElem">
                                        <div class="button _disable _hard">
                                            Добавить
                                        </div>
                                    </div>
                                    <div class="servicesBox__headElem">
                                        <div class="JSpopupBtn button _green _hard" data-action="open" data-name="create">
                                            Создать
                                        </div>
                                    </div>
                                    <div class="servicesBox__headElem">
                                        <div class="button _dark _hard">
                                            Удалить
                                        </div>
                                    </div>
                                    <div class="servicesBox__headElem _continue">
                                        <div class="button _normal _hard">
                                            Продолжить
                                        </div>
                                    </div>
                                </div>
                                <div class="servicesBox__description">
                                    <p class="text _medium _dark">
                                        Соберите свой собственный каталог онлайн услуг, которые вы предложите своим клиентам онлайн, в реальном времени. Укажите их продолжительноть и цены. Вы можете добавлять по одной услуге, либо группу услуг для ваших марок авто или оборудования
                                    </p>
                                </div>
                                <div class="servicesBox__table">
                                    <div class="JStable table _services">
                                        <div class="table__inner">
                                            <div class="table__row _head">
                                                <div class="table__col _checkbox">
                                                    <label class="table__checkbox _all">
                                                        <input type="checkbox" class="table__checkboxInput">
                                                        <div class="JSfixSize table__checkboxView">
                                                            2
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="table__col _preview">

                                                </div>
                                                <div class="table__col _online">
                                                    <p class="table__content">
                                                        Онлайн услуга
                                                    </p>
                                                </div>
                                                <div class="table__col _time">
                                                    <p class="table__content">
                                                        Время
                                                    </p>
                                                </div>
                                                <div class="table__col _price">
                                                    <p class="table__content">
                                                        Цена
                                                    </p>
                                                </div>
                                                <div class="table__col _tools">
                                                    <p class="table__content">
                                                        Оборудование
                                                    </p>
                                                </div>
                                                <div class="table__col _type">
                                                    <p class="table__content">
                                                        Поколение
                                                    </p>
                                                </div>
                                                <div class="table__col _modification">
                                                    <p class="table__content">
                                                        Модификация
                                                    </p>
                                                </div>
                                                <div class="table__col _complect">
                                                    <p class="table__content">
                                                        Комплектация
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="table__row">
                                                <div class="table__col _checkbox">
                                                    <label class="table__checkbox">
                                                        <input type="checkbox" class="table__checkboxInput">
                                                        <div class="JSfixSize table__checkboxView">
                                                            <img src="img/check-icon.svg" alt="" class="table__checkboxIcon">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="table__col _preview">
                                                    <img src="img/picture-1.png" alt="" class="table__preview">
                                                </div>
                                                <div class="table__col _online">
                                                    <p class="table__content">
                                                        Doorlocks activation during car speed increasing (options selection)
                                                    </p>
                                                </div>
                                                <div class="table__col _time">
                                                    <p class="table__content">
                                                        20 min
                                                    </p>
                                                </div>
                                                <div class="table__col _price">
                                                    <p class="table__content">
                                                        400
                                                    </p>
                                                </div>
                                                <div class="table__col _tools">
                                                    <p class="table__content">
                                                        ISTA
                                                    </p>
                                                </div>
                                                <div class="table__col _type">
                                                    <p class="table__content">
                                                        W213
                                                    </p>
                                                </div>
                                                <div class="table__col _modification">
                                                    <p class="table__content">
                                                        300 4Matic Sport
                                                    </p>
                                                </div>
                                                <div class="table__col _complect">
                                                    <p class="table__content">
                                                        All
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="table__row _empty">
                                                <div class="table__col _checkbox">
                                                    <label class="table__checkbox">
                                                        <input type="checkbox" class="table__checkboxInput">
                                                        <div class="JSfixSize table__checkboxView">
                                                            <img src="img/check-icon.svg" alt="" class="table__checkboxIcon">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="table__col _preview">
                                                    <img src="img/picture-1.png" alt="" class="table__preview">
                                                </div>
                                                <div class="table__col _online">
                                                    <p class="table__content">
                                                        Doorlocks activation during car speed increasing (options selection)
                                                    </p>
                                                </div>
                                                <div class="table__col _time">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _price">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _tools">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _type">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _modification">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _complect">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="table__row">
                                                <div class="table__col _checkbox">
                                                    <label class="table__checkbox">
                                                        <input type="checkbox" class="table__checkboxInput">
                                                        <div class="JSfixSize table__checkboxView">
                                                            <img src="img/check-icon.svg" alt="" class="table__checkboxIcon">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="table__col _preview">
                                                    <img src="img/picture-1.png" alt="" class="table__preview">
                                                </div>
                                                <div class="table__col _online">
                                                    <p class="table__content">
                                                        Doorlocks activation during car speed increasing (options selection)
                                                    </p>
                                                </div>
                                                <div class="table__col _time">
                                                    <div class="table__content _time">
                                                        <div class="JSselect select _sign _search _time">
                                                            <div class="JSselectBtn select__view">
                                                                <span class="select__support">
                                                                    40 min
                                                                </span>
                                                            </div>
                                                            <div class="JSselectDrop select__drop">
                                                                <ul class="select__list">
                                                                    <li class="select__listItem _check">
                                                                        10 min
                                                                    </li>
                                                                    <li class="select__listItem">
                                                                        20 min
                                                                    </li>
                                                                    <li class="select__listItem">
                                                                        30 min
                                                                    </li>
                                                                    <li class="select__listItem">
                                                                        40 min
                                                                    </li>
                                                                    <li class="select__listItem">
                                                                        50 min
                                                                    </li>
                                                                    <li class="select__listItem">
                                                                        60 min
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table__col _price">
                                                    <p class="table__content">
                                                        400
                                                    </p>
                                                </div>
                                                <div class="table__col _tools">
                                                    <p class="table__content">
                                                        ISTA
                                                    </p>
                                                </div>
                                                <div class="table__col _type">
                                                    <p class="table__content">
                                                        W213
                                                    </p>
                                                </div>
                                                <div class="table__col _modification">
                                                    <p class="table__content">
                                                        300 4Matic Sport
                                                    </p>
                                                </div>
                                                <div class="table__col _complect">
                                                    <p class="table__content">
                                                        All
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="table__row _empty">
                                                <div class="table__col _checkbox">
                                                    <label class="table__checkbox">
                                                        <input type="checkbox" class="table__checkboxInput">
                                                        <div class="JSfixSize table__checkboxView">
                                                            <img src="img/check-icon.svg" alt="" class="table__checkboxIcon">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="table__col _preview">
                                                    <img src="img/volkswagen-icon.svg" alt="" class="table__preview">
                                                </div>
                                                <div class="table__col _online">
                                                    <p class="table__content">
                                                        Volkswagen
                                                    </p>
                                                </div>
                                                <div class="table__col _time">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _price">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _tools">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _type">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _modification">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                                <div class="table__col _complect">
                                                    <p class="table__content">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="scripts.min.js?<?= filemtime('scripts.min.js') ?>"></script>



</html>