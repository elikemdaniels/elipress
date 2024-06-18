import { gsap } from "gsap";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      const testimonialEl = document.querySelectorAll(".testimonial");
      if (testimonialEl.length > 0) {
        gsap.from(".testimonial", {
          y: 10,
          opacity: 0,
          duration: 0.5,
          ease: "ease.in",
          delay: 0.25,
        });
      }
    },
    false
  );
});

console.log("Hello, world from the gsap.js file!");
