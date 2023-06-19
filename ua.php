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

    <title>ТОВ Терравол</title>
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
                        <a class="nav-link" href="#advantages">Переваги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#working">Робота</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#gallery">Галерея</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Про нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#callback">Зв'язок</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контакти</a>
                    </li>
                    <li class="nav-item language">
                        <div class="nav-link">Вибрати мову <img src="./media/flags/UA.png"></div>
                        <div class="languages">
                            <a class="nav-link" href="/"><img src="./media/flags/GB.png"></a>
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
                <div class="col1_row1">щодня з 10:00 до 22:00</div>
                <div class="col1_row2">+38(097)418-37-39</div>
            </div>
        </div>

        <div class="header_banner__col col2">
            <div class="col2_row1"><img src="./media/img/logo3-transparent2.png"> ТОВ Терравол</div>
            <div class="col2_row2">Продукти, що дбають про планету</div>
        </div>

        <div class="header_banner__col col3"></div>
    </div>

</header>

<section class="callback_form">
    <form>
        <div class="callback_close"><i class="icon-xmark-solid"></i></div>
        <div class="title">Заявка</div>

        <label><span style="color: red">*</span> Ім'я
            <input class="form-control" type="text" name="name">
        </label>

        <label><span style="color: red">*</span> Телефон
            <input class="form-control" type="phone" name="phone">
        </label>

        <div class="buttons">
            <div class="h-btn callback_submit">Відправити</div>
        </div>
    </form>
</section>

<section class="section_1">
    <div class="col1">
        <div class="title">Ласкаво просимо у світ екологічно дружніх речовин!</div>
<!--        <div class="description">Заповніть заявку, щоб отримати знижку 10%</div>-->
        <div class="buttons" style="display: none">
            <a class="h-btn more_info" href="#services">Дізнатися більше</a>
            <div class="h-btn get_consultation callback_btn">Отримати консультацію</div>
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
    <div class="col1">     В даний час як вулканізуючий агент при виробництві гумових сумішей в
        Шинної промисловості Європи використовується оксид цинку.
        <br><br>
        Оксид цинку є небезпечною речовиною для навколишнього середовища: Небезпека для водного середовища-Категорія 1, Гостра
        токсична оральна та шкірна - Категорія 5. Щодня на дорогах Європи при зношуванні
        шин в атмосферу викидаються тонни гумового пилу, що містить оксид цинку, який негативно впливає на екологію.
        <br><br>
        Компанія Терравол розробила інноваційний продукт – вулканізуючий агент для виробництва гумових сумішей
        автомобільні шини.
    </div>
    <div class="col2">
        Інноваційність нашого продукту полягає у зменшеному в 2 рази вмісті оксиду цинку в вулканізуючому
        агента в порівнянні з існуючою технологією.
        <br><br>
        При цьому вулканізуючий агент нашого виробництва не містить будь-яких інших шкідливих речовин.
        При застосуванні нашого вулканізуючого агента шини служать на 10-12% довше ніж вироблені традиційною
        технології, і при цьому виділяють у 2 рази менше такої шкідливої речовини як оксид цинку.
        <br><br>
        Таким чином, продукт нашого виробництва в 2 рази більш екологічно чистий, ніж традиційно застосовуваний
        вулканізант і збільшує ресурс шин.
    </div>
</section>

