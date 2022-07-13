<?php
$data['id'] = 1;
$returnRoom = request('rooms/view', 'POST', $data);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferienwohnungheringsdorf Appartement Waldblick</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lightgallery.min.css" integrity="sha512-J3GvWzuXtDGv7Kmqhj1gbn/jM2i3G40XtSBcqGEQ7eLpP0izHygFgT0FMIVCWMVRZnz7u2rS6mhTtlQ3oJsr1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- custom -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= URL ?>_include/css/index.css">
</head>

<body class="room-terrace">

    <!-- hero -->
    <section class="room-hero">
        <div class="room-hero-wrap">
            <!-- Slider main container -->
            <div class="swiper room-hero-swiper">
                <div class="swiper-wrapper" id="lightgallery">
                </div>
            </div>
        </div>
    </section>


    <!-- article -->
    <article class="room-article">
        <div class="container">
            <div class="row">
                <!-- left -->
                <div class="col-lg-12">
                    <div class="content">
                        <h2 class="mb-4 fs-1 d-none d-lg-block">Appartement Waldblick</h2>
                        <div class="iw-bookingwidget"></div>
                        <script id="iw-bookingwidgetScript" type="text/javascript" src=https://www.buchen.travel/shared/_expo/js-scripts/jquery.responsiveIframeComplete.js data-room="306040" data-onlythisroom="1" data-interfaceid="112110" data-cal="all" data-url=https://bookingwidget.im-web.de></script>

                        <!-- feature -->
                        <div class="mb-3 room-features">
                            <a class="btn mb-2 btn-outline-dark">Ganze Ferienwohnung</a>
                            <a class="btn mb-2 btn-outline-dark">50m²</a>
                            <a class="btn mb-2 btn-outline-dark">Sauna</a>
                            <a class="btn mb-2 btn-outline-dark">Eigene Küche</a>
                            <a class="btn mb-2 btn-outline-dark">Eigenes Badezimmer</a>
                            <a class="btn mb-2 btn-outline-dark">Spülmaschine</a>
                            <a class="btn mb-2 btn-outline-dark">Flachbild-TV</a>
                            <a class="btn mb-2 btn-outline-dark">Kostenfreie Parkplätze</a>
                        </div>

                        <!-- Room Desc -->
                        <div class="mb-5 d-none d-md-block">
                            <p>
                            Sie betreten die komfortable Ferienwohnung durch einen kleinen <strong>Flur mit Garderobe</strong>  und finden rechter Hand die moderne separate Küche sowie das großzügige Badezimmer und gerade zu das komfortabel eingerichtete Wohnzimmer, an das sich das stilvolle Schlafzimmer anschließt.
                            </p>
                            <p>
                                Die <strong>Küche</strong> ist voll ausgestattet und verfügt über eine Einbauküche (Kühlschrank mit TKF, Geschirrspülmaschine, Herd m. Cerankochfeld und Umlufthaube) sowie einen stilvoller Esstischbereich. Selbstverständlich finden Sie alles Geschirr, Gläser, Küchenutensilien usw., die auch einen längeren Aufenthalt komfortabel gestalten lassen zu Ihrer Verfügung.
                            </p>
                            <p>
                                Das im Jahre 2020 komplett neu gestaltete <strong>Badezimmer</strong> ist geschmackvoll gefliest und verfügt über einen Doppelwaschtisch und eine ebenerdige Dusche. Neben der eingebauten Waschmaschine sorgen moderne Badezimmermöbel und ein beheizter Handtuchhalter für zusätzlichen Komfort im Bad.
                            </p>
                            <p>
                            Der offene, aber dennoch optisch vom Wohnbereich abgetrennte <strong>Schlafbereich</strong> verfügt über ein Doppelbett und einen großzügigen Einbauschrank sowie eine Sitzgelegenheit mit zwei Sesseln. Dank einer drehbaren Halterung haben Sie sowohl vom Bett im Schlafbereich als auch von der Couch im Wohnbereich die Möglichkeit entspannt fernzusehen.
                            </p>
                            <p>
                            Zusätzlich bietet die Ferienwohnung mit einer großen, nicht einsehbaren Terrasse, die vom Schlafzimmer aus begehbar ist, die Möglichkeit zur Entspannung im Freien. Hier befindet sich auch Ihre <strong>persönliche Sauna,</strong> aus der Sie direkt beim saunieren in den Wald blicken können.
                            </p>
                        </div>

                        <!-- line -->
                        <div class="line mb-5"></div>

                        <!-- Größe des Apartments -->
                        <div class="mb-5">
                            <p class="mb-1"><b>Größe des Apartments: </b>50 m² </p>
                            <p>Dieses Apartment verfügt über einen Geschirrspüler, eine Küche und Kabel-TV.</p>
                        </div>

                        <!-- In Ihrer eigenen Küche -->
                        <div class="mb-5">
                            <h3 class="mb-4">In Ihrer eigenen Küche:</h3>
                            <div class="d-flex">
                                <div class="col-6">
                                    <div><i class="bi bi-check2"></i><span>Kühlschrank</span></div>
                                    <div><i class="bi bi-check2"></i><span>Backofen</span></div>
                                </div>
                                <div class="col-6">
                                    <div><i class="bi bi-check2"></i><span>Spülmaschine</span></div>
                                    <div><i class="bi bi-check2"></i><span>Waschmaschine</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- In Ihrem eigenen Badezimmer -->
                        <div class="mb-5">
                            <h3 class="mb-4">In Ihrem eigenen Badezimmer:</h3>
                            <div class="d-flex">
                                <div class="col-6">
                                    <div><i class="bi bi-check2"></i><span>Dusche</span></div>
                                    <div><i class="bi bi-check2"></i><span>Wc</span></div>
                                </div>
                                <div class="col-6">
                                    <div><i class="bi bi-check2"></i><span>Handtücher</span></div>
                                    <div><i class="bi bi-check2"></i><span>Haartrockner</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Ausstattung des Apartments -->
                        <div class="mb-5">
                            <h3 class="mb-4">Ausstattung des Apartments:</h3>
                            <div class="d-flex">
                                <div class="col-6">
                                    <div><i class="bi bi-check2"></i><span>Gesamte Wohneinheit im Erdgeschoss</span></div>
                                    <div><i class="bi bi-check2"></i><span>Allergikerfreundlich</span></div>
                                    <div><i class="bi bi-check2"></i><span>Heizung</span></div>
                                    <div><i class="bi bi-check2"></i><span>WLAN</span></div>
                                    <div><i class="bi bi-check2"></i><span>Kühlschrank</span></div>
                                    <div><i class="bi bi-check2"></i><span>Spülmaschine</span></div>
                                </div>
                                <div class="col-6">
                                    <div><i class="bi bi-check2"></i><span>Backofen</span></div>
                                    <div><i class="bi bi-check2"></i><span>Küche</span></div>
                                    <div><i class="bi bi-check2"></i><span>Waschmaschine</span></div>
                                    <div><i class="bi bi-check2"></i><span>Radio</span></div>
                                    <div><i class="bi bi-check2"></i><span>Flachbild-TV</span></div>
                                    <div><i class="bi bi-check2"></i><span>Kabelkanäle</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Raucher -->
                        <div class="mb-5">
                            <p class="mb-1"><b> Raucher:</b> Rauchen ist nicht gestattet</p>
                        </div>

                        <!-- Parkplätze -->
                        <div class="mb-5">
                            <p class="mb-1"><b> Parkplätze: </b></p>
                            <p>Private Parkplätze stehen kostenfrei an der Unterkunft (Reservierung ist erforderlich) zur Verfügung.</p>
                        </div>

                        <!-- Room Desc -->
                        <div class="mb-5 d-block d-md-none">
                            <img src="<?= URL ?>_include/img/terrace/terrace1.jpg" alt="" class="img-fluid py-3">
                            <p>
                            Sie betreten die komfortable Ferienwohnung durch einen kleinen Flur mit Garderobe und finden rechter Hand die moderne separate Küche sowie das großzügige Badezimmer und gerade zu das komfortabel eingerichtete Wohnzimmer, an das sich das stilvolle Schlafzimmer anschließt.
                            </p>
                            <img src="<?= URL ?>_include/img/terrace/terrace2.jpg" alt="" class="img-fluid py-3">

                            <p>
                            Die Küche ist voll ausgestattet und verfügt über eine Einbauküche (Kühlschrank mit TKF, Geschirrspülmaschine, Herd m. Cerankochfeld und Umlufthaube) sowie einen stilvoller Esstischbereich. Selbstverständlich finden Sie alles Geschirr, Gläser, Küchenutensilien usw., die auch einen längeren Aufenthalt komfortabel gestalten lassen zu Ihrer Verfügung.
                            </p>
                            <img src="<?= URL ?>_include/img/terrace/terrace3.jpg" alt="" class="img-fluid py-3">

                            <p>
                            Das im Jahre 2020 komplett neu gestaltete Badezimmer ist geschmackvoll gefliest und verfügt über einen Doppelwaschtisch und eine ebenerdige Dusche. Neben der eingebauten Waschmaschine sorgen moderne Badezimmermöbel und ein beheizter Handtuchhalter für zusätzlichen Komfort im Bad.
                            </p>
                            <img src="<?= URL ?>_include/img/terrace/terrace4.jpg" alt="" class="img-fluid py-3">

                            <p>
                            Der offene, aber dennoch optisch vom Wohnbereich abgetrennte Schlafbereich verfügt über ein Doppelbett und einen großzügigen Einbauschrank sowie eine Sitzgelegenheit mit zwei Sesseln. Dank einer drehbaren Halterung haben Sie sowohl vom Bett im Schlafbereich als auch von der Couch im Wohnbereich die Möglichkeit entspannt fernzusehen.
                            </p>
                            <img src="<?= URL ?>_include/img/terrace/terrace5.jpg" alt="" class="img-fluid py-3">

                            <p>
                            Zusätzlich bietet die Ferienwohnung mit einer großen, nicht einsehbaren Terrasse, die vom Schlafzimmer aus begehbar ist, die Möglichkeit zur Entspannung im Freien.
                            </p>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </article>

    <!-- comment swiper -->
    <section class="commnet-swiper">
        <div class="swiper">
            <div class="swiper-wrapper"></div>
        </div>
    </section>

    <!-- logos -->
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
    <!-- Footer -->
    <footer></footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/lightgallery.min.js" integrity="sha512-76iVPLEHY5kfZFCmHBQHLkcE4I2r+gK/I/HLYcm3iCuRO/hopAtyO3AFPCZy5B4347wQ7NftStUBVk/cR21MSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>

    <script src="<?= URL ?>_include/js/index.js"></script>
    <script>
        swiper = new Swiper(".room-hero-swiper", {
            slidesPerView: "auto",
            autoplay: {
                delay: 3000,
            },
            loop: true,
        });

        lightGallery(document.getElementById('lightgallery'), {
            speed: 500,
        });
    </script>
</body>

</html>