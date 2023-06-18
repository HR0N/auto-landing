<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/section_1.css">
    <link rel="stylesheet" href="css/section_2.css">
    <link rel="stylesheet" href="css/section_3.css">
    <link rel="stylesheet" href="css/section_4.css">
    <link rel="stylesheet" href="css/section_5.css">
    <link rel="stylesheet" href="css/section_6.css">
    <link rel="stylesheet" href="css/section_7.css">
    <link rel="stylesheet" href="css/section_8.css">
    <link rel="stylesheet" href="css/callback_form.css">
    <link rel="stylesheet" href="fonts/icomoon/font-icons.css">
    <meta name="format-detection" content="telephone=no">

    <!--    jQuery, Bootstrap   -->
    <script src="libs/jquery/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!--    Font Awesome -->
    <script src="https://kit.fontawesome.com/ee97ebf0ee.js" crossorigin="anonymous"></script>

    <title>auto landing</title>
</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" aria-current="page" href="#">Home</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Про нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Акції</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Галерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Відгуки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контакти</a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link" href="#"><img src="./media/flags/GB.png"></a>
                        <div class="languages">
                            <a class="nav-link" href="index.php"><img src="./media/flags/UA.png"></a>
                            <a class="nav-link" href="de.php"><img src="./media/flags/DE.png"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header_banner">
        <div class="header_banner__col col1">
            <div class="col1_col1"><i class="icon-phone-volume-solid"></i></div>
            <div class="col1_col2">
                <div class="col1_row1">ежедневно с 10:00 до 22:00</div>
                <div class="col1_row2">+38 (123) 123-45-67</div>
            </div>
        </div>

        <div class="header_banner__col col2">
            <div class="col2_row1">Ваше название</div>
            <div class="col2_row2">Ремонт и отделка квартир</div>
        </div>

        <div class="header_banner__col col3"></div>
    </div>

</header>

<section class="callback_form">
    <form>
        <div class="callback_close"><i class="icon-xmark-solid"></i></div>
        <div class="title">Заявка</div>

        <label><span style="color: red">*</span> Name
            <input class="form-control" type="text" name="name">
        </label>

        <label><span style="color: red">*</span> Phone
            <input class="form-control" type="phone" name="phone">
        </label>

        <div class="buttons">
            <div class="h-btn callback_submit">Send</div>
        </div>
    </form>
</section>

<section class="section_1" id="about">
    <div class="col1">
        <div class="title">Відчиніть двері до своєї нової квартири</div>
        <div class="description">Заповніть заявку, щоб отримати знижку 10%</div>
        <div class="buttons">
            <a class="h-btn more_info" href="#services">Дізнатися більше</a>
            <div class="h-btn get_consultation callback_btn">Отримати консультацію</div>
        </div>
    </div>
</section>

