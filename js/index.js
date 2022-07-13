//global functions
function cl(par){ console.log(par) };
function q(par){return document.querySelector(par)};
function qAll (par){ return document.querySelectorAll(par) }


// get navbar
fetch("nav.html")
.then(response => response.text())
.then(data => q("body").insertAdjacentHTML("afterbegin", data));

// get newsletter
const newsletter = `
<div class="newsletter-wrap text-center text-md-start">
    <div class="container">
        <form class="d-flex flex-column flex-lg-row px-4 w-100 justify-content-center justify-content-lg-between align-items-center align-items-lg-end">
        <i class="bi mb-0 lh-1 fs-1 mb-3 mb-lg-0 bi-envelope-open me-lg-4"></i>
        <h2 class="fs-1 mb-3 mb-lg-0">Join our weekly Newsletter</h2>
        <div class="border-bottom mb-3 me-lg-4 mb-lg-1">
            <input style="outline: none !important; width: 250px;" type="text" placeholder="Email address" class="border-0 text-center text-lg-start text-dark bg-transparent fw-light pe-lg-3 pb-1">
        </div>
        <button class="btn mb-1 check-avail px-5 d-inline-block check-avail rounded-0 text-dark text-uppercase">
            <span>Sing Me Up</span>
        </button>
        </form>
    </div>
</div>
`
if (q(".newsletter")) {
    for (let i = 0;  i < qAll(".newsletter").length; i++) {
        qAll(".newsletter")[i].innerHTML = newsletter;
    }
}

// get footer
fetch("footer.html")
.then(response => response.text())
.then(data => q("footer").innerHTML = data);


// mobile navbar
q("body").addEventListener("click", function (e) {   
    const navbar = q(".navbar");
    setTimeout(() => {
        if (e.target.classList.contains("mobile-open-menu-btn") || e.target.classList.contains("mombs")){ 
            q(".mobile-menu").classList.toggle("active")
            q(".mobile-open-menu-btn").classList.toggle("active")
        }
    
        if (e.target.parentElement.classList.contains("sub-parent")){
            const elem = e.target.parentElement
            elem.querySelector(".mobile-sub-menu").classList.toggle("active")
        }
    }, 200);
})

//open close hamburger
if (!window.matchMedia("(max-width: 1200px)").matches) {
    
    if(q(".hamburger")){
        q(".nav-open-btn").addEventListener("click", function(e){
            e.preventDefault()
            q(".hamburger").classList.toggle("active")
            q(".home-hero").classList.toggle("active")
        })
    }
    
}

// room-balcony swipper
if(q(".room-balcony .swiper-wrapper")){

    let a = [];

    for (let i = 1; i < 21; i++) {

        a[i] = `<div class="swiper-slide pointer big" src="img/balcony/balcony${i}.jpg">
                <img src="img/balcony/balcony${i}.jpg" alt="">
            </div>`
    }

    a.map(i =>{
        q(".room-balcony .swiper-wrapper").innerHTML += i
    })

}

// room-terrace swipper
if(q(".room-terrace .swiper-wrapper")){

    let a = [];

    for (let i = 1; i < 13; i++) {

        a[i] = `<div class="swiper-slide pointer big" src="img/terrace/terrace${i}.jpg">
                <img src="img/terrace/terrace${i}.jpg" alt="">
            </div>`
    }

    a.map(i =>{
        q(".room-terrace .swiper-wrapper").innerHTML += i
    })

}

// home-balcony swipper
if(q(".home-balcony")){
    for (let i = 1; i < 21; i++) {
        q(".home-balcony .swiper-wrapper").innerHTML += `
            <div class="swiper-slide h-100">
                <img src="img/balcony/balcony${i}.jpg" alt="">
            </div>
        `
    }
}

// home-terrace swipper
if(q(".home-terrace")){
    for (let i = 1; i < 13; i++) {
        q(".home-terrace .swiper-wrapper").innerHTML += `
            <div class="swiper-slide h-100">
                <img src="img/terrace/terrace${i}.jpg" alt="">
            </div>
        `
    }
}

//comment swipper
fetch("js/comment.json")
.then(response => response.json())
.then(data => {commnet(data)});

const commnet = data => {

    if (q(".commnet-swiper")) {
        for (let i = 0; i < Object.keys(data).length; i++) {
            q(".commnet-swiper .swiper-wrapper").innerHTML +=`
                <div class="swiper-slide text-center py-2 px-4">
                    <h2 class="mb-4 fs-1">"${data["title"][i]}"</h2>
                    <p class="mb-4">
                        ${data["desc"][i]}
                    </p>
                    <div class="color">${data["name"][i]}</div>
                </div>
            `
        }            
    }
}

const commnetSwiper= ()=> {
    new Swiper(".commnet-swiper .swiper", {
        slidesPerView: 1,
        speed: 1000,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        navigation: {
            nextEl: ".commnet-swiper .bi-chevron-left",
            prevEl: ".commnet-swiper .bi-chevron-right",
        },
    });
}

const commentLeftAr = document.createElement("i");
commentLeftAr.className = "bi bi-chevron-left";
const commentRightAr = document.createElement("i");
commentRightAr.className = "bi bi-chevron-right";

if(q(".commnet-swiper")){
    q(".commnet-swiper").insertAdjacentElement("afterbegin", commentLeftAr)
    q(".commnet-swiper").insertAdjacentElement("afterbegin", commentRightAr)
    setTimeout(() => {
        commnetSwiper()
    }, 100);
}

// web logos swipwe
const webLogosSwiper= ()=> {
    new Swiper(".web-logos .swiper", {
        slidesPerView: 6,
        speed: 1000,
        breakpoints: {
            // when window width is >= 320px
            1: {
              slidesPerView: 3,
            },
            // when window width is >= 480px
            992: {
              slidesPerView: 4,
            },
            // when window width is >= 640px
            1200: {
              slidesPerView: 6,
            }
        },
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
    });
}
if(q(".web-logos")){
    setTimeout(() => {
        webLogosSwiper()
    }, 100);
};



