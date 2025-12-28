//make year value dynamic
const yearEl = document.querySelector(".year");
const myYear = new Date().getFullYear();
yearEl.textContent = myYear;

let searchBtn = document.querySelector("#search-btn");
let searchForm = document.querySelector(".search-form");

//login
//let loginForm = document.querySelector(".login-form");

function showbar() {
  searchBtn.classList.toggle("fa-times");
  searchForm.classList.toggle("active");
}
//function showform() {
// loginForm.classList.add("active");
//}
//function hideform() {
// loginForm.classList.remove("active");
//}
//
const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnlogin-popup");
const iconClose = document.querySelector(".icon-close");

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});
loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});
btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});
iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});

//Access the images
let slideImages = document.querySelectorAll(".IMAG");
//Access the next and prev buttons
let next = document.querySelector(".next");
let prev = document.querySelector(".prev");
//access the indicators
let dots = document.querySelectorAll(".dot");

var counter = 0;

//heure
let time = document.getElementById("time");
setInterval(() => {
  let d = new Date();
  time.innerHTML = d.toLocaleTimeString();
}, 1000);

// code for next button
next.addEventListener("click", slideNext);
function slideNext() {
  slideImages[counter].style.animation = "next1 0.5s ease-in forwards";
  if (counter >= slideImages.length - 1) {
    counter = 0;
  } else {
    counter++;
  }
  slideImages[counter].style.animation = "next2 0.5s ease-in forwards";
  indicators();
}
// code for prev button
prev.addEventListener("click", slidePrev);
function slidePrev() {
  slideImages[counter].style.animation = "prev1 0.5s ease-in forwards";
  if (counter == 0) {
    counter = slideImages.length - 1;
  } else {
    counter--;
  }
  slideImages[counter].style.animation = "prev2 0.5s ease-in forwards";
  indicators();
}

//auto slideing
function autoSliding() {
  deletInterval = setInterval(timer, 3000);
  function timer() {
    slideNext();
    indicators();
  }
}
autoSliding();
//stop auto slidding when mouse is over
const containner = document.querySelector(".slide-container");
containner.addEventListener("mouseover", function () {
  clearInterval(deletInterval);
});

//resume sliding when mouse is out
containner.addEventListener("mouseout", autoSliding);

//add and remove active class from the indicators
function indicators() {
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace("active", "");
  }
  dots[counter].className += " active";
}

//add click event to the indicator
function switchImage(currentImage) {
  currentImage.classList.add("active");
  var imageId = currentImage.getAttribute("attr");
  if (imageId > counter) {
    slideImages[counter].style.animation = "next1 0.5s ease-in forwards";
    counter = imageId;
    slideImages[counter].style.animation = "next2 0.5s ease-in forwards";
  } else if (imageId == counter) {
    return;
  } else {
    slideImages[counter].style.animation = "prev1 0.5s ease-in forwards";
    counter = imageId;
    slideImages[counter].style.animation = "prev2 0.5s ease-in forwards";
  }
  indicators();
}
const btnNavEl = document.querySelector(".mobile-nav-btn");
const headerEl = document.querySelector(".header");
btnNavEl.addEventListener("click", function () {
  headerEl.classList.toggle("nav-open");
});

//page vol
let tabs = document.querySelectorAll(".tabs h2");
let tabContents = document.querySelectorAll(".tab-content div");
tabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabContents.forEach((content) => {
      content.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tabContents[index].classList.add("active");
    tabs[index].classList.add("active");
  });
});
