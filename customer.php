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
                <div class="contentBox__customers">
                    <div class="contentBox__customer">
                        <div class="JScustomer customerInfo">
                            <div class="JScustomerHead customerInfo__head">
                                <p class="customerInfo__title">
                                    Заказчик услуг [<span class="customerInfo__titleItem _green">first time</span>]
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="scripts.min.js?<?= filemtime('scripts.min.js') ?>"></script>



</html>