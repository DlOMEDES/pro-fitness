// MOBILE MENU
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
  console.log("live");
  if (!menuState) {
    menuBtn.classList.add("close");
    menu.classList.add("show");
    menuMobile.classList.add("show");
    // loop through navmenu links
    mobileLinks.forEach((item) => item.classList.add("show"));
    // set state for menu
    menuState = true;
  } else {
    // reverse toggle
    menuBtn.classList.remove("close");
    menu.classList.remove("show");
    menuMobile.classList.remove("show");
    mobileLinks.forEach((item) => item.classList.remove("show"));
    menuState = false;
  }
};
// add event to button
menuBtn.addEventListener("click", toggleMenu);

// SLIDER
// querySectorAll return a html collection like an array with index
const slides = document.querySelectorAll(".slide"),
  // target the arrows

  arrowLeft = document.querySelector("#arrowLeft"),
  arrowRight = document.querySelector("#arrowRight");
// target current slide
currentSlide = 0;

// prep and clear all images
resetImgs = () => {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
};
// initialize slide
initSlide = () => {
  resetImgs();
  slides[0].style.display = "block";
};

// when left arrow is click show previous image
arrowLeft.addEventListener("click", () => {
  if (currentSlide === 0) {
    currentSlide = slides.length;
  }
  prevImg();
});
// show previous image
prevImg = () => {
  resetImgs();
  slides[currentSlide - 1].style.display = "block";
  currentSlide--;
  console.log(currentSlide);
};

// when right arrow is clicked
arrowRight.addEventListener("click", () => {
  if (currentSlide === slides.length - 1) {
    currentSlide = -1;
  }
  nextImg();
});
// show next
nextImg = () => {
  resetImgs();
  slides[currentSlide + 1].style.display = "block";
  currentSlide++;
  console.log(currentSlide);
};
// call initialized slide
initSlide();
