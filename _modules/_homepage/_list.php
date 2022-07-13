<?php
$data['room'] = 1;
$return = request('reservation/list', 'POST', $data);
//print_r($return);
$homepage = true;
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ferienwohnungheringsdorf</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular?styles=16710" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- custom -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= URL ?>_include/css/index.css">
</head>

<body class="homepage index_home">

    <!-- hero -->
    <section class="home-hero position-relative vh-100 overflow-hidden" id="home-hero">
        <i class="bi translate-middle-y bi-chevron-left hero-prev position-absolute start-0 top-50 ms-5" style="z-index: 34; font-size: .3px;"></i>
        <i class="bi translate-middle-y bi-chevron-right hero-next position-absolute end-0 top-50 me-5" style="z-index: 34; font-size: .3px;"></i>


        <div class="home-hero-wrap position-relative" style="z-index: 20;">
            <div class="home-hero-carousel h-100 position-relative">
                <div class="home-hero-overlay position-absolute start-0 top-0 h-100 w-100"></div>
                <div class="home-respons position-absolute start-0 top-0 h-100 w-100 text-white d-md-flex align-items-center justify-content-start justify-content-lg-center" style="z-index: 10;">
                    <div class="home-hero-text px-3 px-lg-5 px-xxl-0">
                        <h2 class="mb-4">Erholung pur auf der Insel Usedom</h2>
                        <p class="d-none d-lg-block mb-4">Verbringen Sie einzigartige Tage auf der bezaubernden Insel Usedom. Erleben Sie unvergessliche Momente in unseren wunderschönen Ferienwohnungen.</p>
                        <!-- <a href="#homeSecond" class="text-white d-none d-md-inline-block">Sehen Sie mehr</a> -->
                    </div>
                    <div class="home-hero-form mt-5">
                        <form class="d-block" action="<?= URL ?>reservation/step1" method="POST">
                            <div class="resta mb-4">
                                <label class="d-block text-uppercase text-white mb-1">Zimmer Typ</label>
                                <select onchange="reservation()" class="form-select w-100 rounded-0 border bg-dark bg-opacity-25 fw-light m-0 p-2" name="room" id="room">
                                    <option value="194556" selected>Appartement Waldgeflüster</option>
                                    <option value="306040">Appartement Waldblick</option>
                                </select>
                            </div>
                            <!--
                            <div class="resta mb-4">
                                <label class="d-block text-uppercase text-white mb-1">Einchecken</label>
                                <div class="border p-2">
                                    <input type="date" min="<?= date('Y-m-d') ?>" class="w-100 d-block border-0 " style="outline: none !important;" name="startDate">
                                </div>
                            </div>
                            
                            <div class="resta mb-4">
                                <label class="d-block text-uppercase text-white mb-1">Auschecken</label>
                                <div class="border p-2">
                                    <input type="date" min="<?= date('Y-m-d') ?>" class="w-100 d-block border-0" style="outline: none !important;" name="endDate">
                                </div>
                            </div>  -->
                            <div class="resta mb-0 d-none d-md-block">
                                <button class="btn check-avail3 rounded-0 text-white text-uppercase w-100">
                                    <span>Suchen</span>
                                </button>
                            </div>

                            <div class="resta mb-0 d-block d-md-none">

                                <button class="btn check-avail3 rounded-0 text-white text-uppercase w-100">
                                    <span>Suchen</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="position-absolute w-100 h-100 top-0 start-0">
                    <video src="<?= URL ?>_include/img/hero-video.mp4" autoplay muted class="w-100 d-none d-xl-block"></video>
                    <video src="<?= URL ?>_include/img/hero-video.mp4" autoplay muted class="h-100 d-xl-none"></video>
                </div>

            </div>
        </div>
    </section>

    <script id="iw-bookingwidgetScript" type="text/javascript" src=https://www.buchen.travel/shared/_expo/js-scripts/jquery.responsiveIframeComplete.js data-room="<?= $_POST['room'] ?>" data-onlythisroom="1" data-interfaceid="112110" data-cal="all" data-url=https://bookingwidget.im-web.de></script>

    <script>
        function reservation() {
            document.getElementById("reservation_div").innerHTML = "<div class='iw-bookingwidget'></div>";
        }
    </script>

    <!-- seceond -->
    <section class="home-second" id="homeSecond">
        <div class="home-second-wrap py-xl-5">
            <div class="container">
                <div class="row" id="reservation_div">

                </div>
                <div class="row g-xxl-5">
                    <!-- left -->
                    <div class="col-lg-4 overflow-hidden">
                        <div class="text-end">
                            <p class="fs-5">
                                Die knapp 450 Quadratkilometer große Insel Usedom gehört zu den besonders schönen Zielen für einen maritimen Ostseeurlaub.
                            </p>
                            <div class="mb-3 position-relative">
                                <img class="mt-5 mb-3 img-fluid" src="<?= URL ?>_include/img/map-usedom.png" alt="" style="transform: rotate(25deg) translateX(25px);">
                                <img class="position-absolute end-0 bottom-0" src="<?= URL ?>_include/img/stars.png" alt="">
                            </div>
                            <h4 class="mb-3" style="color: #b56953; font-size: 23px; line-height: 30px; font-weight: 500;">
                                Prima Ausstattung, von Servietten bis Salz-und Pfeffer alles vorhanden. Sehr ruhige Umgebung, freundliche Nachbarn. Wir würden wieder hinfahren.
                            </h4>
                            <p style="text-align: right; color: #b56953; font-family: Brandon Grotesque; font-size: 16px; line-height: 30px; font-weight: 300;">
                                Yvette - booking.com
                            </p>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-lg-8">
                        <div class="mb-1">
                            <h2 class="display-1 fw-bold color me-2 float-start" style="line-height: .75; margin-bottom: -8px;">W</h2>
                            <p class="mb-0">
                            illkommen in den Meer & Wald Wellness Appartements. Die luxuriösen Ferienwohnungen sind Teil eines Wohnungsensembles, bestehend aus zwei Häusern, die unmittelbar am Naturpark und Erlebniswald Heringsdorf gelegen sind. Beide hochwertig eingerichteten Apartments befinden sich im hinteren, dem Wald zugewandten Haus. 
                            </p>
                        </div>
                        <div class="col-md-6 d-block d-md-none py-3">
                            <img class="w-100" src="<?= URL ?>_include/img/ic1.jpg" alt="">
                        </div>
                        <div>
                            <p>
                            Der besondere Reiz unserer Apartments ergibt sich zum einen aus der idyllischen und ruhigen Lage am Wald, der privaten Sauna zu jeder Wohnung, aber auch der Nähe zum Heringsdorfer Ortskern und Strand (Luftlinie 800 Meter). So erreichen Sie nach einem 10-minütigen Spaziergang durch einen naturbelassenen Wald bereits die Heringsdorfer Seebrücke. Zu den Wohnungen gehört jeweils ein befestigter Stellplatz in unmittelbarer Nähre zum Haus.
                            </p>
                        </div>
                        <div class="row mb-3 hole">
                            <div class="col-md-6 d-none d-md-block">
                                <img class="w-100" src="<?= URL ?>_include/img/ic1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="w-100" src="<?= URL ?>_include/img/dis1.jpg" alt="">
                            </div>


                        </div>
                    </div>
                    <div>
                        <p>
                        Bei uns steht Entspannung im absoluten Mittelpunkt. So sind die Wohnungen gemütlich und individuell eingerichtet und sehr ruhig gelegen. Genießen Sie den Wald mit seinen Gerüchen und Geräuschen, machen Sie fabelhafte Wanderungen am Strand und über die Felder und runden Sie den Tag mit einem Saunabesuch in Ihrer, nur für Sie zur Verfügung stehenden Sauna ab. Wenn die Sonne untergeht und es dunkel wird, erscheint der parkähnliche Garten in stimmungsvoller Beleuchtung. Hier stehen für Sie eine überdachte Sitzecke mit Grillmöglichkeit, sowie eine Feuerschale zur Verfügung.*
                        </p>
                        <p>
                        *Grill und Feuerschale können aus Sicherheitsgründen nur bei entsprechender Wetterlage genutzt werden. So kann es auch im Sommer durch lange Trockenzeiten dazu kommen, dass diese nicht genutzt werden dürfen.
                        </p>
                        <div class="text-center">
                        <a class="btn px-4 d-inline-block check-avail rounded-0 text-dark text-uppercase w-100" style="width:300px; max-width:100%;" href="#home-hero">
                            <span>Startseite</span>
                        </a>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Apartment mit balcony -->
    <section class="home-slide">
        <div class="home-slide-wrap">
            <div class="d-flex w-100 flex-wrap justify-content-lg-end align-items-center">
                <div class="feature h-100 text-lg-end px-4 px-md-0 ms-md-5 py-5 py-lg-0 ms-lg-auto pe-xxl-5 me-lg-5">
                    <p class="color mb-0">ab 95€</p>
                    <h2 class="fw-bold">Appartement Waldgeflüster</h2>
                    <ul class="list-unstyled lh-lg mb-4 d-none d-md-block">
                        <li class="fw-bold mb-3">95 qm | vier Personen</li>
                        <li>Sauna</li>
                        <li>großes Bad</li>
                        <li>Badewanne</li>
                        <li>Dusche</li>
                        <li>vier Personen</li>
                        <li>Waschmaschine große Kuche</li>
                        <li>Spülmaschine</li>
                        <li>Kühlschrank</li>
                        <li>Backofen</li>
                        <li>Mikrowelle</li>
                        <li>Kaffeemaschine</li>
                        <li>Flachbild-TV</li>
                        <li>zwei Balkone</li>
                    </ul>
                    <p class="fw-bold mb-3 d-md-none">95 qm | vier Personen</p>
                    <ul class="list-unstyled lh-lg mb-4 row row-cols-2 d-md-none">
                        <li>Sauna</li>
                        <li>großes Bad</li>
                        <li>Badewanne</li>
                        <li>Dusche</li>
                        <li>vier Personen</li>
                        <li>Waschmaschine große Kuche</li>
                        <li>Spülmaschine</li>
                        <li>Kühlschrank</li>
                        <li>Backofen</li>
                        <li>Mikrowelle</li>
                        <li>Kaffeemaschine</li>
                        <li>Flachbild-TV</li>
                        <li>zwei Balkone</li>
                    </ul>

                    <a class="btn px-4 d-inline-block check-avail rounded-0 text-dark text-uppercase w-100" href="/room/balcony">
                        <span>Jetzt buchen</span>
                    </a>
                </div>

                <div class="swiper mx-0 home-balcony">
                    <!-- arrow -->
                    <div class="position-absolute start-0 bottom-0 d-inline-flex px-2 pt-1 bg-white" style="z-index: 9;">
                        <div class="p-2 pointer">
                            <i class="bi bi-chevron-left swiper-button-left"></i>
                        </div>
                        <div class="p-2 pointer">
                            <i class="bi bi-chevron-right swiper-button-right"></i>
                        </div>
                    </div>

                    <!-- -->
                    <div class="swiper-wrapper"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Appartement Waldblick-->
    <section class="home-slide">
        <div class="home-slide-wrap">
            <div class="d-flex w-100 flex-wrap justify-content-start align-items-center">

                <!-- swipper -->
                <div dir="rtl" class="swiper mx-0 home-terrace">
                    <!-- arrow -->
                    <div class="position-absolute end-0 d-inline-flex px-2 pt-1 bg-white bottom-0" style="z-index: 9;">
                        <div class="p-2 pointer">
                            <i class="bi bi-chevron-right swiper-button-left"></i>
                        </div>
                        <div class="p-2 pointer">
                            <i class="bi bi-chevron-left swiper-button-right"></i>
                        </div>
                    </div>

                    <!-- wrapper -->
                    <div class="swiper-wrapper"></div>
                </div>

                <div class="feature h-100 px-4 px-md-0 ms-md-5 py-5 py-lg-0 ps-xxl-5 ">
                    <p class="color mb-0">ab 75€</p>
                    <h2 class="fw-bold">Appartement Waldblick</h2>
                    <ul class="list-unstyled lh-lg mb-4 d-none d-md-block">
                        <li class="fw-bold mb-3">50 qm | zwei Personen</li>
                        <li>Private Sauna</li>
                        <li>Bad mit Waschmaschine</li>
                        <li>Dusche</li>
                        <li>ein Schlafzimmer</li>
                        <li>große Kuche</li>
                        <li>Spülmaschine</li>
                        <li>Kühlschrank</li>
                        <li>Backofen</li>
                        <li>Mikrowelle</li>
                        <li>Kaffeemaschine</li>
                        <li>Flachbild-TV</li>
                        <li>grosse Terasse</li>
                        <li>Waldblick</li>
                    </ul>

                    <p class="fw-bold mb-3 d-md-none">50 qm | zwei Personen</p>
                    <p></p>
                    <ul class="list-unstyled lh-lg mb-4 row row-cols-2 d-md-none">
                        <li>Bad mit Waschmaschine</li>
                        <li>Dusche</li>
                        <li>ein Schlafzimmer</li>
                        <li>große Kuche</li>
                        <li>Spülmaschine</li>
                        <li>Kühlschrank</li>
                        <li>Backofen</li>
                        <li>Mikrowelle</li>
                        <li>Kaffeemaschine</li>
                        <li>Flachbild-TV</li>
                        <li>Große Terasse</li>
                        <li>Waldblick</li>
                    </ul>

                    <a class="btn px-4 d-inline-block check-avail rounded-0 text-dark text-uppercase w-100" href="/room/terrace">
                        <span>Jetzt buchen</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- section -->
    <section class="pt-5 mt-xl-5">
        <div class="container">
            <div class="row mb-5 g-lg-5">
                <!-- left -->
                <div class="col-lg-12">
                    <div class="d-lg-flex align-items-start justify-content-between">
                        <div class="">
                            <p class="">
                                <strong class="d-block">Erholung Pur</strong>
                                Usedom ist die zweitgrößte Insel Deutschlands. Mit ihrer hügeligen und weitläufigen Landschaft und den schönen Stränden, Wiesen, Wäldern und Seen bietet die Insel zahlreiche Möglichkeiten zur Freizeitgestaltung. Der 42 Kilometer lange weiße Sandstrand, die 2.000 Sonnenstunden im Jahr und unsere Apartments laden Sie zu wunderschönen Ferien ein. <br>
                            </p>
                        </div>
                        <div class="px-lg-1">
                            <p>
                            Damit Sie alle Informationen haben, um das Beste aus Ihrer Zeit auf Usedom zu machen, finden Sie auf unsere Homepage neben den Wohnungen zusätzlich eine Reihe an Empfehlungen und Informationen, die wir als Ihre Gastgeber mit Ihnen teilen möchten. Wir kennen die Insel gut und so wollen wir nicht vorenthalten, wo es die beste Fischsuppe und die schönsten Wanderwege gibt. <br>
                                Wenn Sie über die auf der Website bereitgestellten Informationen Fragen zu unseren Appartements oder zur Insel haben, treten Sie gerne jederzeit mit uns in Kontakt. 
                            </p>
                        </div>
                    </div>

                </div>
                <!-- right -->
                <div class="col-lg-8 d-none">
                    <div>
                        <h2 class="display-1 fw-bold color me-2 float-start" style="line-height: .9; margin-bottom: -8px;">A</h2>
                        <p>
                            rabitur convallis mollis lectus ac suscipit. Nulla id nulla velit. Curabitur pellentesque nibh sed ex varius laoreet. Morbi sed varius arcu. Nulla at nulla feugiat, tempor risus vel, suscipit tortor. Proin rhoncus elementum velit, sit amet efficitur diam consequa.
                        </p>
                        <p>
                            Mauris tellus dui, dapibus quis tempor id, interdum eget eros. Curabitur eget posuere mauris, at dapibus ante. Nam efficitur tincidunt diam quis dignissim. Ut et leo nulla. In tempor posuere vel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end -->
    <section class="home-swiper-end position-relative">
        <div class="container">
            <!-- wrapper -->
            <div class="row g-3 g-xl-4 g-xxl-5">
                <div class="col-6 mb-lg-5">
                    <div class="d-flex mb-5 mb-md-0 home-rel flex-column">
                        <a href="/aktivitaten/freizeitaktivitaeten-usedom">
                            <img class="w-100 mb-4" src="<?= URL ?>_include/img/mk3.jpg" alt="">

                            <h2 class="mb-3">Freizeitaktivitäten</h2>
                            <p>
                                Zinnowitz, Ahlbeck, Heringsdorf, Benzin und Wolgast. Peene Münde ist die älteste Stadt und Karlshagen ist ein beliebtes Ziel für ausgedehnte ...
                            </p>
                        </a>

                        <a style="letter-spacing: 2px;" href="/aktivitaten/freizeitaktivitaeten-usedom" class="text-uppercase fs-08 fw-bold raleway">Erfahren Sie mehr +</a>
                    </div>
                </div>

                <div class="col-6 mb-lg-5">
                    <div class="d-flex mb-5 mb-md-0 home-rel flex-column">
                        <a href="/aktivitaten/heringsdorf">
                            <img class="w-100 mb-4 o-fit" src="<?= URL ?>_include/img/mk4.jpg" alt="">
                            <h2 class="mb-3">Heringsdorfs</h2>
                            <p>
                                Das Ostseebad Heringsdorf ist eines von vier Ostseebädern auf der Insel Usedom, die über eine zwölf Kilometer lange Strandpromenade ...
                            </p>
                        </a>
                        <a style="letter-spacing: 2px;" href="/aktivitaten/heringsdorf" class="text-uppercase fs-08 fw-bold raleway">Erfahren Sie mehr +</a>
                    </div>
                </div>

                <div class="col-6 mb-5">
                    <div class="d-flex home-rel flex-column">
                        <a href="/aktivitaten/gastronomie-usedom">
                            <img class="w-100 mb-4" src="<?= URL ?>_include/img/mk2.jpg" alt="">
                            <h2 class="mb-3">Gastronomie Usedom</h2>
                            <p>
                                Deutschlands sonnenverwöhnte Insel Usedom ist ein wahres Schmuckstück. Mit rund 2.000 Sonnenstunden im Jahr liegt sie beachtliche 400 Stunden ...
                            </p>
                        </a>
                        <a style="letter-spacing: 2px;" href="/aktivitaten/gastronomie-usedom" class="text-uppercase fs-08 fw-bold raleway">Erfahren Sie mehr +</a>
                    </div>
                </div>

                <div class="col-6 mb-5">
                    <div class="d-flex home-rel flex-column">
                        <a href="/aktivitaten/usedom-die-sonneninsel-der-ostsee">
                            <img class="w-100 mb-4" src="<?= URL ?>_include/img/m1.jpg" alt="">
                            <h2 class="mb-3">Usedom: die Sonneninsel der Ostsee</h2>
                            <p>
                                Diee längste Seebrücke Deutschlands und die längste Strandpromenade Europas, zahlreiche bekannte Inselbäder und dazu noch die mit fast ...
                            </p>
                        </a>

                        <a style="letter-spacing: 2px;" href="/aktivitaten/usedom-die-sonneninsel-der-ostsee" class="text-uppercase fs-08 fw-bold raleway">Erfahren Sie mehr +</a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- commnet -->
    <section>
        <div class="commnet-swiper">
            <div class="swiper">
                <div class="swiper-wrapper"></div>
            </div>
        </div>
    </section>



    <section class="web-logos">
        <div class="container">
            <h2 class="text-center mb-4">Plattformen, auf denen Sie uns finden können</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.booking.com/hotel/de/ferienwohnung-bansiner-landweg.de.html" data-src="booking" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/booking.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/bookingx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.traum-ferienwohnungen.de/190037/" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/traum-ferienwohnungen.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/traum-ferienwohnungenx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.ostsee-zimmervermittlung.de/ferienwohnung/insel-usedom/ferienwohnungen-bansiner-landweg-19984" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/ostsee-zimmervermittlung.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/ostsee-zimmervermittlungx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.ferienwohnland.de/ferienwohnung/56401/ferienwohnung-ferienwohnungen-bansiner-landweg-in-heringsdorf.html" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/ferienwohnland.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/ferienwohnlandx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.fewo-direkt.de/ferienwohnung-ferienhaus/p2614086" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/fewo-direkt.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/fewo-direktx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://planetofhotels.com/de/deutschland/heringsdorf/ferienwohnung-bansiner-landweg" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/planetofhotels.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/planetofhotelsx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://holidays.hrs.de/unterkunftsverzeichnis/ferienwohnungen-bansiner-landweg" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/holidays.hrs.de.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/holidays.hrs.dex.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.vrbo.com/5154754ha" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/vrbo.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/vrbox.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.tiscover.com/de/unterkuenfte/unterkunftsverzeichnis/ferienwohnungen-bansiner-landweg" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/tiscover.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/tiscoverx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.killikus-ferienwohnungen.de/zimmer/71835-306040-Ferienwohnung-10" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/killikus-ferienwohnungen.png" class="w-100" alt="">
                            <img src="<?= URL ?>_include/img/logo/killikus-ferienwohnungenx.png" class="w-100" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://de.ehotelsreviews.com/ho2483089/ferienwohnung-bansiner-landweg/de/" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/ehotelsreviews.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/ehotelsreviewsx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.ortsdienst.de/schleswig-holstein/ostholstein/heringsdorf/apartment/ferienwohnungen-bansiner-landweg-2483089/" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/ortsdienst.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/ortsdienstx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="http://www.hotelsheringsdorf.de/de/property/ferienwohnung-bansiner-landweg-heringsdorf.html" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/hotelsheringsdorf.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/hotelsheringsdorfx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.a-hotel.com/germany/56364-heringsdorf/2483089-1-ferienwohnungen-bansiner-landweg/" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/a-hotel.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/a-hotelx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.hotel-board.com/hotels/ferienwohnung-bansiner-landweg-hotel-heringsdorf-germany-1277218.htm" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/hotel-board.png" alt="" class="w-100">
                            <img src="<?= URL ?>_include/img/logo/hotel-boardx.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://germany-stay.com/de/o/ferienwohnungen-bansiner-landweg,1h7yp.html" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/germany-stay.png" alt="">
                            <img src="<?= URL ?>_include/img/logo/germany-stayx.png" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.getaroom.co.nz/seebad-heringsdorf/ferienwohnungen-bansiner-landweg.htm" target="_blank">
                            <img src="<?= URL ?>_include/img/logo/getaroom.png" class="w-100" alt="">
                            <img src="<?= URL ?>_include/img/logo/getaroomx.png" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- location -->
    <section class="room-related mt-5 g-0 overflow-hidden mb-0 pb-0">
        <div class="container-fluid">
            <h3 class="text-center pb-4">Ort</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d595717.2567938477!2d12.522718334591096!3d54.32126834571205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aaf740fd61b09b%3A0xd91bf3b5e6e0d8c9!2sFerienwohnung%20Heringsdorf!5e0!3m2!1sde!2sde!4v1645447882856!5m2!1sde!2sde" style="border:0; width: 100%; height: 500px;" allowfullscreen="" loading="lazy" translate="no"></iframe>
        </div>
    </section>

    <!-- section -->
    <section class="newsletter"></section>

    <!-- Footer -->
    <footer></footer>


    <!-- Contact -->
    <div class="form-button position-fixed top-50 translate-middle-y end-0 d-none" style="z-index: 1;">
        <div class="h-100 w-100 d-flex align-items-center justify-content-center fw-bold ps-2">
            <i class="bi bi-envelope m-2 fs-5"></i>
            <span>Jetzt buchen</span>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="fixed-form position-fixed top-50 translate-middle-y end-0 py-4 d-none" style="background: #fff; color: rgb(27, 27, 27);">
        <div class="h-100 d-flex flex-column px-4 px-lg-5 position-relative">
            <span class="position-absolute pe-3 pt-3 fs-5 pointer end-0 top-0 close-contact"><i class="bi bi-x-diamond-fill" style="color: #b56953;"></i></span>

            <h3 class="fw-bold pt-3 mb-4" style="color: rgb(58, 58, 58);"></h3>
            <form class="d-block bg-white" action="<?= URL ?>reservation/step1" method="POST">
                <div class="resta">
                    <label class="d-block text-uppercase text-dark mb-1">Art der Unterbringung </label>
                    <select class="form-select w-100 rounded-0 border fw-light py-2 px-3" name="room2">
                        <option value="194556" selected>Appartement Waldgeflüster</option>
                        <option value="306040">Appartement Waldblick</option>
                    </select>
                </div>
                <!--
                <div class="resta">
                    <label class="d-block text-uppercase text-dark mb-1">Anreisedatum</label>
                    <div class="border px-3 py-2">
                        <input type="date" class="w-100 d-block border-0" name="startDate2" style="outline: none !important;">
                    </div>
                </div>

                <div class="resta">
                    <label class="d-block text-uppercase text-dark mb-1">Abreisedatum</label>
                    <div class="border px-3 py-2">
                        <input type="date" class="w-100 d-block border-0" name="endDate2" style="outline: none !important;">
                    </div>
                </div>-->
                <div class="resta mb-4">
                    <button type="submit" class="btn check-avail2 rounded-0 text-dark text-uppercase w-100">
                        <span>Suchen</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>
    <script src="<?= URL ?>_include/js/index.js"></script>
    <script>
        // home-slide swiper
        new Swiper(".home-slide .swiper", {
            slidesPerView: 1,
            speed: 1000,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: ".swiper-button-left",
                prevEl: ".swiper-button-right",
            },
        });

        // swiper end
        new Swiper(".home-swiper-end .swiper", {
            slidesPerView: 3,
            speed: 1000,
            loop: true,
            spaceBetween: 40,
            navigation: {
                nextEl: ".home-swiper-end .bi-chevron-left",
                prevEl: ".home-swiper-end .bi-chevron-right",
            },
        });

        (window).setTimeout(() => {
            document.querySelector(".form-button").classList.remove("d-none");
        }, 500);


        $(".form-button").click(".fixed-form", (e) => {
            $(".fixed-form").removeClass("d-none");
            $(".fixed-form").toggle();
        });

        $(".close-contact").click(".fixed-form", (e) => {
            $(".fixed-form").toggle();
        })
    </script>


</body>

</html>