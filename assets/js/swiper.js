import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {

      const homeImages = new Swiper(".swiper-header-home", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 4000,
        },
        effect: "fade",
        speed: 1500,
      });

    }

    if (document.body.classList.contains("page-template-page-store")) {

      const homeImages = new Swiper(".swiper-store-thumbs", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

    }

    if (document.body.classList.contains("page-template-page-sleeping")) {

      const roomGallery = new Swiper(".swiper-room-gallery", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

    }
    
  }, false);
});
