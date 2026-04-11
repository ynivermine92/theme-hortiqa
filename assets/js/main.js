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

    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('fixed');
      } else {
        header.classList.remove('fixed');
      }
    });



  };

  burger();

  // Открытие/закрытие мобильного меню
  const burgerMobileMenu = () => {
    const burgerBtn = document.querySelector(".burger__mobile-btn");
    const menuWrapper = document.querySelector(".burger-mobile");
    const headerDesktop = document.querySelector(".header__desktop");
    const headerMobile = document.querySelector(".header__mobile");
    const closeBtn = document.querySelector(".burger-mobile__close");

    // Открытие меню
    burgerBtn.addEventListener("click", () => {
      menuWrapper.classList.add("active");
      headerDesktop.classList.add("disabled");
      headerMobile.classList.add("disabled");
      document.body.classList.add("locked");
    });

    // Закрытие меню
    closeBtn.addEventListener("click", () => {
      menuWrapper.classList.remove("active");
      headerDesktop.classList.remove("disabled");
      headerMobile.classList.remove("disabled");
      document.body.classList.remove("locked");
    });

    // Закрытие при ресайзе десктоп
    window.addEventListener("resize", () => {
      if (window.innerWidth > 1000) {
        menuWrapper.classList.remove("active");
        headerDesktop.classList.remove("disabled");
        headerMobile.classList.remove("disabled");
        document.body.classList.remove("locked");
      }
    });
  };

  burgerMobileMenu();



  const burgerMobileSubMenu = () => {
    const catalogItems = document.querySelectorAll(".burger-mobile__item");

    catalogItems.forEach((item) => {
      const toggleBtn = item.querySelector(".burger-mobile__table");
      const submenu = item.querySelector(".burger-mobile__catalog-items");
      const arrow = item.querySelector(".burger-mobile__arrow");
      const link = item.querySelector(".burger-mobile__link");

      if (!toggleBtn || !submenu) return;

      toggleBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const isOpen = submenu.classList.contains("active");


        catalogItems.forEach((other) => {
          const otherSub = other.querySelector(".burger-mobile__catalog-items");
          const otherArrow = other.querySelector(".burger-mobile__arrow");
          const otherLink = other.querySelector(".burger-mobile__link");
          if (otherSub && otherSub !== submenu) {
            otherSub.classList.remove("active");
            if (otherArrow) otherArrow.classList.remove("active");
            if (otherLink) otherLink.classList.remove("active");
          }
        });


        submenu.classList.toggle("active", !isOpen);
        if (arrow) arrow.classList.toggle("active", !isOpen);
        if (link) link.classList.toggle("active", !isOpen);
      });
    });
  };

  burgerMobileSubMenu();




  /* megaMenu desktop */
  const megaMenu = () => {
    const level1 = document.querySelectorAll('.megamenu__one > .megamenu__item');
    const level2 = document.querySelectorAll('.megamenu__two > .megamenu__item');
    const level3 = document.querySelectorAll('.megamenu__three > .megamenu__item');

    // helper для открытия UL
    const openWrapper = (selector, condition) => {
      document.querySelectorAll(selector).forEach(ul => {
        ul.classList.toggle('open', condition(ul));
      });
    };

    // ===== Уровень 1 =====
    let timeoutLevel1;
    level1.forEach(item => {
      item.addEventListener('mouseenter', () => {
        clearTimeout(timeoutLevel1);

        timeoutLevel1 = setTimeout(() => {
          // Снимаем active со всех
          level1.forEach(el => el.classList.remove('active'));
          level2.forEach(el => el.classList.remove('active'));
          level3.forEach(el => el.classList.remove('active'));

          // Активируем текущий
          item.classList.add('active');

          // Открываем второй уровень только для этой категории
          openWrapper('.megamenu__two', ul => ul.querySelector(`.megamenu__item[data-cat-id="${item.dataset.catId}"]`));

          // Закрываем третий уровень
          openWrapper('.megamenu__three', () => false);
        }, 250); // Задержка 250ms
      });

      item.addEventListener('mouseleave', () => clearTimeout(timeoutLevel1));
    });

    // ===== Уровень 2 =====
    let timeoutLevel2;
    level2.forEach(item => {
      item.addEventListener('mouseenter', () => {
        clearTimeout(timeoutLevel2);

        timeoutLevel2 = setTimeout(() => {
          level2.forEach(el => el.classList.remove('active'));
          level3.forEach(el => el.classList.remove('active'));

          item.classList.add('active');

          // Активируем родителя уровня 1
          level1.forEach(el => {
            if (el.dataset.catId === item.dataset.catId) el.classList.add('active');
          });

          // Открываем третий уровень только для этой подкатегории
          openWrapper('.megamenu__three', ul => ul.querySelector(`.megamenu__item[data-subcat-id="${item.dataset.subcatId}"]`));
        }, 250); // Задержка 250ms
      });

      item.addEventListener('mouseleave', () => clearTimeout(timeoutLevel2));
    });

    // ===== Уровень 3 =====
    let timeoutLevel3;
    level3.forEach(item => {
      item.addEventListener('mouseenter', () => {
        clearTimeout(timeoutLevel3);

        timeoutLevel3 = setTimeout(() => {
          level3.forEach(el => el.classList.remove('active'));
          item.classList.add('active');

          // Активируем родителя уровня 2
          level2.forEach(el => {
            if (el.dataset.catId === item.dataset.catId && el.dataset.subcatId === item.dataset.subcatId) {
              el.classList.add('active');
            }
          });

          // Активируем родителя уровня 1
          level1.forEach(el => {
            if (el.dataset.catId === item.dataset.catId) el.classList.add('active');
          });
        }, 250); // Задержка 250ms
      });

      item.addEventListener('mouseleave', () => clearTimeout(timeoutLevel3));
    });


  }
  megaMenu()


  /*  acardion  mobMenu */

  const menuMob = () => {
    const links = document.querySelectorAll('.mobilemenu__link');

    links.forEach((link) => {
      link.addEventListener('click', (e) => {
        const parentLi = link.closest('.mobilemenu__item');
        const submenu = parentLi.querySelector('.mobilemenu__two');


        if (parentLi.classList.contains('mobilemenu__item-one') && submenu) {
          e.preventDefault();

          if (link.classList.contains('active')) {

            link.classList.remove('active');
            submenu.classList.remove('open');
          } else {

            links.forEach((l) => l.classList.remove('active'));
            document.querySelectorAll('.mobilemenu__two').forEach((ul) => ul.classList.remove('open'));


            link.classList.add('active');
            submenu.classList.add('open');
          }
        }

      });
    });
  };

  menuMob();

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
    loop: false,
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


  const subProduct = new Swiper('.sub-product__slider', {
    loop: false,
    slidesPerView: '7',
    spaceBetween: 20,


    pagination: {
      el: '.sub-product__slider .swiper-pagination',
      type: 'bullets',
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.sub-product__slider .swiper-button-next',
      prevEl: '.sub-product__slider .swiper-button-prev',
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
    slidesPerView: 5.5,
    spaceBetween: 24,

    allowTouchMove: false,
    simulateTouch: false,

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
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      675: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      800: {
        slidesPerView: 2.5,
        spaceBetween: 10,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1200: {
        slidesPerView: 3.5,
        spaceBetween: 10,
      },
      1450: {
        slidesPerView: 4.5,
        spaceBetween: 24,
      },
      1700: {
        slidesPerView: 5.5,
        spaceBetween: 24,
      },

      2000: {
        slidesPerView: 6.5,
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




  new Swiper('.swiper-portfolio', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      500: {
        slidesPerView: 2,
      },
      770: {
        slidesPerView: 2.8,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20,
      },

      1200: {
        slidesPerView: 4,
        spaceBetween: 20,
      }

    },

  });





  const catalogsSwiper = new Swiper('.catalogs__slider', {
    loop: false,
    slidesPerView: '7',
    spaceBetween: 15,


    pagination: {
      el: '.catalogs__slider .swiper-pagination',
      type: 'bullets',
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.catalogs__slider .swiper-button-next',
      prevEl: '.catalogs__slider .swiper-button-prev',
    },




    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },

      375: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      675: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      930: {
        slidesPerView: 5,
        spaceBetween: 10,
      },

      1450: {
        slidesPerView: 7,
        spaceBetween: 15,
      }
    },

  });










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




  const accordion = () => {
    const accordinBox = document.querySelectorAll('.acardion__item-box');

    accordinBox.forEach((item, index) => {
      const mobileContent = item.querySelector('.acardion__mobile');
      const desktopContentList = document.querySelectorAll('.acardion__item-content');

      // Изначально скрываем мобильный контент, кроме активного
      if (!item.classList.contains('active')) {
        if (mobileContent) mobileContent.style.maxHeight = '0px';
      } else {
        if (mobileContent) mobileContent.style.maxHeight = mobileContent.scrollHeight + 'px';
      }

      item.addEventListener('click', () => {
        // Закрываем все мобильные блоки
        accordinBox.forEach((box, i) => {
          box.classList.remove('active');
          const mobile = box.querySelector('.acardion__mobile');
          if (mobile) mobile.style.maxHeight = '0px';

          // Закрываем все десктопные блоки
          if (desktopContentList[i]) desktopContentList[i].classList.remove('active');
        });

        // Открываем выбранный
        item.classList.add('active');
        if (mobileContent) mobileContent.style.maxHeight = mobileContent.scrollHeight + 'px';

        // Десктоп: добавляем active к соответствующему элементу
        if (desktopContentList[index]) desktopContentList[index].classList.add('active');
      });
    });
  };

  accordion();






  // Init phone mask
  const maskElement = document.querySelector('.phone__input')
  if (maskElement) {
    const maskOptions = {
      mask: '+{38}(000)000-00-00',
    }
    const mask = IMask(maskElement, maskOptions)

  }



  const blogsFilterAjax = () => {
    const blogsWrapper = document.querySelector('.blogs__category');
    const wrapperPagination = document.querySelector('.pagination');
    let currentCategory = ''; // сохраняем выбранную категорию



    // AJAX запрос
    async function BlogsAjax(categoryId, pageId = '') {
      try {
        const formData = new FormData();
        formData.append('action', 'filter_blogs');
        formData.append('categoryId', categoryId);
        formData.append('pageId', pageId);

        const response = await fetch('/wp-admin/admin-ajax.php', {
          method: 'POST',
          body: formData
        });

        const result = await response.json();

        if (result.success) {
          blogsWrapper.innerHTML = result.data.posts;  /* отресовыем посты из буфера */
          wrapperPagination.innerHTML = result.data.pagination; /* отресовыем пагинацию */
          paginationBlogs(); // навешиваем обработчики на новую пагинацию
        } else {
          console.error('Ошибка сервера:', result);
        }
      } catch (err) {
        console.error('Ошибка fetch:', err);
      }
    }

    // Категории
    const CategorysBlogs = () => {
      const buttons = document.querySelectorAll('.blogs__btn');
      buttons.forEach(button => {
        button.addEventListener('click', () => {
          buttons.forEach(btn => btn.classList.remove('active'));
          button.classList.add('active');
          currentCategory = button.dataset.categoryId;

          BlogsAjax(currentCategory, 1); // при смене категории всегда первая страница
        });
      });

      // Устанавливаем начальную категорию
      const activeBtn = document.querySelector('.blogs__btn.active');
      if (activeBtn) currentCategory = activeBtn.dataset.categoryId;
    };
    // навешиваем категории
    CategorysBlogs();



    // Пагинация
    const paginationBlogs = () => {
      const paginationBtns = document.querySelectorAll('.pagination__item:not(.disabled)');
      paginationBtns.forEach(item => {
        item.addEventListener('click', e => {
          e.preventDefault();
          const pageId = item.dataset.paginationId;
          if (currentCategory) {
            BlogsAjax(currentCategory, pageId);
          }
        });
      });
    };

    paginationBlogs()
  };

  blogsFilterAjax();




  /* acaunt */

  const body = document.body;

  // --- Страница аккаунта (но не страница восстановления пароля) ---
  if (body.classList.contains('woocommerce-account') && !body.classList.contains('woocommerce-lost-password')) {

    const registration = document.querySelector('.registration');
    const linkRegistr = document.querySelector('.link');
    const linkLogin = document.querySelector('.loglink');

    const loginWrapper = document.querySelector('.authorization');
    const recoveryWrapper = document.querySelector('.recovery');

    // Переключение форм
    if (linkRegistr && linkLogin && loginWrapper && recoveryWrapper) {

      linkRegistr.addEventListener('click', function (e) {
        e.preventDefault();
        loginWrapper.classList.remove('active');
        recoveryWrapper.classList.add('active');
      });

      linkLogin.addEventListener('click', function (e) {
        e.preventDefault();
        recoveryWrapper.classList.remove('active');
        loginWrapper.classList.add('active');
      });
    }

    // Проверка чекбокса при регистрации
    const form = document.querySelector('.woocommerce-form-register');
    if (form) {
      const checkbox = form.querySelector('input[name="receive"]');
      const errorMsg = form.querySelector('.error-message');

      form.addEventListener('submit', function (e) {
        if (checkbox && !checkbox.checked) {
          e.preventDefault();
          if (errorMsg) errorMsg.style.display = 'block';
        } else {
          if (errorMsg) errorMsg.style.display = 'none';
        }
      });
    }
  }

  // --- Страница восстановления пароля ---
  if (body.classList.contains('woocommerce-lost-password')) {
    const recoveryWrapper = document.querySelector('.recovery');
    if (recoveryWrapper) recoveryWrapper.classList.add('active');
  }







  let selectcategory = document.querySelector('.categories .woocommerce-ordering');
  selectcategory.addEventListener('click', (e) => {
    if (e.target) {
      selectcategory.classList.toggle('active');
    }
  })

  let selectFilter = document.querySelector('.fillter__content');
  selectFilter.addEventListener('click', (e) => {
    if (e.target) {
      selectFilter.classList.toggle('active');
    }
  })




});







