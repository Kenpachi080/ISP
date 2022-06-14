$(function () {
  //MAIN-APP
  $('.header__contacts-btn').on('click', function () {
    $('html, body').animate(
      {
        scrollTop: $('#questions').offset().top,
      },
      700
    );
  });

  //HOME-PAGE
  // let headerHeight = $('.header')[0].offsetHeight.toString();
  // $('.header__menu').css('top', `${headerHeight}px`);

  $('.intro__arrow').on('click', function () {
    $('html, body').animate(
      {
        scrollTop: $('.about').offset().top,
      },
      500
    );
  });

  $('.building__btn').on('click', function () {
    let show = this.dataset.show;
    $('.building__btn').removeClass('active');
    $('.building__info-content').removeClass('active');
    $(this).addClass('active');
    $(`${show}`).addClass('active');
  });

  $('.construction__btn').on('click', function () {
    let show = this.dataset.show;
    $('.construction__btn').removeClass('active');
    $('.construction__content').removeClass('active');
    $(this).addClass('active');
    $(`${show}`).addClass('active');
  });

  $('.burger').on('click', function () {
    $('.header__menu').toggleClass('active');
    $('.body').toggleClass('no-scroll');
  });

  const swiper1 = new Swiper('.companies__swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.companies__btn-next',
      prevEl: '.companies__btn-prev',
    },
    breakpoints: {
      1200: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      425: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });

  // const designSlider = new Swiper('.design-page-slider', {
  //   slidesPerView: 1,
  //   spaceBetween: 10,
  //   loop: true,
  //   navigation: {
  //     nextEl: '.design-page-slider__prev',
  //     prevEl: '.design-page-slider__next',
  //   },
  //   pagination: {
  //     el: '.design-page-slider__pagination',
  //     clickable: true,
  //   },
  // });


  const swiper2 = new Swiper('.construction__swiper', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.construction__slider-next',
      prevEl: '.construction__slider-prev',
    },
    pagination: {
      el: '.construction__slider-pagination',
      clickable: true,
    },
  });

  // ABOUT-PAGE
  $('.about-page__application__btn').on('click', function () {
    $('html, body').animate(
      {
        scrollTop: $('#questions').offset().top,
      },
      500
    );
  });
});