<section class="section_2" id="services">
    <div class="title">Наші послуги</div>
    <div class="services">

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689658.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Ремонт квартир</div>
                <ul class="service_list">
                    <li>Устройство наливных полов</li>
                    <li>Электромонтажные работы</li>
                    <li>Оклейка стен обоями</li>
                    <li>Монтаж дверей</li>
                    <li>Укладка ламината и линолеума</li>
                    <li>Монтаж потолков</li>
                    <li>Дизайн-проект и 3D-визуализция</li>
                </ul>
                <div class="buttons">
                    <div class="h-btn more_info callback_btn">Дізнатися більше</div>
                </div>
            </div>
        </div>

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689659.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Ремонт будинків та котеджів</div>
                <ul class="service_list">
                    <li>Устройство наливных полов</li>
                    <li>Электромонтажные работы</li>
                    <li>Оклейка стен обоями</li>
                    <li>Монтаж дверей</li>
                    <li>Укладка ламината и линолеума</li>
                    <li>Монтаж потолков</li>
                    <li>Дизайн-проект и 3D-визуализция</li>
                </ul>
                <div class="buttons">
                    <div class="h-btn more_info callback_btn">Дізнатися більше</div>
                </div>
            </div>
        </div>

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689660.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Ремонт офісів</div>
                <ul class="service_list">
                    <li>Устройство наливных полов</li>
                    <li>Электромонтажные работы</li>
                    <li>Оклейка стен обоями</li>
                    <li>Монтаж дверей</li>
                    <li>Укладка ламината и линолеума</li>
                    <li>Монтаж потолков</li>
                    <li>Дизайн-проект и 3D-визуализция</li>
                </ul>
                <div class="buttons">
                    <div class="h-btn more_info callback_btn">Дізнатися більше</div>
                </div>
            </div>
        </div>

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689661.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Ремонт ванних кімнат</div>
                <ul class="service_list">
                    <li>Устройство наливных полов</li>
                    <li>Электромонтажные работы</li>
                    <li>Оклейка стен обоями</li>
                    <li>Монтаж дверей</li>
                    <li>Укладка ламината и линолеума</li>
                    <li>Монтаж потолков</li>
                    <li>Дизайн-проект и 3D-визуализция</li>
                </ul>
                <div class="buttons">
                    <div class="h-btn more_info callback_btn">Дізнатися більше</div>
                </div>
            </div>
        </div>

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689662.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Капітальний ремонт</div>
                <ul class="service_list">
                    <li>Устройство наливных полов</li>
                    <li>Электромонтажные работы</li>
                    <li>Оклейка стен обоями</li>
                    <li>Монтаж дверей</li>
                    <li>Укладка ламината и линолеума</li>
                    <li>Монтаж потолков</li>
                    <li>Дизайн-проект и 3D-визуализция</li>
                </ul>
                <div class="buttons">
                    <div class="h-btn more_info callback_btn">Дізнатися більше</div>
                </div>
            </div>
        </div>

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689663.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Внутренняя отделка</div>
                <ul class="service_list">
                    <li>Устройство наливных полов</li>
                    <li>Электромонтажные работы</li>
                    <li>Оклейка стен обоями</li>
                    <li>Монтаж дверей</li>
                    <li>Укладка ламината и линолеума</li>
                    <li>Монтаж потолков</li>
                    <li>Дизайн-проект и 3D-визуализция</li>
                </ul>
                <div class="buttons">
                    <div class="h-btn more_info callback_btn">Дізнатися більше</div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section_3">
    <div class="title">Наши преимущества</div>
    <div class="advantages">

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gears-solid"></i></div>
            <div class="advantage__title">Скидки на материалы</div>
            <div class="advantage__description">
                Экономия на материалах – работая с нами. Вы экономите до 25% на
                строительных материалах, которые мы закупаем у крупнейших поставщиках качественных материалах со
                скидкой.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-screwdriver-wrench-solid"></i></div>
            <div class="advantage__title">Гарантия 7 лет</div>
            <div class="advantage__description">
                Экономия на материалах – работая с нами. Вы экономите до 25% на
                строительных материалах, которые мы закупаем у крупнейших поставщиках качественных материалах со
                скидкой.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-sliders-solid"></i></div>
            <div class="advantage__title">Строгий контроль</div>
            <div class="advantage__description">
                Экономия на материалах – работая с нами. Вы экономите до 25% на
                строительных материалах, которые мы закупаем у крупнейших поставщиках качественных материалах со
                скидкой.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gear-solid"></i></div>
            <div class="advantage__title">После нас чисто</div>
            <div class="advantage__description">
                Экономия на материалах – работая с нами. Вы экономите до 25% на
                строительных материалах, которые мы закупаем у крупнейших поставщиках качественных материалах со
                скидкой.
            </div>
        </div>

    </div>
</section>

<section class="section_4">
    <div class="col1">
        <div class="bg_color_frame"></div>
        <div class="image"><img src="./media/img/54588545_2.jpg" alt="img"></div>
    </div>
    <div class="col2">
        <div class="col2_wrapper">
            <div class="title">Как мы работаем</div>

            <div class="item">
                <div class="item__num">01</div>
                <div class="item__title">Заявка</div>
                <div class="item__description">Вы оставляете заявку на нашем сайте или связываетесь любым удобным для вас способом.</div>
            </div>

            <div class="item">
                <div class="item__num">02</div>
                <div class="item__title">Выезд специалиста</div>
                <div class="item__description">Вы оставляете заявку на нашем сайте или связываетесь любым удобным для вас способом.</div>
            </div>

            <div class="item">
                <div class="item__num">03</div>
                <div class="item__title">Оценка работ</div>
                <div class="item__description">Вы оставляете заявку на нашем сайте или связываетесь любым удобным для вас способом.</div>
            </div>

            <div class="item">
                <div class="item__num">04</div>
                <div class="item__title">Заключение договора</div>
                <div class="item__description">Вы оставляете заявку на нашем сайте или связываетесь любым удобным для вас способом.</div>
            </div>
        </div>
    </div>
