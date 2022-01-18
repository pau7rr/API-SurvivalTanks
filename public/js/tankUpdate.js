
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
        const towers = document.getElementsByClassName("tower-selector-image");
        const towerImage = document.getElementById("towerInput").value;
        let index = 0;

        for (const el of towers) {
          if (el.src == towerImage) {
            this.slideTo(index, 1000, true);
            this.clickedIndex = index;
            break;
          }
          index += 1;
        }
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
        const bodies = document.getElementsByClassName("hull-selector-image");
        const bodyImage = document.getElementById("bodyInput").value;
        let index = 0;

        for (const el of bodies) {
          if (el.src == bodyImage) {
            this.slideTo(index, 1000, true);
            this.clickedIndex = index;
            break;
          }
          index += 1;
        }
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
        const tracks = document.getElementsByClassName("tracks-selector-image");
        const trackImage = document.getElementById("trackInput").value;
        let index = 0;

        for (const el of tracks) {
          if (el.src == trackImage) {
            this.slideTo(index, 1000, true);
            this.clickedIndex = index;
            break;
          }
          index += 1;
        }
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
        const bullets = document.getElementsByClassName("bullet-selector-image");
        const bulletImage = document.getElementById("bulletInput").value;
        let index = 0;

        for (const el of bullets) {
          if (el.src == bulletImage) {
            this.slideTo(index, 1000, true);
            this.clickedIndex = index;
            break;
          }
          index += 1;
        }
      },
    slideChange: function () {
        const index_currentSlide = this.realIndex;
        const currentSlide = this.slides[index_currentSlide];
        document.getElementById("bulletInput").value = currentSlide.src;
    },
},
});