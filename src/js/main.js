document.addEventListener(
  "DOMContentLoaded",
  function () {
    const logo = document.querySelector(".header__box-logo");
    const list = document.querySelectorAll(".header__list-link");
    let windowHeight = document.documentElement.clientHeight;
    const hamburger = document.querySelector(".header__hamburger");
    const hamburgerList = document.querySelector(".header__list");
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
    hamburger.addEventListener("click", function () {
      hamburger.classList.toggle("active");
      hamburgerList.classList.toggle("active");
    });
  },
  false
);
