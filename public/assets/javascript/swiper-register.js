const swiper = new Swiper(".swiper-projects", {
    // Optional parameters
    direction: "horizontal",
    centeredSlides: true,
    grabCursor: false,
    loop: true,
    slidesPerView: 1,
    spaceBetween: 5,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        980: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
    pagination: {
        el: '.swiper-pagination',
    }
});