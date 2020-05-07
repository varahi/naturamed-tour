$(function () {
    $(".datepicker").datepicker({
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        firstDay: 1,
    });
    $(":input").inputmask();
    $('.slider-content-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        autoplay: false,
        variableWidth: true,
        centerMode: true,
    });
    $('.slider-banner-list, .sanatorii-rossii-slider-banner-list').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        autoplay: false,
        variableWidth: true,
        centerMode: true,
    });
    $('.popular-destinations-slider-list').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: false,
        variableWidth: true,
        centerMode: true,
    });
    $('.customer-reviews-list').slick({
        responsive: [
            {
              breakpoint: 9999,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: true,
                  arrows: false,
                  autoplay: false,
                  variableWidth: false,
                  centerMode: false,
              }
            },
            {
              breakpoint: 760,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: true,
                  arrows: false,
                  autoplay: false,
                  variableWidth: false,
                  centerMode: false,
                  adaptiveHeight: true,
              }
            },
        ]
    });
    $('.news-list').slick({
        responsive: [
            {
              breakpoint: 9999,
              settings: "unslick",
            },
            {
              breakpoint: 1250,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: false,
                  arrows: true,
                  autoplay: false,
                  variableWidth: true,
                  centerMode: true,
              }
            },
        ]
    });
    $(".popular-destinations-tabs, .sanatorii-rossii-tabs").lightTabs();
});