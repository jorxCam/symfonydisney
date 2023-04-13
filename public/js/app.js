// Get the navbar element
const navbar = document.querySelector(".navbar");

// Define the scroll threshold (when to show the navbar)
const SCROLL_THRESHOLD = 400;

// When the user scrolls, toggle the "hidden" and "visible" classes on the navbar
window.addEventListener("scroll", () => {
  if (window.scrollY >= SCROLL_THRESHOLD) {

    document.querySelector(".logodisney").classList.add("visible");
    document.querySelector(".sincrire").classList.add("visible");
    document.querySelector(".navbar").classList.add("bg_black");
    // navbar.classList.remove("hidden");
  }
  if (window.scrollY <= SCROLL_THRESHOLD) {
    document.querySelector(".logodisney").classList.add("hidden");
    document.querySelector(".logodisney").classList.remove("visible");
    document.querySelector(".sincrire").classList.add("hidden");
    document.querySelector(".sincrire").classList.remove("visible");

    document.querySelector(".navbar").classList.remove("bg_black");
  }
  // else {

  //   // navbar.classList.add("hidden");
  //   // navbar.classList.remove("visible");
  // }
});