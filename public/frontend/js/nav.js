let humberger = document.querySelector(".humberger");
let nav = document.querySelector("nav");
let links = document.querySelector(".links");
let container = document.querySelector(".container");

humberger.onclick = function () {
  humberger.classList.toggle("active");
  nav.classList.toggle("active");
    links.classList.toggle("active");
  container.classList.toggle("active");
};
