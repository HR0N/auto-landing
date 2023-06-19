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
    <link rel="stylesheet" href="css/section_text.css">
    <link rel="stylesheet" href="css/callback_form.css">
    <link rel="stylesheet" href="fonts/icomoon/font-icons.css">
    <meta name="format-detection" content="telephone=no">

    <!--    jQuery, Bootstrap   -->
    <script src="libs/jquery/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!--    Font Awesome -->
    <script src="https://kit.fontawesome.com/ee97ebf0ee.js" crossorigin="anonymous"></script>

    <title>LLC Terrawall</title>
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
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Головна</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#advantages">Advantages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#working">Work</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#callback">Connection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Contacts</a>
                    </li>
                    <li class="nav-item language">
                        <div class="nav-link">Select language <img src="./media/flags/GB.png"></div>
                        <div class="languages">
                            <a class="nav-link" href="ua.php"><img src="./media/flags/UA.png"></a>
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
                <div class="col1_row1">daily from 10:00 am to 10:00 pm</div>
                <div class="col1_row2">+38(097)418-37-39</div>
            </div>
        </div>

        <div class="header_banner__col col2">
            <div class="col2_row1"><img src="./media/img/logo3-transparent2.png"> LLC Terrawall</div>
            <div class="col2_row2">Products that care for the planet</div>
        </div>

        <div class="header_banner__col col3"></div>
    </div>

</header>

<section class="callback_form">
    <form>
        <div class="callback_close"><i class="icon-xmark-solid"></i></div>
        <div class="title">Application</div>

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

<section class="section_1">
    <div class="col1">
        <div class="title">Welcome to the world of environmentally friendly substances!</div>
<!--        <div class="description">Complete the application to receive a 10% discount</div>-->
        <div class="buttons" style="display: none">
            <a class="h-btn more_info" href="#services">Learn more</a>
            <div class="h-btn get_consultation callback_btn">Get a consultation</div>
        </div>
    </div>
</section>

<!--    HIDDEN  -->
<section class="section_2" id="services" style="display: none">
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

<section class="section_text">
    <div class="col1">Currently, zinc oxide is used as a vulcanizing agent in the production of rubber compounds in the European tire industry.
        <br><br>
        Zinc oxide is a hazardous substance for the environment: Hazard for the aquatic environment-Category 1, Acute
        toxic oral and skin - Category 5. Everyday on the roads of Europe with wear and tear
        tires, tons of rubber dust containing zinc oxide is released into the atmosphere, which has a negative impact on the environment.
        <br><br>
        The Terravol company has developed an innovative product - a vulcanizing agent for the production of rubber compounds
        car tires
    </div>
    <div class="col2">
        The innovativeness of our product consists in a 2-fold reduction in the content of zinc oxide in the vulcanizing agent
        agent compared to existing technology.
        <br><br>
        At the same time, the vulcanizing agent of our production does not contain any other harmful substances.
        When using our vulcanizing agent, tires last 10-12% longer than conventional ones
        technologies, and at the same time emit 2 times less of such a harmful substance as zinc oxide.
        <br><br>
        Thus, the product of our production is 2 times more environmentally friendly than traditionally used
        vulcanizer and increases tire life.
    </div>
</section>

<section class="section_3" id="advantages">
    <div class="title">Our advantages</div>
    <div class="advantages">

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gears-solid"></i></div>
            <div class="advantage__title">Environmentally friendly substances</div>
            <div class="advantage__description">
                Reduction of emissions: Thanks to the innovative development of our technologies, we were able
                to reduce the emission of hazardous substances into the atmosphere by 50%. We strive to improve
                air quality and environmental protection.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-screwdriver-wrench-solid"></i></div>
            <div class="advantage__title">Quality guarantee</div>
            <div class="advantage__description">
                Increased service life: Our technology allows you to increase the service life of tires
                by 10–12%. You will be able to enjoy the durability and reliability of our products, which saves you
                time and resources.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-sliders-solid"></i></div>
            <div class="advantage__title">Strict control</div>
            <div class="advantage__description">
                Eco-friendly formula: Our product is based on a special formula that, combined with a unique
                mechano-chemical processing makes it more ecological and high-quality compared to traditional ones
                materials We strive for continuous improvement and reduction of environmental impact.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gear-solid"></i></div>
            <div class="advantage__title">It's clean after us</div>
            <div class="advantage__description">
                Improving lives: Our technologies are aimed at improving people's lives. We create products that
                combine environmental responsibility, durability and high quality to ensure
                comfort, safety and satisfaction of our customers' needs.
            </div>
        </div>

    </div>
</section>

