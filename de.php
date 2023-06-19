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
                        <a class="nav-link" href="#advantages">Vorteile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#working">Arbeiten</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#gallery">Galerie</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Über uns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#callback">Verbindung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Kontakte</a>
                    </li>
                    <li class="nav-item language">
                        <div class="nav-link">Sprache auswählen <img src="./media/flags/DE.png"></div>
                        <div class="languages">
                            <a class="nav-link" href="/"><img src="./media/flags/GB.png"></a>
                            <a class="nav-link" href="ua.php"><img src="./media/flags/UA.png"></a>
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
                <div class="col1_row1">täglich von 10:00 bis 22:00 Uhr</div>
                <div class="col1_row2">+38(097)418-37-39</div>
            </div>
        </div>

        <div class="header_banner__col col2">
            <div class="col2_row1"><img src="./media/img/logo3-transparent2.png"> LLC Terrawall</div>
            <div class="col2_row2">Produkte, die sich um den Planeten kümmern</div>
        </div>

        <div class="header_banner__col col3"></div>
    </div>

</header>

<section class="callback_form">
    <form>
        <div class="callback_close"><i class="icon-xmark-solid"></i></div>
        <div class="title">Anwendung</div>

        <label><span style="color: red">*</span> Name
            <input class="form-control" type="text" name="name">
        </label>

        <label><span style="color: red">*</span> Telefon
            <input class="form-control" type="phone" name="phone">
        </label>

        <div class="buttons">
            <div class="h-btn callback_submit">Schicken</div>
        </div>
    </form>
</section>

<section class="section_1">
    <div class="col1">
        <div class="title">Willkommen in der Welt der umweltfreundlichen Stoffe!</div>
<!--        <div class="description">Füllen Sie den Antrag aus, um 10 % Rabatt zu erhalten</div>-->
        <div class="buttons" style="display: none">
            <a class="h-btn more_info" href="#services">Erfahren Sie mehr</a>
            <div class="h-btn get_consultation callback_btn">Lassen Sie sich beraten</div>
        </div>
    </div>
</section>

<!--    HIDDEN  -->
<section class="section_2" id="services" style="display: none">
    <div class="title">Unsere Dienstleistungen</div>
    <div class="services">

        <div class="service">
            <div class="service__col1"><img src="./media/img/58689658.jpg" alt="img"></div>
            <div class="service__col2">
                <div class="service__title">Reparatur von Wohnungen</div>
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
    <div class="col1">Derzeit als Vulkanisationsmittel bei der Herstellung von Gummimischungen eingesetzt
        Die europäische Reifenindustrie verwendet Zinkoxid.
        <br><br>
        Zinkoxid ist ein umweltgefährdender Stoff: Gewässergefährdung – Kategorie 1, akut
        giftig für Mund und Haut – Kategorie 5. Alltag auf den Straßen Europas mit Abnutzung
        Bei der Herstellung von Reifen gelangen Tonnen von zinkoxidhaltigem Gummistaub in die Atmosphäre, was sich negativ auf die Umwelt auswirkt.
        <br><br>
        Das Unternehmen Terravol hat ein innovatives Produkt entwickelt – ein Vulkanisationsmittel zur Herstellung von Gummimischungen
        Autoreifen
    </div>
    <div class="col2">
        Die Innovation unseres Produkts besteht in einer zweifachen Reduzierung des Zinkoxidgehalts im Vulkanisationsmittel
        Agent im Vergleich zur bestehenden Technologie.
        <br><br>
        Gleichzeitig enthält das Vulkanisationsmittel unserer Produktion keine weiteren Schadstoffe.
        Bei Verwendung unseres Vulkanisationsmittels halten Reifen 10-12 % länger als herkömmliche
        Technologien und emittieren gleichzeitig zweimal weniger schädliche Substanzen wie Zinkoxid.
        <br><br>
        Somit ist das Produkt unserer Produktion 2-mal umweltfreundlicher als traditionell verwendetes
        Vulkanisierer und erhöht die Lebensdauer des Reifens.
    </div>
</section>

