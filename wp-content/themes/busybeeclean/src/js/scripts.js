jQuery(document).ready(function($) {

    if ($('.cleaning-slider__items').length){
        var MainSlider = new Swiper('.cleaning-slider__items', {
            slidesPerView: 1,
            loop: true,
            observer: true,
            spaceBetween: 30,
            observeParents: true,
            lazy: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.cleaning-slider__next',
                prevEl: '.cleaning-slider__prev',
            }
        });
    }

    var MainSwiper = new Swiper(".prev-swiper", {
        loop: true,
        spaceBetween: 18,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,

    });
    var PrevSwiper = new Swiper(".main-swiper", {
        loop: true,
        // spaceBetween: 10,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        thumbs: {
            swiper: MainSwiper,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


});