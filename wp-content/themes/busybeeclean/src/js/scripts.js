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


});