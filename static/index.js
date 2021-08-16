document.querySelector(".navbar-nav").addEventListener("click", function (e) {
  if (e.target.innerHTML == "Home") {
    e.preventDefault();
    window.scrollTo(0, 0);
  }
});
document.querySelector(".footer-links").addEventListener("click", function (e) {
  if (e.target.innerHTML == "Home") {
    e.preventDefault();
    window.scrollTo(0, 0);
  }
});
