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
        autoplay: true,
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
    $(".popular-destinations-tabs, .sanatorii-tabs").lightTabs();
    // start swiper //
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
      thumbs: {
      swiper: galleryThumbs
      }
    });
    // end swiper //
    $('.not-attribute-fancy-box').fancybox({
    });
    $('table').wrap('<div class="responsive"></div>');
    if(location.hash == '#new-year'){
        showPage(6);
        $('html, body').animate({scrollTop: $('.new-year').offset().top -250 }, 'slow');
    }
    if(location.hash == '#novogodnie-tury'){
        $('.sanatorii-button-popup a').attr("data-src","#zabronirovat");
        $(".programm-outdoor-south, .price-sanatorii-item-full, .sanatorii-action-text").hide();
        showPage(0);
        $('html, body').animate({scrollTop: $('.new-year').offset().top -250 }, 'slow');
    }
});