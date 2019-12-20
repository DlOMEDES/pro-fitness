// select dom elements
// // select dom items
const menuBtn = document.querySelector(".menuBtn");
const menu = document.querySelector(".menu");
const menuMobile = document.querySelector(".menuMobile");
let mobileLinks = document.querySelectorAll(".menuMobile-link");
// set initial state of menu
let menuState = false;
// create function for event
toggleMenu = () => {
  if (!menuState) {
    menuBtn.classList.add("close");
    menu.classList.add("show");
    menuMobile.classList.add("show");
    // loop through navmenu links
    mobileLinks.forEach(item => item.classList.add("show"));
    // set state for menu
    menuState = true;
  } else {
    // reverse toggle
    menuBtn.classList.remove("close");
    menu.classList.remove("show");
    menuMobile.classList.remove("show");
    mobileLinks.forEach(item => item.classList.remove("show"));
    menuState = false;
  }
};
// add event to button
menuBtn.addEventListener("click", toggleMenu);
