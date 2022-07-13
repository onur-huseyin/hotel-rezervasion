<!-- Footer -->
<footer></footer>


<!-- Contact -->
<div class="form-button position-fixed top-50 translate-middle-y" style="z-index: 1;">
    <div class="h-100 w-100 d-flex align-items-center justify-content-center fw-bold ps-2">
        <i class="bi bi-envelope m-2 fs-5"></i>
        <span>Kontakt</span>
    </div>
</div>

<!-- Contact Form -->
<div class="fixed-form position-fixed top-50 translate-middle-y start-0 py-4" style="background: #fff; color: rgb(27, 27, 27);">
    <div class="h-100 d-flex flex-column px-4 px-lg-5 position-relative">
        <span class="position-absolute pe-3 pt-3 fs-5 pointer end-0 top-0 close-contact"><i class="bi bi-x-diamond-fill" style="color: #b56953;"></i></span>

        <h3 class="fw-bold pt-3 mb-4" style="color: rgb(58, 58, 58);"></h3>
        <form class="d-block bg-white" action="<?= URL ?>reservation/step1" method="POST">
            <div class="resta">
                <label class="d-block text-uppercase text-dark mb-1">check-in</label>
                <select class="form-select w-100 rounded-0 border fw-light py-2 px-3" name="room2">
                    <option value="1" selected>Appartement Waldgeflüster</option>
                    <option value="2">Appartement Waldblick</option>
                </select>
            </div>
            <div class="resta">
                <label class="d-block text-uppercase text-dark mb-1">check-in</label>
                <div class="border px-3 py-2">
                    <input type="date" class="w-100 d-block border-0" name="startDate2" style="outline: none !important;">
                </div>
            </div>

            <div class="resta">
                <label class="d-block text-uppercase text-dark mb-1">check-out</label>
                <div class="border px-3 py-2">
                    <input type="date" class="w-100 d-block border-0" name="endDate2" style="outline: none !important;">
                </div>
            </div>
            <div class="resta mb-4">
                <button class="btn check-avail2 rounded-0 text-dark text-uppercase w-100">
                    <span>Check Availability</span>
                </button>
            </div>
        </form>
    </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    // Hero Carousek
    var myCarousel = document.querySelector('.carousel-hero')
    var carousel = new bootstrap.Carousel(myCarousel)

    q(".hero-prev").addEventListener("click", () => {
        carousel.prev()
    })
    q(".hero-next").addEventListener("click", () => {
        carousel.next()
    })

    $(".fixed-form").toggle();

    $(".form-button").click(".fixed-form", (e) => {
        $(".fixed-form").toggle();
    });

    $(".close-contact").click(".fixed-form", (e) => {
        $(".fixed-form").toggle();
    })
</script>