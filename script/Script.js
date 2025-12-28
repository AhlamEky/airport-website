//make year value dynamic
const yearEl = document.querySelector(".year");
const myYear = new Date().getFullYear();
yearEl.textContent = myYear;

let searchBtn = document.querySelector("#search-btn");
let searchForm = document.querySelector(".search-form");

function showbar() {
  searchBtn.classList.toggle("fa-times");
  searchForm.classList.toggle("active");
}

//jjjjjjjjjjjjjjjjjjj
//const btnNavEl = document.querySelector(".mobile-nav-btn");
//const headerEl = document.querySelector(".header");
//btnNavEl.addEventListener("click", function () {
// headerEl.classList.toggle("nav-open");
//});

//page vol
//let tabs = document.querySelectorAll(".tabs h2");
//let tabContents = document.querySelectorAll(".tab-content div");
//tabs.forEach((tab, index) => {
// tab.addEventListener("click", () => {
//    tabContents.forEach((content) => {
//     content.classList.remove("active");
//   });
//  tabs.forEach((tab) => {
//    tab.classList.remove("active");
//  });
//  tabContents[index].classList.add("active");
//  tabs[index].classList.add("active");
//});
//});
//
let listElements = document.querySelectorAll(".accordion");
listElements.forEach((listElement) => {
  listElement.addEventListener("click", () => {
    if (listElement.classList.contains("active")) {
      listElement.classList.remove("active");
    } else {
      listElements.forEach((ListE) => {
        ListE.classList.remove("active");
      });
      listElement.classList.toggle("active");
    }
  });
});
