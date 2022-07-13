<!-- navbar -->
<nav class="navbar" style="z-index: 9999;">
    <div class="container-fluid py-4 py-xl-0 ps-xl-5">
        <h2 class="navbar-brand fs-5 text-dark  p-0 m-0" href="#">
            <!-- <a href="/">ferienwohnungheringsdorf</a> -->
            <?php if($homepage == true): ?>
                <a href="/"><img src="../_include/img/Logo.svg" alt="" width="200px"></a>
            <?php else: ?>
                <a href="/"><img src="../_include/img/Logo2.svg" alt="" width="200px"></a>
            <?php endif; ?> 
        </h2>

        <div class="ms-auto">
            <ul class="navbar-nav flex-row d-none d-xl-flex">
                <li>
                    <a href="/homepage">Startseite</a>
                </li>
                <li class="position-relative">
                    <a>Unsere Wohnungen</a>
                    <ul class="sub-menu list-unstyled bg-white shadow-sm p-0 position-absolute start-0 top-100">
                        <li>
                            <a href="/room/balcony">Appartement Waldgeflüster</a>
                        </li>
                        <li>
                            <a href="/room/terrace">Appartement Waldblick</a>
                        </li>
                        <!-- <li>
                            <a href="room-gallery.html">Room Gallery</a>
                        </li> -->
                    </ul>
                </li>
                <li class="position-relative">
                    <a>Aktivitäten</a>
                    <ul class="sub-menu list-unstyled bg-white shadow-sm p-0 position-absolute start-0 top-100">
                        <li>
                            <a href="/aktivitaten/heringsdorf">Heringsdorf</a>
                        </li>
                        <li>
                            <a href="/aktivitaten/gastronomie-usedom">Gastronomie</a>
                        </li>
                        <li>
                            <a href="/aktivitaten/usedom-die-sonneninsel-der-ostsee">Usedom</a>
                        </li>
                        <!-- <li>
                            <a href="/aktivitaten/historische-entwicklung-heringsdorfs">Historische</a>
                        </li> -->
                        <li>
                            <a href="/aktivitaten/freizeitaktivitaeten-usedom">Freizeitaktivitaeten</a>
                        </li>
                    </ul>
                </li>
                <li class="position-relative">
                    <a href="/contact/anreise">Anreise</a>
                    <!-- <ul class="sub-menu list-unstyled bg-white shadow-sm p-0 position-absolute start-0 top-100">
                        <li>
                            <a href="/contact/anreise">Anreise</a>
                        </li>
                    </ul> -->
                </li>
                <li class="position-relative">
                    <a href="/contact">Kontakt</a>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-column pointer mobile-open-menu-btn ms-auto d-xl-none">
            <span class="border-bottom mombs border-dark w-100"></span>
            <span class="border-bottom mombs border-dark w-100"></span>
            <span class="border-bottom mombs border-dark w-100"></span>
            <i class="bi bi-x-lg  mombs text-dark"></i>
        </div>
    </div>
</nav>

<!-- mobile menu -->
<div class="bg-white position-fixed top-0 start-0 bottom-0 mobile-menu">
    <ul class="pt-3">
        <li>
            <a class="active" href="/homepage">Startseite</a>
        </li>
        <li class="sub-parent">
            <a href="#">Unsere <br> Wohnungen</a>
            <ul class="mobile-sub-menu">
                <li><a href="/room/balcony">Appartement Waldgeflüster</a></li>
                <li><a href="/room/terrace">Appartement Waldblick</a></li>
                <!-- <li><a href="room-gallery.html">Room Galery</a></li> -->
            </ul>
        </li>
        <li class="sub-parent">
            <a href="#">Aktivitäten</a>
            <ul class="mobile-sub-menu">
                <li><a href="/aktivitaten/heringsdorf">Heringsdorf</a></li>
                <li><a href="/aktivitaten/gastronomie-usedom">Gastronomie</a></li>
                <li><a href="/aktivitaten/usedom-die-sonneninsel-der-ostsee">Usedom</a></li>
                <li><a href="/aktivitaten/historische-entwicklung-heringsdorfs">Historische</a></li>
                <li><a href="/aktivitaten/freizeitaktivitaeten-usedom">Freizeitaktivitaeten</a></li>
            </ul>
        </li>
        <li class="sub-parent">
            <!-- <a href="/about">Über uns</a> -->
            <a href="/contact/anreise">Anreise</a>
            <!-- <ul class="mobile-sub-menu">
                <li><a href="/contact/anreise">Anreise</a></li>
            </ul> -->
        </li>
        <li class="sub-parent">
            <a href="#">Kontakt</a>
            <ul class="mobile-sub-menu">
                <li><a href="/contact">Kontakt</a></li>
            </ul>
        </li>
    </ul>
</div>