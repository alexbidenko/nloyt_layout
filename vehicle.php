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
                <div class="contentBox__layer">
                    <div class="contentBox__info">
                        <div class="vehicleInfo">
                            <div class="vehicleInfo__head">
                                <p class="vehicleInfo__headSupport">
                                    OEM warranty & regular service consumtion availability
                                </p>
                                <div class="vehicleInfo__types">
                                    <label class="vehicleInfo__type">
                                        <input name="types" type="radio" class="JSvehicalInput vehicleInfo__typeInput" value="miles" checked>
                                        <div class="vehicleInfo__typeView">
                                            miles
                                        </div>
                                    </label>
                                    <label class="vehicleInfo__type">
                                        <input name="types" type="radio" class="JSvehicalInput vehicleInfo__typeInput" value="months">
                                        <div class="vehicleInfo__typeView">
                                            months
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="vehicleInfo__indicator">
                                <div class="JSvehicalElem vehicleInfo__indicatorElem _current" data-type="miles">
                                    <div class="vehicleInfo__indicatorProgress" style="width:60%;"></div>
                                    <div class="vehicleInfo__indicatorPoint" style="left:75%;"></div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            15
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            30
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            45
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            60
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            75
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            90
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            105
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            120
                                        </p>
                                    </div>
                                </div>
                                <div class="JSvehicalElem vehicleInfo__indicatorElem" data-type="months">
                                    <div class="vehicleInfo__indicatorProgress" style="width:15%;"></div>
                                    <div class="vehicleInfo__indicatorPoint" style="left:45%;"></div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            4
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            8
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            12
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            16
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            18
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            22
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            26
                                        </p>
                                    </div>
                                    <div class="vehicleInfo__indicatorItem">
                                        <p class="vehicleInfo__indicatorNum">
                                            30
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicleInfo__card">
                                <div class="vehicleInfo__cardItem">
                                    <p class="vehicleInfo__cardTitle">
                                        Статус автомобиля
                                    </p>
                                    <p class="vehicleInfo__cardStatus">
                                        Обновлено: 02:45 мин назад
                                    </p>
                                </div>
                                <div class="vehicleInfo__cardItem">
                                    <div class="vehicleInfo__cardPing">
                                        <div class="vehicleInfo__cardIndicator">
                                            <div class="JSfixSize vehicleInfo__cardIndicatorEl _1 _active"></div>
                                            <div class="JSfixSize vehicleInfo__cardIndicatorEl _2 _active"></div>
                                            <div class="JSfixSize vehicleInfo__cardIndicatorEl _3 _active"></div>
                                            <div class="JSfixSize vehicleInfo__cardIndicatorEl _4"></div>
                                        </div>
                                        <div class="vehicleInfo__cardPingStatus">
                                            Ping 97
                                        </div>
                                    </div>
                                    <div class="vehicleInfo__cardState">
                                        ЗАЖИГАНИЕ ВЫКЛ
                                    </div>
                                </div>
                                <div class="vehicleInfo__cardItem">
                                    <div class="vehicleInfo__cardCircles">
                                        <div class="JScircle vehicleInfo__cardCircle" data-val="20" data-radiusDesktop="1.5" data-radiusMobile="2">
                                            <img src="img/vehicle-icon-1.svg" alt="" class="vehicleInfo__cardCircleIcon">
                                            <svg class="vehicleInfo__cardCircleSvg">
                                                <circle class="vehicleInfo__cardCircleItem" />
                                                <circle class="vehicleInfo__cardCircleItem _curry" />
                                            </svg>
                                        </div>
                                        <div class="JScircle vehicleInfo__cardCircle" data-val="35" data-radiusDesktop="1.5" data-radiusMobile="2">
                                            <img src="img/vehicle-icon-2.svg" alt="" class="vehicleInfo__cardCircleIcon">
                                            <svg class="vehicleInfo__cardCircleSvg">
                                                <circle class="vehicleInfo__cardCircleItem" />
                                                <circle class="vehicleInfo__cardCircleItem _curry" />
                                            </svg>
                                        </div>
                                        <div class="JScircle vehicleInfo__cardCircle _count" data-count="1" data-val="100" data-radiusDesktop="1.5" data-radiusMobile="2">
                                            <img src="img/vehicle-icon-3.svg" alt="" class="vehicleInfo__cardCircleIcon">
                                            <svg class="vehicleInfo__cardCircleSvg">
                                                <circle class="vehicleInfo__cardCircleItem" />
                                                <circle class="vehicleInfo__cardCircleItem _curry" />
                                            </svg>
                                        </div>
                                        <div class="JScircle vehicleInfo__cardCircle" data-val="35" data-radiusDesktop="1.5" data-radiusMobile="2">
                                            <img src="img/vehicle-icon-4.svg" alt="" class="vehicleInfo__cardCircleIcon">
                                            <svg class="vehicleInfo__cardCircleSvg">
                                                <circle class="vehicleInfo__cardCircleItem" />
                                                <circle class="vehicleInfo__cardCircleItem _curry" />
                                            </svg>
                                        </div>
                                        <div class="JScircle vehicleInfo__cardCircle" data-val="69" data-radiusDesktop="1.5" data-radiusMobile="2">
                                            <img src="img/vehicle-icon-5.svg" alt="" class="vehicleInfo__cardCircleIcon">
                                            <svg class="vehicleInfo__cardCircleSvg">
                                                <circle class="vehicleInfo__cardCircleItem" />
                                                <circle class="vehicleInfo__cardCircleItem _curry" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicleInfo__table">
                                <div class="vehicleInfo__tableRow _head">
                                    <div class="vehicleInfo__tableCol _name">
                                        Наименование сервисного уведомления
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        Предельное значение
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        Фактическое
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        Дата события
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                                <div class="vehicleInfo__tableRow">
                                    <div class="vehicleInfo__tableCol _name">
                                        Tyre pressure low
                                    </div>
                                    <div class="vehicleInfo__tableCol _treshold">
                                        1.8
                                    </div>
                                    <div class="vehicleInfo__tableCol _value">
                                        1.78
                                    </div>
                                    <div class="vehicleInfo__tableCol _date">
                                        14:23 07/23/19
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentBox__customers _vehicle">
                        <div class="contentBox__customer">
                            <div class="JScustomer customerInfo">
                                <div class="JScustomerHead customerInfo__head">
                                    <p class="customerInfo__title">
                                        Заказчик услуг [<span class="customerInfo__titleItem _green">first time</span>]
                                    </p>
                                </div>
                                <div class="JScustomerDrop customerInfo__content">
                                    <div class="customerInfo__layer _main">
                                        <div class="customerInfo__item _description">
                                            ФИО
                                        </div>
                                        <div class="customerInfo__item _content">
                                            Jeffery Atkinson
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            ФИО
                                        </div>
                                        <div class="customerInfo__item _content">
                                            Jeffery Atkinson
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Телефон #1
                                        </div>
                                        <div class="customerInfo__item _content">
                                            +1 (876) 234-3422
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Телефон #2
                                        </div>
                                        <div class="customerInfo__item _content">
                                            +1 (876) 234-3422
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Электронная почта
                                        </div>
                                        <div class="customerInfo__item _content">
                                            jhsdf@alfdf.ru
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentBox__customer">
                            <div class="JScustomer customerInfo">
                                <div class="JScustomerHead customerInfo__head">
                                    <p class="customerInfo__title">
                                        Водитель ТС [<span class="customerInfo__titleItem _blue">3 orders</span>]
                                    </p>
                                </div>
                                <div class="JScustomerDrop customerInfo__content">
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            ФИО
                                        </div>
                                        <div class="customerInfo__item _content">
                                            Jeffery Atkinson
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Телефон #1
                                        </div>
                                        <div class="customerInfo__item _content">
                                            +1 (876) 234-3422
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Телефон #2
                                        </div>
                                        <div class="customerInfo__item _content">
                                            +1 (876) 234-3422
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Электронная почта
                                        </div>
                                        <div class="customerInfo__item _content">
                                            jhsdf@alfdf.ru
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentBox__customer">
                            <div class="JScustomer customerInfo">
                                <div class="JScustomerHead customerInfo__head">
                                    <p class="customerInfo__title">
                                        Собственник ТС [<span class="customerInfo__titleItem _blue">11 orders</span>]
                                    </p>
                                </div>
                                <div class="JScustomerDrop customerInfo__content">
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Наименование ЮЛ
                                        </div>
                                        <div class="customerInfo__item _content">
                                            Filly’s logistics Inc.
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Телефон #1
                                        </div>
                                        <div class="customerInfo__item _content">
                                            +1 (876) 234-3422
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Телефон #2
                                        </div>
                                        <div class="customerInfo__item _content">
                                            +1 (876) 234-3422
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            Электронная почта
                                        </div>
                                        <div class="customerInfo__item _content">
                                            jhsdf@alfdf.ru
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            ОГРН
                                        </div>
                                        <div class="customerInfo__item _content">
                                            23486324034
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer">
                                        <div class="customerInfo__item _description">
                                            ИНН
                                        </div>
                                        <div class="customerInfo__item _content">
                                            80-234394
                                        </div>
                                    </div>
                                    <div class="customerInfo__layer _adress">
                                        <div class="customerInfo__item _description">
                                            Адрес
                                        </div>
                                        <div class="customerInfo__item _content">
                                            251 Little Falls Drive, Wilmington, New Castle County, Delaware, 19808
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