<section class="section_4" id="working">
    <div class="col1">
        <div class="bg_color_frame"></div>
        <div class="image"><img src="./media/img/imgonline-com-ua-Mirror-iiFn0MsnVoW.jpg" alt="img"></div>
    </div>
    <div class="col2">
        <div class="col2_wrapper">
            <div class="title">How we work</div>

            <div class="item">
                <div class="item__num">01</div>
                <div class="item__title">Research and innovation:</div>
                <div class="item__description">We constantly conduct innovative research to develop ecologically
                    clean technologies and materials for industry.</div>
            </div>

            <div class="item">
                <div class="item__num">02</div>
                <div class="item__title">Sustainable production:</div>
                <div class="item__description">We carry out sustainable production, reducing the negative
                    impact on the environment and using energy- and resource-saving processes.</div>
            </div>

            <div class="item">
                <div class="item__num">03</div>
                <div class="item__title">Environmental responsibility:</div>
                <div class="item__description">We care deeply about the environment and take steps to reduce
                    our ecological footprint by interacting with organizations and experts in the field.</div>
            </div>

            <div class="item">
                <div class="item__num">04</div>
                <div class="item__title">Customer-oriented approach:</div>
                <div class="item__description">We put our customers first by offering individual
                    solutions and reliable support to ensure their satisfaction.</div>
            </div>
        </div>
    </div>
</section>

<section class="section_5" id="gallery" style="display: none">
    <div class="title">Our works</div>
    <div class="our_work">
        <div class="image image1"><img src="./media/img/2d3f49f0346220a1af1e94f0d8d3d51e.jpg" alt="img"></div>
        <div class="image image2"><img src="./media/img/6f4636546559d97079251c57cb1584a5.jpg" alt="img"></div>
        <div class="image image3"><img src="./media/img/3eed3da982dc5743f3c1b33ec152d05d.jpg" alt="img"></div>
        <div class="image image4"><img src="./media/img/56cc3344d9eafa5cadbf9cd68eb2f192.jpg" alt="img"></div>
        <div class="image image5"><img src="./media/img/9bedb2ad7226ed8b8d4cb2dc1666d33f.jpg" alt="img"></div>
        <div class="image image6"><img src="./media/img/183b0015f89000ca5be385d571913f3a.jpg" alt="img"></div>
        <div class="image image7"><img src="./media/img/34a201ac1145bff43ec5d839258881eb.jpg" alt="img"></div>
        <div class="image image8"><img src="./media/img/62b0bda517f43dec8b11580bb99b6770.jpg" alt="img"></div>
        <div class="image image9"><img src="./media/img/48077b87275e5204eb8ec92c5d55adc3.jpg" alt="img"></div>
    </div>
    <div class="buttons">
        <div class="h-btn open">Expand <i class="fa-solid fa-chevron-down"></i></div>
        <div class="h-btn close">Collapse <i class="fa-solid fa-chevron-up"></i></div>
    </div>
</section >

<section class="section_6" id="about">
    <div class="row1"><img src="./media/img/logo-cut.png" alt="img"></div>
    <div class="row2">
        <div class="title">About us</div>
        <div class="description">
            Terravol is a company that creates innovative environmentally friendly ingredients.
            Our mission is to offer products that make industry cleaner and more energy efficient. We have
            reduced the amount of hazardous substances in our products by up to 50% and increased the resource
            of materials by 10-12%. Our sustainable manufacturing practices help reduce our negative impact on
            the environment. We value our customers and offer customized solutions and support.
            <br><br>
            Join us in creating a greener and safer future. We strive to become
            a leading company in the tire industry, offering innovative solutions that combine high quality
            and environmental efficiency. Our team of experts is constantly researching new technologies and materials,
            to offer our customers the best solutions for their cars. We are proud of our ecological
            responsibility and strive to improve the world by making every journey safer and every path more
            ecologically clean.
        <div>
    </div>
</section>

<section class="section_7" id="callback">

    <div class="col1">
        <div class="title">Leave a request to purchase the product</div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Enter your name and phone number in the form</span></div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>We will contact you to discuss the terms</span></div>
<!--        <div class="item"><div><i class="icon-check-solid"></i></div> <span>The specialist measures all data and makes an estimate</span></div>-->
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>You sign the contract - and we get down to business!</span></div>
    </div>

    <div class="col2 callback_form2">
        <form>
            <div class="title">Leave a request</div>
            <label><span style="color: red">*</span> Name
                <input class="form-control" type="text" name="name">
            </label>
            <label><span style="color: red">*</span> Phone
                <input class="form-control" type="phone" name="phone">
            </label>
            <label><span style="color: red">*</span> Email
                <input class="form-control" type="email" name="email">
            </label>
            <div class="buttons">
                <div class="h-btn callback_btn callback_submit">Send</div>
            </div>
        </form>
    </div>

    <div class="bg_color"></div>

</section>

<section class="section_8" id="contacts">

    <div class="col1">
        <div class="col1_item title">Contacts</div>
        <div class="col1_item phone"><i class="icon-phone-solid"></i> +38(097)418-37-39</div>
        <div class="col1_item email"><i class="icon-envelope-regular"></i> rtiaktivator@gmail.com</div>
<!--        <div class="col1_item address"><i class="icon-location-dot-solid"></i> г. Киев,​бульв. Шевченка, дом</div>-->
    </div>

    <div class="col2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.427816788521!2d31.24988917643371!3d51.468661071804604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d54f4b8ddf3ff5%3A0x8e89a68c4c2b3fcc!2z0JjQvdC00YPRgdGC0YDQuNCw0LvRjNC90LDRjyDRg9C7LiwgNdCwLCDQp9C10YDQvdC40LPQvtCyLCDQp9C10YDQvdC40LPQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDE0MDAw!5e0!3m2!1sru!2sua!4v1687124502530!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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