</section>

<section class="section_5" id="gallery">
    <div class="title">Наши работы</div>
    <div class="our_work">
        <div class="image image1"><img src="./media/img/55188396_2.jpg" alt="img"></div>
        <div class="image image2"><img src="./media/img/55162791_2.jpg" alt="img"></div>
        <div class="image image3"><img src="./media/img/55155608_2.jpg" alt="img"></div>
        <div class="image image4"><img src="./media/img/55155607_2.jpg" alt="img"></div>
        <div class="image image5"><img src="./media/img/55155605_2.jpg" alt="img"></div>
        <div class="image image6"><img src="./media/img/55155590_2.jpg" alt="img"></div>
        <div class="image image7"><img src="./media/img/55151427_2.jpg" alt="img"></div>
        <div class="image image8"><img src="./media/img/55143623_2.jpg" alt="img"></div>
        <div class="image image9"><img src="./media/img/55136844_2.jpg" alt="img"></div>
    </div>
    <div class="buttons">
        <div class="h-btn open">Развернть <i class="fa-solid fa-chevron-down"></i></div>
        <div class="h-btn close">Свернуть <i class="fa-solid fa-chevron-up"></i></div>
    </div>
</section>

<section class="section_6">
    <div class="row1"><img src="./media/img/58689664.jpg" alt="img"></div>
    <div class="row2">
        <div class="title">О нас</div>
        <div class="description">Не секрет, что ремонт, если браться за него исключительно своими силами, дело крайне трудоемкое, затратное и зачастую длительное. Ремонт может долго отнимать Ваши время, нервы и деньги, а потому мы предлагаем Вам избавиться от подобной головной боли и обратиться к профессионалам.

            ​​​​​​</br></br>Наша компания давно зарекомендовала себя как ответственный и надежный исполнитель ремонтно-строительных работ.

            </br></br>Мы предоставляем исчерпывающий комплекс услуг: ремонтные работы в квартире, офисе или загородном доме, капитальный или косметический ремонт - наши специалисты готовы выполнить работы любой сложности.</div>
    </div>
</section>

<section class="section_7">

    <div class="col1">
        <div class="title">Закажите смету объекта прямо сейчас</div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Впишите имя и номер телефона в форму</span></div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Мы связываемся с вами, чтобы обсудить условия</span></div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Специалист замеряет все данные и составляет смету</span></div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Вы подписываете договор - а мы берёмся за дело!</span></div>
    </div>

    <div class="col2">
        <form>
            <div class="title">Оставить заявку</div>
            <label><span style="color: red">*</span> Name
                <input class="form-control" type="text">
            </label>
            <label><span style="color: red">*</span> Phone
                <input class="form-control" type="text">
            </label>
            <div class="buttons">
                <div class="h-btn callback_btn">Залишити</div>
            </div>
        </form>
    </div>

    <div class="bg_color"></div>

</section>

<section class="section_8" id="contacts">

    <div class="col1">
        <div class="col1_item title">Контакты</div>
        <div class="col1_item phone"><i class="icon-phone-solid"></i> +38 (123) 123-45-67</div>
        <div class="col1_item email"><i class="icon-envelope-regular"></i> login@domain.ua</div>
        <div class="col1_item address"><i class="icon-location-dot-solid"></i> г. Киев,​бульв. Шевченка, дом</div>
    </div>

    <div class="col2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325519.57562797837!2d30.20305328315602!3d50.401569779157235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1687034846894!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>



</body>
<script src="js/father.js"></script>
<script src="js/section_5.js"></script>
<script src="js/callback_form.js"></script>
<script src="js/env.js"></script>
<script src="js/language.js"></script>
<script>$(document).ready(() => {new Language('header')});</script>
<script>$(document).ready(() => {new Callback_form('body')});</script>
<script>$(document).ready(() => {new Section_5Class('.section_5')});</script>
</html>