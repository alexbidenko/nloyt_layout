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

    <div class="JScontent body__content _active">
        <div class="contentBox">
            <div class="contentBox__inner">
                <div class="contentBox__tabs">
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Отклонено WS
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        1
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Отменено C
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        0
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Прервано WS
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        4
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Прервано C
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        0
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    На согласовании
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        2
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Просрочено
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        46
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Запланировано
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        0
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__tab">
                        <label class="tab">
                            <input type="checkbox" class="tab__input">
                            <div class="tab__view">
                                <p class="tab__description">
                                    Готово
                                </p>
                                <div class="tab__layer">
                                    <p class="tab__counter">
                                        12
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="contentBox__more">
                        <div class="JSselect select _more">
                            <div class="JSselectBtn select__view">
                                <img src="img/more-icon.svg" alt="" class="select__more">
                            </div>
                            <div class="JSselectDrop select__drop">
                                <ul class="select__list">
                                    <li class="select__listItem">
                                        Show infotiles
                                    </li>
                                    <li class="select__listItem">
                                        Hide infotiles
                                    </li>
                                    <li class="select__listItem">
                                        Edit infotiles
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentBox__nav">
                    <div class="contentBox__navSelect">
                        <div class="JSselect select">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Действия
                                </span>
                            </div>
                            <div class="JSselectDrop select__drop">
                                <ul class="select__list">
                                    <li class="select__listItem">
                                        About this record
                                    </li>
                                    <li class="select__listItem">
                                        Columns
                                        <img src="img/select-drop-icon.svg" alt="" class="select__listIcon">
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
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contentBox__navSelect">
                        <div class="JSselect select">
                            <div class="JSselectBtn select__view">
                                <span class="select__support">
                                    Действия
                                </span>
                            </div>
                            <div class="JSselectDrop select__drop">
                                <ul class="select__list">
                                    <li class="select__listItem">
                                        About this record
                                    </li>
                                    <li class="select__listItem">
                                        Columns
                                        <img src="img/select-drop-icon.svg" alt="" class="select__listIcon">
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
                                                Columns
                                                <img src="img/select-drop-icon.svg" alt="" class="select__listIcon">
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
                                                </ul>
                                            </li>
                                            <li class="select__listItem">
                                                Send message
                                            </li>
                                            <li class="select__listItem">
                                                Start VoIP call
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contentBox__navCalendar">
                        05/23/2019
                    </div>
                    <div class="contentBox__navCalendar">
                        05/23/2019
                    </div>
                    <div class="contentBox__navSearch">
                        <input type="text" class="contentBox__navSearchInput">
                    </div>
                </div>
                <div class="contentBox__table">
                    <div class="JStable table">
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Производитель
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        Модель
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        Год
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        Пробег
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        Гарантия
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        ТО
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        EDT
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        Услуги
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        Сумма
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <p class="table__content">
                                        Статус заказа
                                    </p>
                                </div>
                                <div class="table__col _files">
                                    <p class="table__content">
                                        Файлы
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-1.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-5.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <div class="table__content">
                                        <div class="JSselect select _table">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Действия
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__col _files">
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-1.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-5.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <div class="table__content">
                                        <div class="JSselect select _table">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Действия
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__col _files">
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-1.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-5.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <div class="table__content">
                                        <div class="JSselect select _table">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Действия
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__col _files">
                                    <p class="table__content">
                                        <img src="img/download-icon.svg" alt="" class="table__icon">
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-2.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-6.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <p class="table__content">
                                        Отклонено СЦ
                                    </p>
                                </div>
                                <div class="table__col _files">
                                    <p class="table__content">

                                    </p>
                                </div>
                            </div>
                            <div class="table__row _active">
                                <div class="table__col _checkbox">
                                    <label class="table__checkbox">
                                        <input type="checkbox" class="table__checkboxInput">
                                        <div class="JSfixSize table__checkboxView">
                                            <img src="img/check-icon.svg" alt="" class="table__checkboxIcon">
                                        </div>
                                    </label>
                                </div>
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-1.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-7.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <div class="table__time _active">
                                        00:42:00
                                    </div>
                                </div>
                                <div class="table__col _files">
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-1.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-5.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <div class="table__content">
                                        <div class="JSselect select _table">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Действия
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__col _files">
                                    <p class="table__content">
                                        <img src="img/download-icon.svg" alt="" class="table__icon">
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
                                <div class="table__col _make">
                                    <p class="table__content">
                                        Mercedes-Benz
                                    </p>
                                </div>
                                <div class="table__col _model">
                                    <p class="table__content">
                                        E-Class
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
                                <div class="table__col _year">
                                    <p class="table__content">
                                        2017
                                    </p>
                                </div>
                                <div class="table__col _miliage">
                                    <p class="table__content">
                                        34 764
                                    </p>
                                </div>
                                <div class="table__col _warranty">
                                    <p class="table__content">
                                        <img src="img/tab-icon-1.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">

                                    </p>
                                </div>
                                <div class="table__col _types">
                                    <p class="table__content">
                                        40m
                                    </p>
                                </div>
                                <div class="table__col _services _active">
                                    <p class="table__content">
                                        <img src="img/table-icon-5.svg" alt="" class="table__icon">
                                    </p>
                                </div>
                                <div class="table__col _total">
                                    <p class="table__content">
                                        30$
                                    </p>
                                </div>
                                <div class="table__col _status">
                                    <div class="table__content">
                                        <div class="JSselect select _table">
                                            <div class="JSselectBtn select__view">
                                                <span class="select__support">
                                                    Действия
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__col _files">
                                    <p class="table__content">
                                        <img src="img/download-icon.svg" alt="" class="table__icon">
                                    </p>
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