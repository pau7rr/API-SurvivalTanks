
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
        document.getElementById("towerInput").value = "assets/tankConstructor/TowerEdits/Light1.png";
      },
      slideChange: function () {
        const index_currentSlide = this.realIndex;
        const currentSlide = this.slides[index_currentSlide];
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
        document.getElementById("bodyInput").value = "assets/tankConstructor/Hulls/SmallHullA.png";
      },
      slideChange: function () {
        const index_currentSlide = this.realIndex;
        const currentSlide = this.slides[index_currentSlide];
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
        document.getElementById("trackInput").value = "assets/tankConstructor/Tracks/TrackAFrame1.png";
      },
      slideChange: function () {
        const index_currentSlide = this.realIndex;
        const currentSlide = this.slides[index_currentSlide];
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
        document.getElementById("bulletInput").value = "assets/tankConstructor/Bullets/01.png";
      },
    slideChange: function () {
        const index_currentSlide = this.realIndex;
        const currentSlide = this.slides[index_currentSlide];
        document.getElementById("bulletInput").value = currentSlide.src;
    },
},
});
