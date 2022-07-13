<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferienwohnungheringsdorf Gallery</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500;600;700&display=swap"      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular?styles=16710" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- custom -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lightgallery.min.css" integrity="sha512-J3GvWzuXtDGv7Kmqhj1gbn/jM2i3G40XtSBcqGEQ7eLpP0izHygFgT0FMIVCWMVRZnz7u2rS6mhTtlQ3oJsr1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= URL ?>_include/css/index.css">
    <style>
        p {
            padding-top: 10px;
        }
    </style>
</head>
<body class="room-gallerys">

    <!-- hero -->
    <section class="sub-hero">
        <div class="sub-hero-wrap position-relative d-flex align-items-center justify-content-center">
            <div class="position-absolute overlay top-0 start-0 w-100 h-100"></div>
            <img class="position-absolute top-0 start-0 w-100 h-100 o-fit" src="<?= URL ?>_include/img/usedom-die-sonneninsel-der-ostsee.jpg" alt="">
            <h2 class="position-relative text-white display-2">Galerie</h2>
        </div>
    </section>

    <section class="room-gallery">
        <div class="container">
            <div class="row g-xl-5" id="lightgallery">
                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery1.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery1.jpg" alt="">
                    <p>
                        Unsere ruhige aber dennoch zentral gelegene Ferienwohnung
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery2.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery2.jpg" alt="">
                    <p>
                        Sehr Idyllisch gelegen
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery3.jpg" >
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery3.jpg" alt="">
                    <p>
                        Außenterasse zum Entspannen und essen mit Freunden und Familie
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery4.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery4.jpg" alt="">
                    <p>
                        Helle und große Raume
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery5.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery5.jpg" alt="">
                    <p>
                        In unserem geräumigen Wohnzimmer können Sie gemütlich auf der Couch entspannen
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery6.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery6.jpg" alt="">
                    <p>
                        Einfach nur wohlfühlen im großen Wohnbereich
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery7.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery7.jpg" alt="">
                    <p>
                        Viel Platz für all ihre Sachen
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery8.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery8.jpg" alt="">
                    <p>
                        Großer Essplatz für schöne Abende
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery9.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery9.jpg" alt="">
                    <p>
                        Voll ausgestattete Küche
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery10.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery10.jpg" alt="">
                    <p>
                        In der großen Küche können Sie genüsslich Kochen
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery11.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery11.jpg" alt="">
                    <p>
                        Gemütliche Betten zum erholen
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery12.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery12.jpg" alt="">
                    <p>                        
                        Zwei Schlafzimmer mit viel Platz und gemütlichem Bett und Ausblick
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery13.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery13.jpg" alt="">
                    <p>
                        Große Betten
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery14.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery14.jpg" alt="">
                    <p>
                        Reichlich Platz durch zwei Schlafzimmer mit Terassenzugang
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery15.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery15.jpg" alt="">
                    <p>
                        Zwei Schlafzimmer mit genügend Platz
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery16.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery16.jpg" alt="">
                    <p>
                        Vollausgestattetes Bad mit Dusche
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery17.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery17.jpg" alt="">
                    <p>
                        Mitten im grünen -aber sehr zentral
                    </p>
                </div>

                <div class="col-6 col-md-4 col-lg-3" src="<?= URL ?>_include/img/gallery/gallery18.jpg">
                    <img class="w-100" src="<?= URL ?>_include/img/gallery/gallery18.jpg" alt="">
                    <p>
                        Der Grundriss der Wohnung
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="newsletter"></div>

    <!-- Footer -->
    <footer></footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/lightgallery.min.js" integrity="sha512-76iVPLEHY5kfZFCmHBQHLkcE4I2r+gK/I/HLYcm3iCuRO/hopAtyO3AFPCZy5B4347wQ7NftStUBVk/cR21MSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>

    <script src="<?= URL ?>_include/js/index.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'), {
            speed: 500,
        });
    </script>
</body>
</html>