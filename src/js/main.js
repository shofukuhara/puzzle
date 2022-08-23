document.addEventListener(
  "DOMContentLoaded",
  function () {
    const logo = document.querySelector(".header__box-logo");
    const link = document.querySelectorAll(".header__list-link");
    let windowHeight = document.documentElement.clientHeight;
    const hamburger = document.querySelector(".header__hamburger");
    const hamburgerList = document.querySelector(".header__list");
    window.addEventListener("scroll", function () {
      if (this.scrollY > windowHeight) {
        logo.classList.add("scroll");
        link.forEach((link) => {
          link.classList.add("scroll");
        });
      } else {
        logo.classList.remove("scroll");
        link.forEach((link) => {
          link.classList.remove("scroll");
        });
      }
    });
    hamburger.addEventListener("click", function () {
      hamburger.classList.toggle("active");
      hamburgerList.classList.toggle("active");
    });
    link.forEach((link) => {
      link.addEventListener("click", () => {
        hamburgerList.classList.remove("active");
        hamburger.classList.remove("active");
      });
    });
  },
  false
);