<section class="section_3" id="advantages">
    <div class="title">Наші переваги</div>
    <div class="advantages">

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gears-solid"></i></div>
            <div class="advantage__title">Екологічно дружні речовини</div>
            <div class="advantage__description">
                Зниження викидів: Завдяки інноваційним розробкам наших технологій ми змогли скоротити викид
                небезпечних речовин в атмосферу на 50%. Ми прагнемо покращити якість повітря та охорону навколишнього середовища.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-screwdriver-wrench-solid"></i></div>
            <div class="advantage__title">Гарантія якості</div>
            <div class="advantage__description">
                Збільшення експлуатаційного ресурсу: Наша технологія дозволяє збільшити експлуатаційний ресурс шин на
                10–12%. Тобто промисловість може заощаджувати до 12% сировини та енергетичних ресурсів.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-sliders-solid"></i></div>
            <div class="advantage__title">Суворий контроль</div>
            <div class="advantage__description">
                Екологічна формула: Наш продукт заснований на спеціальній формулі, яка у поєднанні з унікальною
                механо-хімічною обробкою робить його більш екологічним та якісним у порівнянні з традиційними
                матеріалами. Ми прагнемо постійного вдосконалення та зниження впливу на навколишнє середовище.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gear-solid"></i></div>
            <div class="advantage__title">Після нас чисто</div>
            <div class="advantage__description">
                Поліпшення життя: Наші технології спрямовані на покращення життя людей. Ми створюємо продукти, які
                поєднують у собі екологічну відповідальність, довговічність та високу якість, щоб забезпечити
                комфорт, безпеку та задоволення потреб наших клієнтів.
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
            <div class="title">Як ми працюємо</div>

            <div class="item">
                <div class="item__num">01</div>
                <div class="item__title">Дослідження та інновації:</div>
                <div class="item__description">Ми постійно проводимо інноваційні дослідження для розробки екологічно
                    чистих технологій та матеріалів для промисловості.</div>
            </div>

            <div class="item">
                <div class="item__num">02</div>
                <div class="item__title">Стійке виробництво:</div>
                <div class="item__description">Ми здійснюємо стійке виробництво, зменшуючи негативне
                    вплив на навколишнє середовище та застосовуючи енерго- та ресурсозберігаючі процеси.</div>
            </div>

            <div class="item">
                <div class="item__num">03</div>
                <div class="item__title">Екологічна відповідальність:</div>
                <div class="item__description">Ми глибоко дбаємо про навколишнє середовище та вживаємо заходів для скорочення
                    нашого екологічного сліду, взаємодіючи з організаціями та експертами у цій галузі.</div>
            </div>

            <div class="item">
                <div class="item__num">04</div>
                <div class="item__title">Клієнтоорієнтований підхід:</div>
                <div class="item__description">Ми ставимо наших клієнтів на перше місце, пропонуючи індивідуальні
                    рішення та надійну підтримку, щоб забезпечити їхню задоволеність.</div>
            </div>
        </div>
    </div>
</section>

<section class="section_5" id="gallery"  style="display: none">
    <div class="title">Наші роботи</div>
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
        <div class="h-btn open">Розгорнути <i class="fa-solid fa-chevron-down"></i></div>
        <div class="h-btn close">Згорнути <i class="fa-solid fa-chevron-up"></i></div>
    </div>
</section>

<section class="section_6" id="about">
    <div class="row1"><img src="./media/img/logo-cut.png" alt="img"></div>
    <div class="row2">
        <div class="title">Про нас</div>
        <div class="description">
            Терравол – компанія, яка створює інноваційні екологічно-дружні інгрідієнти.
            Наша місія – пропонувати продукти, які роблять промисловість чістішу та енергозберігаючу.
            Ми знизили в ниших продуктах обьем небезпечних речовин до 50% та збільшили ресурс материіалів на 10-12%.
            Наша стійка виробнича практика допомагає скоротити негативний вплив на довкілля. Ми цінуємо клієнтів та
            пропонуємо індивідуальні рішення та підтримку.
            <br><br>
            Приєднуйтесь до нас у створенні більш екологічно чистого та безпечного майбутнього. Ми прагнемо стати
            провідною компанією в індустрії шин, пропонуючи інноваційні рішення, які поєднують високу якість
            та екологічну ефективність. Наша команда експертів постійно досліджує нові технології та матеріали,
            щоб запропонувати нашим клієнтам найкращі рішення для їх автомобілів. Ми пишаємося своєю екологічною
            відповідальністю і прагнемо покращити світ, роблячи кожну подорож безпечною і кожен шлях більш
            екологічно чистим.
            <div>
            </div>
</section>

<section class="section_7" id="callback">
    <div class="col1">
        <div class="title">Залишити заявку на придбання продукту</div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Впишіть ім'я та номер телефону у форму</span></div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Ми зв'язуємося з вами, щоб обговорити умови</span></div>
<!--        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Фахівець заміряє всі дані та складає кошторис</span></div>-->
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Ви підписуєте договір – а ми беремося за справу!</span></div>
    </div>

    <div class="col2 callback_form2">
        <form>
            <div class="title">Залишити заявку</div>
            <label><span style="color: red">*</span> Ім'я
                <input class="form-control" type="text" name="name">
            </label>
            <label><span style="color: red">*</span> Телефон
                <input class="form-control" type="phone" name="phone">
            </label>
            <label><span style="color: red">*</span> Емейл
                <input class="form-control" type="email" name="email">
            </label>
            <div class="buttons">
                <div class="h-btn callback_btn callback_submit">Залишити</div>
            </div>
        </form>
    </div>

    <div class="bg_color"></div>

</section>

<section class="section_8" id="contacts">

    <div class="col1">
        <div class="col1_item title">Контакти</div>
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