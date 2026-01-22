document.addEventListener("DOMContentLoaded", () => {

  const languageTab = () => {
    const languagesItem = document.querySelectorAll(".languages__link");
    languagesItem.forEach((item) => {
      item.addEventListener("click", () => {
        if (!item.classList.contains("active")) {
          languagesItem.forEach((item) => {
            item.classList.remove("active");
          });
          item.classList.add("active");
        }
      });
    });
  };

  languageTab();

  const burger = () => {
    const burgerBtn = document.querySelector(".burger");
    const navMenu = document.querySelector(".catalog");
    burgerBtn.addEventListener("click", () => {
      navMenu.classList.toggle("active");
      burgerBtn.classList.toggle("active");
      if (burgerBtn.classList.contains("active")) {
      }
    });
  };

  burger();

  const burgerBobMenu = () => {
    const sershMobBTN = document.querySelector(".burger__mobile-btn");
    const meneWrapper = document.querySelector(".burger-mobile");
    const headerDesktop = document.querySelector(".header__desktop");
    const headerMobile = document.querySelector(".header__mobile");
    const burgerClouse = document.querySelector(".burger-mobile__close");
    const wrapperSershMob = document.querySelector(".header__box-detals");

    sershMobBTN.addEventListener("click", () => {
      meneWrapper.classList.add("active");
      if (meneWrapper.classList.contains("active")) {
        headerDesktop.classList.add("disabled");
        headerMobile.classList.add("disabled");
        document.body.classList.add("locked");
      }
    });

    burgerClouse.addEventListener("click", () => {
      meneWrapper.classList.remove("active");
      if (!meneWrapper.classList.contains("active")) {
        headerDesktop.classList.remove("disabled");
        headerMobile.classList.remove("disabled");
        document.body.classList.remove("locked");
      }
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth > 1000) {
        meneWrapper.classList.remove("active");
        headerDesktop.classList.remove("disabled");
        headerMobile.classList.remove("disabled");
        document.body.classList.remove("locked");
      }
    });
  };

  burgerBobMenu();

  const burgerMenuTable = () => {
    const sershMobBtn = document.querySelector(".burger-mobile__table");
    const arrowAnimation = document.querySelector(".burger-mobile__arrow");
    const menuItem = document.querySelector(".burger-mobile__catalog-items");
    const menuItemLink = document.querySelector(".burger-mobile__link");

    sershMobBtn.addEventListener("click", () => {
      if (!menuItem.classList.contains("active")) {
        arrowAnimation.classList.add("active");
        menuItemLink.classList.add("active");
        menuItem.classList.add("active");
      } else {
        arrowAnimation.classList.remove("active");
        menuItemLink.classList.add("active");
        menuItem.classList.remove("active");
      }
    });
  };

  burgerMenuTable();

  const burgerMobMenu = () => {

    const itemMenu = document.querySelectorAll(".menu__item-one");

    itemMenu.forEach((item) => {
      item.addEventListener("click", (e) => {
        e.preventDefault();
        item.classList.toggle("active");

        itemMenu.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem.classList.remove("open");
            otherItem.classList.remove("active");
            const childLvl2 = otherItem.querySelector(".catalog__category-two");
            if (childLvl2) childLvl2.classList.remove("open");
          }
        });


        item.classList.toggle("open");

        const childLvl2 = item.querySelector(".catalog__category-two");
        if (childLvl2) {
          childLvl2.classList.toggle("open");
        }
      });
    });


    const lvl2Items = document.querySelectorAll(".catalog__category-two");

    lvl2Items.forEach((lvl2) => {
      lvl2.addEventListener("click", (e) => {
        lvl2.classList.toggle("active");
        e.stopPropagation();

        if (!e.target.closest(".catalog__category-three a")) {
          e.preventDefault();
          const lvl3 = lvl2.querySelector(".catalog__category-three");
          if (lvl3) {
            lvl3.classList.toggle("open");
          }
        }
      });
    });
  };

  burgerMobMenu();















  /* swiper */

  const heroSwiper = new Swiper('.hero__swiper', {
    loop: true,

    // If we need pagination
    pagination: {
      el: '.hero__swiper .swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.hero__swiper .swiper-button-next',
      prevEl: '.hero__swiper .swiper-button-prev',
    },

  });



  const partnersSwiper = new Swiper('.partners__swiper', {
    loop: true,
    slidesPerView: '6.7',
    spaceBetween: 60,
    watchSlidesProgress: true,
    watchSlidesVisibility: true,

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    pagination: {
      el: '.partners__swiper .swiper-pagination',
      clickable: true,
    },
    speed: 800,



    breakpoints: {
      0: {
        slidesPerView: 3.5,
        spaceBetween: 10,
      },

      500: {
        slidesPerView: 4.3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4.5,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 5.7,
        spaceBetween: 60,
      },
      1600: {
        slidesPerView: 6.7,
        spaceBetween: 60,
      }
    },
  });



  const testimonialsSwiper = new Swiper('.testimonials__slider', {
    loop: true,
    slidesPerView: '3',
    spaceBetween: 15,


    pagination: {
      el: '.testimonials__slider .swiper-pagination',
      type: 'bullets',
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.testimonials__slider .swiper-button-next',
      prevEl: '.testimonials__slider .swiper-button-prev',
    },




    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },

      375: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      675: {
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      930: {
        slidesPerView: 2,
        spaceBetween: 10,
      },

      1450: {
        slidesPerView: 3,
        spaceBetween: 15,
      }
    },

  });



  const advertisingSwiper = new Swiper('.advertising__slider', {
    loop: true,
    slidesPerView: 4.5,
    spaceBetween: 24,
    allowTouchMove: true,

    speed: 6000, 
    autoplay: {
      delay: 0, 
      disableOnInteraction: false,
      pauseOnMouseEnter: false,
    },

    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      375: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      675: {
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      930: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1450: {
        slidesPerView: 4.5,
        spaceBetween: 24,
      }
    },
  });



  const updateLastVisible = () => {
    const visibleSlides = document.querySelectorAll('.partners__swiper .swiper-slide-visible');


    const sliderVisible = document.querySelectorAll('.partners__swiper .last-visible');
    sliderVisible.forEach((item) => {
      item.classList.remove('last-visible')
    });


    if (visibleSlides.length) {
      visibleSlides[visibleSlides.length - 1].classList.add('last-visible');
    }
  }


  updateLastVisible();


  partnersSwiper.on('slideChange resize', updateLastVisible);







  const stars = document.querySelectorAll(".rating__star");
  for (const star of stars) {
    star.addEventListener("click", () => {
      for (const star of stars) {
        star.classList.remove("active");
      }
      star.classList.add("active");

      const { rate } = star.dataset;
      star.parentNode.dataset.rateTotal = star.dataset.rate;
    });
  }






});
