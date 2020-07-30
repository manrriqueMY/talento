$(document).ready(function(){
    $('.slider-colaboradores').slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 6,
        slidesToScroll: 3,
        prevArrow: '<div class="slick-prev"><i class="fas fa-chevron-circle-left"></i></div>',
        nextArrow: '<div class="slick-next"><i class="fas fa-chevron-circle-right"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 0
                }
            }
        ]
    });
});