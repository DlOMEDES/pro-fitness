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

// when right arrow is clicked
arrowRight.addEventListener("click", () => {
  if (currentSlide === slides.length - 1) {
    currentSlide = -1;
  }
  nextImg();
});
// show previous image
prevImg = () => {
  resetImgs();
  slides[currentSlide - 1].style.display = "block";
  currentSlide--;
};
// show next
nextImg = () => {
  resetImgs();
  slides[currentSlide + 1].style.display = "block";
  currentSlide++;
};
// call initialized slide
initSlide();
