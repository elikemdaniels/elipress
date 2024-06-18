// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import "swiper/css/bundle";

// init Swiper:
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  autoplay: true,
  slidesPerView: 4,
  spaceBetween: 30,
  grabCursor: true,
  clickable: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

console.log("Hello, world from the swiper.js file!");
