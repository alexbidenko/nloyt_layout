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
            <?php include "templates/orderNav.php"; ?>
            <div class="contentBox__inner">
                <div class="contentBox__item">
                    <div class="contentBox__actions">
                        <img src="img/add-icon.svg" alt="" class="contentBox__action">
                        <img src="img/delete-icon.svg" alt="" class="contentBox__action">
                        <img src="img/next-icon.svg" alt="" class="contentBox__action">
                    </div>
                    <div class="contentBox__table">
                        <div class="JStable table _order">
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
                                    <div class="table__col _description">
                                        <p class="table__content">
                                            Наименование услуги
                                        </p>
                                    </div>
                                    <div class="table__col _approve">
                                        <p class="table__content">
                                            Согласование
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            EDT
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            Цена
                                        </p>
                                    </div>
                                    <div class="table__col _discount">
                                        <p class="table__content">
                                            Скидка
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            ИТОГО
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
                                    <div class="table__col _description">
                                        <p class="table__content">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                    <div class="table__col _approve">
                                        <img src="img/table-icon-1.svg" alt="" class="table__icon">
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            20 m
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
                                        </p>
                                    </div>
                                    <div class="table__col _discount">
                                        <p class="table__content">
                                            -
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
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
                                    <div class="table__col _description">
                                        <p class="table__content">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                    <div class="table__col _approve">
                                        <img src="img/table-icon-1.svg" alt="" class="table__icon">
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            20 m
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
                                        </p>
                                    </div>
                                    <div class="table__col _discount">
                                        <p class="table__content">
                                            -
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
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
                                    <div class="table__col _description">
                                        <p class="table__content">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                    <div class="table__col _approve">
                                        <img src="img/table-icon-1.svg" alt="" class="table__icon">
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            20 m
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
                                        </p>
                                    </div>
                                    <div class="table__col _discount">
                                        <p class="table__content">
                                            -
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
                                        </p>
                                    </div>
                                </div>
                                <div class="table__row _result">
                                    <div class="table__col _checkbox">

                                    </div>
                                    <div class="table__col _description">
                                        <p class="table__content">
                                            Итого (3) услуги
                                        </p>
                                    </div>
                                    <div class="table__col _approve">

                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            20 m
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
                                        </p>
                                    </div>
                                    <div class="table__col _discount">
                                        <p class="table__content">
                                            -
                                        </p>
                                    </div>
                                    <div class="table__col _types">
                                        <p class="table__content">
                                            $30
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentBox__item">
                    <div class="contentBox__actions">
                        <img src="img/add-icon.svg" alt="" class="contentBox__action">
                        <img src="img/delete-icon.svg" alt="" class="contentBox__action">
                        <img src="img/next-icon.svg" alt="" class="contentBox__action">
                        <img src="img/done-icon.svg" alt="" class="contentBox__action">
                    </div>
                    <div class="contentBox__table">
                        <div class="JStable table _order">
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
                                    <div class="table__col _conclusion">
                                        <p class="table__content">
                                            Наименование услуги
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            Уровень риска
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
                                    <div class="table__col _conclusion">
                                        <p class="table__content">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <div class="table__content">
                                            <div class="JSselect select _order">
                                                <div class="JSselectBtn select__view">
                                                    <span class="select__support _low">
                                                        Низкий
                                                    </span>
                                                </div>
                                                <div class="JSselectDrop select__drop">
                                                    <ul class="select__list">
                                                        <li class="select__listItem">
                                                            Низкий
                                                        </li>
                                                        <li class="select__listItem">
                                                            Средний
                                                        </li>
                                                        <li class="select__listItem">
                                                            Высокий
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__row _start">
                                    <div class="table__col _checkbox">
                                        <label class="table__checkbox">
                                            <input type="checkbox" class="table__checkboxInput">
                                            <div class="JSfixSize table__checkboxView">
                                                <img src="img/check-icon.svg" alt="" class="table__checkboxIcon">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="table__col _conclusion">
                                        <textarea class="table__area">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ut earum molestias, ipsam nesciunt reprehenderit eos error maiores sapiente eius cupiditate dolore esse facere amet. Excepturi, unde. Assumenda, dolore iure.</textarea>
                                    </div>
                                    <div class="table__col _info">
                                        <div class="table__content">
                                            <div class="JSselect select _order">
                                                <div class="JSselectBtn select__view">
                                                    <span class="select__support _low">
                                                        Низкий
                                                    </span>
                                                </div>
                                                <div class="JSselectDrop select__drop">
                                                    <ul class="select__list">
                                                        <li class="select__listItem">
                                                            Низкий
                                                        </li>
                                                        <li class="select__listItem">
                                                            Средний
                                                        </li>
                                                        <li class="select__listItem">
                                                            Высокий
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentBox__item">
                    <div class="contentBox__actions">
                        <img src="img/add-icon.svg" alt="" class="contentBox__action">
                        <img src="img/delete-icon.svg" alt="" class="contentBox__action">
                    </div>
                    <div class="contentBox__table">
                        <div class="JStable table _order">
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
                                    <div class="table__col _conclusion">
                                        <p class="table__content">
                                            Наименование документа
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            Дата и время загрузки
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
                                    <div class="table__col _conclusion _file">
                                        <p class="table__content">
                                            BMW complete diagnostic report - safe mode DDv1.32.pdf
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            06/23/2019 14:34
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
                                    <div class="table__col _conclusion _file">
                                        <p class="table__content">
                                            BMW complete diagnostic report - safe mode DDv1.32.pdf
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            06/23/2019 14:34
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentBox__item">
                    <div class="contentBox__actions">
                        <img src="img/add-icon.svg" alt="" class="contentBox__action">
                        <img src="img/delete-icon.svg" alt="" class="contentBox__action">
                    </div>
                    <div class="contentBox__table">
                        <div class="JStable table _order">
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
                                    <div class="table__col _conclusion">
                                        <p class="table__content">
                                            Наименование документа
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            Дата и время загрузки
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
                                    <div class="table__col _conclusion _file">
                                        <p class="table__content">
                                            BMW complete diagnostic report - safe mode DDv1.32.pdf
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            06/23/2019 14:34
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
                                    <div class="table__col _conclusion _file">
                                        <p class="table__content">
                                            BMW complete diagnostic report - safe mode DDv1.32.pdf
                                        </p>
                                    </div>
                                    <div class="table__col _info">
                                        <p class="table__content">
                                            06/23/2019 14:34
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="scripts.min.js?<?= filemtime('scripts.min.js') ?>"></script>



</html>