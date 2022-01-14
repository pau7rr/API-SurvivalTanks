
// Tank Part Swipers Initialitzation
var towerSwiper = new Swiper("#towerSwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      slideChange: function () {
        const index_currentSlide = towerSwiper.realIndex;
        const currentSlide = towerSwiper.slides[index_currentSlide]
        towerImg.src = currentSlide.src;
        const towerInput = document.getElementById('towerInput');
        towerInput.value = currentSlide.src;
      },
    },
  });
var hullSwiper = new Swiper("#hullSwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      slideChange: function () {
        const index_currentSlide = hullSwiper.realIndex;
        const currentSlide = hullSwiper.slides[index_currentSlide]
        hullImg.src = currentSlide.src;
        const hullInput = document.getElementById('bodyInput');
        hullInput.value = currentSlide.src;
      },
    },
  });
var tracksSwiper = new Swiper("#tracksSwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      slideChange: function () {
        const index_currentSlide = tracksSwiper.realIndex;
        const currentSlide = tracksSwiper.slides[index_currentSlide]
        trackRightImg.src = currentSlide.src;
        trackLeftImg.src = currentSlide.src;
        const trackInput = document.getElementById('trackInput');
        trackInput.value = currentSlide.src;
      },
    },
  });
var bulletSwiper = new Swiper("#bulletSwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      slideChange: function () {
        const index_currentSlide = bulletSwiper.realIndex;
        const currentSlide = bulletSwiper.slides[index_currentSlide]
        //bulletImg.src = currentSlide.src;
        const bulletInput = document.getElementById('bulletInput');
        bulletInput.value = currentSlide.src;
      },
    },
  });
   