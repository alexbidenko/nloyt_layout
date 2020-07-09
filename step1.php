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

    <div class="JSpopup body__popup" data-name="adress">
        <div class="popupBox">
            <div class="popupBox__inner">
                <img src="img/close-grey-icon.svg" alt="" class="JSpopupBtn popupBox__close" data-action="close" data-name="adress">
                <div class="popupBox__title">
                    <p class="title _medium _dark">
                        Добавить физический адрес автосервиса
                    </p>
                </div>
                <div class="popupBox__subTitle">
                    <p class="text _medium _dark">
                        Укажите адрес фактического местонахождения. Избегайте ошибок ввода для целей корректной работы картографических сервисов, чтобы клиентом проще было вас найти.
                    </p>
                </div>
                <div class="popupBox__form">
                    <div class="popupBox__formEl _short">
                        <input placeholder="Страна" type="text" class="input">
                    </div>
                    <div class="popupBox__formEl _short">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Область/Край
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
                    <div class="popupBox__formEl _short">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Область/Край
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
                    <div class="popupBox__formEl _normal">
                        <input placeholder="Адрес" type="text" class="input">
                    </div>
                    <div class="popupBox__formEl _short">
                        <input placeholder="Индекс" type="text" class="input">
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

    <div class="JSpopup body__popup" data-name="time">
        <div class="popupBox">
            <div class="popupBox__inner">
                <img src="img/close-grey-icon.svg" alt="" class="JSpopupBtn popupBox__close" data-action="close" data-name="time">
                <div class="popupBox__title">
                    <p class="title _medium _dark">
                        Добавить график работы
                    </p>
                </div>
                <div class="popupBox__form">
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Понедельник
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Вторник
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Среда
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Четверг
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Пятница
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Суббота
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                    <div class="popupBox__formEl _day">
                        <div class="popupBox__formDay">
                            Воскресенье
                        </div>
                    </div>
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Открывается
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
                    <div class="popupBox__formEl _day">
                        <div class="JSselect select _sign">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Закрывается
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
                            Создайте домен своего автосервиса
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
                        <div class="registrationBox__item _content">
                            <div class="registrationBox__block">
                                <div class="registrationBox__layer">
                                    <div class="registrationBox__col">
                                        <div class="registrationBox__field">
                                            <label class="confirm">
                                                <input name="type" type="radio" class="confirm__input" checked>
                                                <div class="confirm__view">
                                                    <div class="JSfixSize confirm__field">
                                                        <div class="JSfixSize confirm__fieldDot"></div>
                                                    </div>
                                                    <span class="confirm__content">
                                                        Официальный дилер
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="registrationBox__field">
                                            <input placeholder="Название (брэнд или торговая марка)" type="text" class="input">
                                        </div>
                                        <div class="registrationBox__field">
                                            <input placeholder="Наименование Юридического лица" type="text" class="input">
                                        </div>
                                        <div class="registrationBox__field">
                                            <input placeholder="ИНН юридического лица" type="text" class="input">
                                        </div>
                                    </div>
                                    <div class="registrationBox__col">
                                        <div class="registrationBox__field">
                                            <label class="confirm">
                                                <input name="type" type="radio" class="confirm__input">
                                                <div class="confirm__view">
                                                    <div class="JSfixSize confirm__field">
                                                        <div class="JSfixSize confirm__fieldDot"></div>
                                                    </div>
                                                    <span class="confirm__content">
                                                        Автосервис входит в группу/холдинг
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="registrationBox__field">
                                            <input placeholder="Наименование группы/холдинга" type="text" class="input">
                                        </div>
                                        <div class="registrationBox__field">
                                            <input placeholder="Сайт группы/холдинга" type="text" class="input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registrationBox__block">
                                <div class="registrationBox__support">
                                    <p class="title _medium _dark">
                                        Добавить описание автосервиса
                                    </p>
                                </div>
                                <div class="registrationBox__inner">
                                    <div class="registrationBox__field">
                                        <img src="img/plus-icon.svg" alt="" class="JSpopupBtn registrationBox__add" data-action="open" data-name="adress">
                                        <input placeholder="Физический адрес автосервиса" type="text" class="input">
                                    </div>
                                    <div class="registrationBox__field _short">
                                        <input placeholder="Номер телефона #1" type="text" class="input">
                                    </div>
                                    <div class="registrationBox__field _short">
                                        <input placeholder="Веб сайт автосервиса" type="text" class="input">
                                    </div>
                                    <div class="registrationBox__field _short">
                                        <input placeholder="Номер телефона #2 (опционально)" type="text" class="input">
                                    </div>
                                    <div class="registrationBox__field _short">
                                        <img src="img/plus-icon.svg" alt="" class="JSpopupBtn registrationBox__add" data-action="open" data-name="time">
                                        <input placeholder="График работы" type="text" class="input">
                                    </div>
                                    <div class="registrationBox__field">
                                        <textarea placeholder="Описание автосервиса
