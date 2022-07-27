const logo = document.querySelector(".header__box-logo");
const list = document.querySelectorAll(".header__list-link");
let windowHeight = document.documentElement.clientHeight;

window.addEventListener("scroll", function () {
  if (this.scrollY > windowHeight) {
    logo.classList.add("scroll");
    list.forEach((list) => {
      list.classList.add("scroll");
    });
  } else {
    logo.classList.remove("scroll");
    list.forEach((list) => {
      list.classList.remove("scroll");
    });
  }
});
