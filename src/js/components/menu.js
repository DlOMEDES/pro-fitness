// select dom items
const menuBtn = document.querySelector(".menuBtn");
const nav = document.querySelector(".nav");
const navMenu = document.querySelector(".navMenu");
let navLinks = document.querySelectorAll(".navMenuLink");
// set initial state of menu
let menuState = false;
// create function for event
toggleMenu = () => {
  console.log("clicked me again!");
  if (!menuState) {
    menuBtn.classList.add("close");
    nav.classList.add("show");
    navMenu.classList.add("show");
    // loop through navmenu links
    navLinks.forEach(item => item.classList.add("show"));
    // set state for menu
    menuState = true;
  } else {
    // reverse toggle
    menuBtn.classList.remove("close");
    nav.classList.remove("show");
    navMenu.classList.remove("show");
    navLinks.forEach(item => item.classList.remove("show"));
    menuState = false;
  }
};
// add event to button
menuBtn.addEventListener("click", toggleMenu);
