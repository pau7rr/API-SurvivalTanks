
//Tank Create Swipers
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
      init: function () {
        document.getElementById("towerInput").value = "../img/assets/tankConstructor/TowerEdits/Light1.png";
      },
      slideChange: function () {
        const index_currentSlide = towerSwiper.realIndex;
        const currentSlide = towerSwiper.slides[index_currentSlide];
        towerImg.src = currentSlide.src;
        document.getElementById("towerInput").value = currentSlide.src;
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
      init: function () {
        document.getElementById("bodyInput").value = "../img/assets/tankConstructor/Hulls/SmallHullA.png";
      },
      slideChange: function () {
        const index_currentSlide = hullSwiper.realIndex;
        const currentSlide = hullSwiper.slides[index_currentSlide];
        hullImg.src = currentSlide.src;
        document.getElementById("bodyInput").value = currentSlide.src;
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
      init: function () {
        document.getElementById("trackInput").value = "../img/assets/tankConstructor/Tracks/TrackAFrame1.png";
      },
      slideChange: function () {
        const index_currentSlide = tracksSwiper.realIndex;
        const currentSlide = tracksSwiper.slides[index_currentSlide];
        trackRightImg.src = currentSlide.src;
        trackLeftImg.src = currentSlide.src;
        document.getElementById("trackInput").value = currentSlide.src;
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
      init: function () {
        document.getElementById("bulletInput").value = "../img/assets/tankConstructor/bulletExports/01.png";
      },
    slideChange: function () {
        const index_currentSlide = bulletSwiper.realIndex;
        const currentSlide = bulletSwiper.slides[index_currentSlide];
        console.log(bulletImg.src);
        console.log(currentSlide.src);
        bulletImg.src = currentSlide.src;
        document.getElementById("bulletInput").value = currentSlide.src;
    },
},
});