Расскажите своим клиентам о себе. Они прочтут это на вашей
персональной станице." class="input _area"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="registrationBox__block">
                                <div class="registrationBox__support">
                                    <p class="title _medium _dark">
                                        Добавить фото автосервиса
                                    </p>
                                </div>
                                <div class="registrationBox__description">
                                    <p class="text _medium _dark">
                                        Убедитесь, что ваши фотографии хорошего качества, формата* и размера* и не содержат защитных водяных знаков.
                                    </p>
                                </div>
                                <div class="registrationBox__formats">
                                    <p class="registrationBox__format">
                                        *Форматы файлов - png, jpg, bmp
                                    </p>
                                    <p class="registrationBox__format">
                                        **Размер файлов - не более 30 Мегабайт
                                    </p>
                                </div>
                                <div class="registrationBox__photos">
                                    <div class="registrationBox__photo">
                                        <p class="registrationBox__photoDescription">
                                            Внешний вид
                                            (с улицы)
                                        </p>
                                        <label class="registrationBox__photoBox">
                                            <input type="file" class="registrationBox__photoFile">
                                            <div class="registrationBox__photoPreview">
                                                <!-- <img src="img/image-1.png" alt="" class="registrationBox__photoPreviewImage">
                                                <div class="registrationBox__photoPreviewMask">
                                                    <img src="img/delete-photo-icon.svg" alt="" class="registrationBox__photoPreviewDelete">
                                                    Изменить фото
                                                </div> -->
                                            </div>
                                        </label>
                                    </div>
                                    <div class="registrationBox__photo">
                                        <p class="registrationBox__photoDescription">
                                            Клиентская зона / ресепшн
                                        </p>
                                        <label class="registrationBox__photoBox">
                                            <input type="file" class="registrationBox__photoFile">
                                            <div class="registrationBox__photoPreview">

                                            </div>
                                        </label>
                                    </div>
                                    <div class="registrationBox__photo">
                                        <p class="registrationBox__photoDescription">
                                            Ремонтная зона / участок
                                        </p>
                                        <label class="registrationBox__photoBox">
                                            <input type="file" class="registrationBox__photoFile">
                                            <div class="registrationBox__photoPreview">

                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="registrationBox__button">
                                    <button class="button _green _hard">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                            <div class="registrationBox__block">
                                <div class="registrationBox__support">
                                    <p class="title _medium _dark">
                                        Обслуживаемые марки
                                    </p>
                                </div>
                                <div class="registrationBox__description">
                                    <p class="text _medium _dark">
                                        Укажите какие марки автомобилей обслуживает ваш автосервис. Начните набирать либо выбирете из списка
                                    </p>
                                </div>
                                <div class="registrationBox__select">
                                    <div class="registrationBox__selectField">
                                        <div class="JSselect select _sign _reg _cars">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Марка авто
                                                </span>
                                            </div>
                                            <div class="JSselectDrop select__drop">
                                                <ul class="select__list">
                                                    <li class="select__listItem _check">
                                                        <img src="img/bmw-icon.svg" alt="" class="select__listIconModel">
                                                        BMW
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/merc-icon.svg" alt="" class="select__listIconModel">
                                                        Mercedes
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/cadillac-icon.svg" alt="" class="select__listIconModel">
                                                        Cadillac
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/chevrolet-icon.svg" alt="" class="select__listIconModel">
                                                        Chevrolet
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/volkswagen-icon.svg" alt="" class="select__listIconModel">
                                                        Volkswagen
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/ford-icon.svg" alt="" class="select__listIconModel">
                                                        Ford
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/audi-icon.svg" alt="" class="select__listIconModel">
                                                        Audi
                                                    </li>
                                                    <li class="select__listItem">
                                                        <img src="img/nissan-icon.svg" alt="" class="select__listIconModel">
                                                        Nissan
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="registrationBox__selectButton">
                                        <button class="button _disable _hard">
                                            Добавить
                                        </button>
                                    </div>
                                </div>
                                <div class="registrationBox__choice">
                                    <div class="registrationBox__choiceItem">
                                        BMW
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mercedes-Benz
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mazda
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        BMW
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mercedes-Benz
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mazda
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        BMW
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mercedes-Benz
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mazda
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                </div>
                            </div>
                            <div class="registrationBox__block">
                                <div class="registrationBox__support">
                                    <p class="title _medium _dark">
                                        Используемое диагностическое оборудование
                                    </p>
                                </div>
                                <div class="registrationBox__description">
                                    <p class="text _medium _dark">
                                        Укажите какие средства компьютерной диагностики испольются в автосервисе. Начните набирать либо выбирете из списка
                                    </p>
                                </div>
                                <div class="registrationBox__select">
                                    <div class="registrationBox__selectField">
                                        <div class="JSselect select _sign _reg">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Выбрать оборудование
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
                                    <div class="registrationBox__selectButton">
                                        <button class="button _disable _hard">
                                            Добавить
                                        </button>
                                    </div>
                                </div>
                                <div class="registrationBox__choice">
                                    <div class="registrationBox__choiceItem">
                                        ISTA
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        BOSCH KTS
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        ODIS
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        VCDS
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        Mangoose
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                    <div class="registrationBox__choiceItem">
                                        XENTRY connect
                                        <img src="img/close-icon.svg" alt="" class="registrationBox__choiceDelete">
                                    </div>
                                </div>
                            </div>
                            <div class="registrationBox__block">
                                <div class="registrationBox__support">
                                    <p class="title _medium _dark">
                                        Количество рабочих мест инженеров диагностов
                                    </p>
                                </div>
                                <div class="registrationBox__description">
                                    <p class="text _medium _dark">
                                        Один ресивер выводит в онлайн только один комплект диагностического оборудования. Параллельная работа на одном ресивере невозможна.
                                        Для параллельной работы с двух и более инженеров диагностов необходима установка дополнительных ресиверов на каждое рабочее место.
                                    </p>
                                </div>
                                <div class="registrationBox__counter">
                                    <div class="JScounter counter" data-limit="5">
                                        <p class="counter__support">
                                            Количество NVCD-R
                                        </p>
                                        <div class="counter__result">
                                            <p class="JScounterNum counter__num">
                                                1
                                            </p>
                                            <div class="counter__buttons">
                                                <img src="img/counter-up-icon.svg" alt="" class="JScounterBtn counter__button" data-action="+">
                                                <img src="img/counter-down-icon.svg" alt="" class="JScounterBtn counter__button" data-action="-">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registrationBox__block">
                                <div class="registrationBox__field">
                                    <label class="confirm">
                                        <input type="checkbox" class="confirm__input">
                                        <div class="confirm__view">
                                            <div class="JSfixSize confirm__field">
                                                <div class="JSfixSize confirm__fieldDot"></div>
                                            </div>
                                            <span class="confirm__content">
                                                Я принимаю условия <a href="#" class="confirm__link">пользовательского соглашения</a>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <div class="registrationBox__field">
                                    <label class="confirm">
                                        <input type="checkbox" class="confirm__input">
                                        <div class="confirm__view">
                                            <div class="JSfixSize confirm__field">
                                                <div class="JSfixSize confirm__fieldDot"></div>
                                            </div>
                                            <span class="confirm__content">
                                                Я принимаю условия <a href="#" class="confirm__link">положения о конфиденциальности</a>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="registrationBox__block _button">
                                <div class="registrationBox__button">
                                    <button class="button _normal _hard">
                                        Продолжить
                                    </button>
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