<section class="section_3" id="advantages">
    <div class="title">Unsere Vorteile</div>
    <div class="advantages">

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gears-solid"></i></div>
            <div class="advantage__title">Umweltfreundliche Substanzen</div>
            <div class="advantage__description">
                Reduzierung der Emissionen: Dank der innovativen Entwicklung unserer Technologien konnten wir den
                Ausstoß gefährlicher Stoffe in die Atmosphäre um 50 % reduzieren. Wir sind bestrebt, die Luftqualität
                und den Umweltschutz zu verbessern.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-screwdriver-wrench-solid"></i></div>
            <div class="advantage__title">Qualitätsgarantie</div>
            <div class="advantage__description">
                Erhöhte Lebensdauer: Unsere Technologie ermöglicht es Ihnen, die Lebensdauer von Reifen zu erhöhen
                um 10–12 %. Sie werden die Langlebigkeit und Zuverlässigkeit unserer Produkte genießen und dadurch Geld sparen
                Zeit und Ressourcen.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-sliders-solid"></i></div>
            <div class="advantage__title">Strenge Kontrolle</div>
            <div class="advantage__description">
                Umweltfreundliche Formel: Unser Produkt basiert auf einer speziellen Formel, kombiniert mit einem einzigartigen
                Durch die mechanisch-chemische Verarbeitung ist es im Vergleich zu herkömmlichen Verfahren ökologischer und hochwertiger
                Materialien Wir streben nach kontinuierlicher Verbesserung und Reduzierung der Umweltbelastung.
            </div>
        </div>

        <div class="advantage">
            <div class="advantage__icon"><i class="icon-gear-solid"></i></div>
            <div class="advantage__title">Hinter uns ist es sauber</div>
            <div class="advantage__description">
                Leben verbessern: Unsere Technologien zielen darauf ab, das Leben der Menschen zu verbessern. Wir schaffen Produkte, die
                Kombinieren Sie Umweltverantwortung, Langlebigkeit und hohe Qualität, um dies zu gewährleisten
                Komfort, Sicherheit und Befriedigung der Bedürfnisse unserer Kunden.
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
            <div class="title">Wie wir arbeiten</div>

            <div class="item">
                <div class="item__num">01</div>
                <div class="item__title">Forschung und Innovation:</div>
                <div class="item__description">Wir betreiben ständig innovative Forschung, um uns ökologisch weiterzuentwickeln
                    saubere Technologien und Materialien für die Industrie.</div>
            </div>

            <div class="item">
                <div class="item__num">02</div>
                <div class="item__title">Nachhaltige Produktion:</div>
                <div class="item__description">Wir führen eine nachhaltige Produktion durch und reduzieren so das Negative
                    Auswirkungen auf die Umwelt und den Einsatz energie- und ressourcenschonender Verfahren.</div>
            </div>

            <div class="item">
                <div class="item__num">03</div>
                <div class="item__title">Umweltverantwortung:</div>
                <div class="item__description">Wir legen großen Wert auf die Umwelt und ergreifen Maßnahmen zur Reduzierung
                    unseres ökologischen Fußabdrucks durch die Interaktion mit Organisationen und Experten auf diesem Gebiet.</div>
            </div>

            <div class="item">
                <div class="item__num">04</div>
                <div class="item__title">Kundenorientierter Ansatz:</div>
                <div class="item__description">Wir stellen unsere Kunden in den Mittelpunkt, indem wir ihnen individuelle Angebote machen
                    Lösungen und zuverlässige Unterstützung, um ihre Zufriedenheit sicherzustellen.</div>
            </div>
        </div>
    </div>
</section>

<section class="section_5" id="gallery"  style="display: none">
    <div class="title">Unsere Arbeiten</div>
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
        <div class="h-btn open">Expandieren <i class="fa-solid fa-chevron-down"></i></div>
        <div class="h-btn close">Zusammenbruch <i class="fa-solid fa-chevron-up"></i></div>
    </div>
</section>

<section class="section_6" id="about">
    <div class="row1"><img src="./media/img/logo-cut.png" alt="img"></div>
    <div class="row2">
        <div class="title">Über uns</div>
        <div class="description">
            Terravol ist ein Unternehmen, das innovative umweltfreundliche Inhaltsstoffe herstellt.
            Unsere Mission ist es, Produkte anzubieten, die die Industrie sauberer und energieeffizienter machen.
            Wir haben die Menge gefährlicher Substanzen in unseren Produkten um bis zu 50 % reduziert und den
            Materialverbrauch um 10–12 % erhöht. Unsere nachhaltigen Herstellungspraktiken tragen dazu bei, unsere
            negativen Auswirkungen auf die Umwelt zu reduzieren. Wir schätzen unsere Kunden und bieten maßgeschneiderte
            Lösungen und Support.
            <br><br>
            Schaffen Sie gemeinsam mit uns eine grünere und sicherere Zukunft. Wir streben danach, zu werden
            Ein führendes Unternehmen in der Reifenindustrie, das innovative Lösungen mit hoher Qualität anbietet
            und Umwelteffizienz. Unser Expertenteam forscht ständig an neuen Technologien und Materialien,
            unseren Kunden die besten Lösungen für ihre Autos anzubieten. Wir sind stolz auf unsere ökologische
            Wir übernehmen Verantwortung und streben danach, die Welt zu verbessern, indem wir jede Reise sicherer und jeden Weg sicherer machen
            ökologisch sauber.
            <div>
            </div>
</section>

<section class="section_7" id="callback">

    <div class="col1">
        <div class="title">Hinterlassen Sie eine Anfrage zum Kauf des Produkts</div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Geben Sie Ihren Namen und Ihre Telefonnummer in das Formular ein</span></div>
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Wir werden Sie kontaktieren, um die Konditionen zu besprechen</span></div>
<!--        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Der Spezialist misst alle Daten und erstellt eine Schätzung</span></div>-->
        <div class="item"><div><i class="icon-check-solid"></i></div> <span>Sie unterschreiben den Vertrag – und wir machen uns an die Arbeit!</span></div>
    </div>

    <div class="col2 callback_form2">
        <form>
            <div class="title">Hinterlassen Sie eine Anfrage</div>
            <label><span style="color: red">*</span> Name
                <input class="form-control" type="text" name="name">
            </label>
            <label><span style="color: red">*</span> Telefon
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
        <div class="col1_item title">Kontakte</div>
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