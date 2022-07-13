<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/lightgallery.min.js" integrity="sha512-76iVPLEHY5kfZFCmHBQHLkcE4I2r+gK/I/HLYcm3iCuRO/hopAtyO3AFPCZy5B4347wQ7NftStUBVk/cR21MSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
        new Swiper(".room-hero-swiper", {
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