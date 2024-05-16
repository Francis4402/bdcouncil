/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/jscodes.js ***!
  \*********************************/
var menuBtn = document.querySelector('.menu-btn');
var menu = document.querySelector('.menu');
menuBtn.addEventListener('click', function () {
  menu.classList.toggle('hidden');
});
document.addEventListener('click', function (event) {
  if (!menu.contains(event.target) && !menuBtn.contains(event.target)) {
    menu.classList.add('hidden');
  }
});
document.getElementById('toggleIcon1').addEventListener('click', function () {
  var areaText = document.getElementById('areaText');
  var toggleIcon1 = document.getElementById('toggleIcon1');
  var toggleIcon2 = document.getElementById('toggleIcon2');
  areaText.style.display = 'block';
  toggleIcon1.style.display = 'none';
  toggleIcon2.style.display = 'inline';
});
document.getElementById('toggleIcon2').addEventListener('click', function () {
  var areaText = document.getElementById('areaText');
  var toggleIcon1 = document.getElementById('toggleIcon1');
  var toggleIcon2 = document.getElementById('toggleIcon2');
  areaText.style.display = 'none';
  toggleIcon1.style.display = 'inline';
  toggleIcon2.style.display = 'none';
});
document.getElementById('toggleIcon3').addEventListener('click', function () {
  var areaText2 = document.getElementById('areaText2');
  var toggleIcon3 = document.getElementById('toggleIcon3');
  var toggleIcon4 = document.getElementById('toggleIcon4');
  areaText2.style.display = 'block';
  toggleIcon3.style.display = 'none';
  toggleIcon4.style.display = 'inline';
});
document.getElementById('toggleIcon4').addEventListener('click', function () {
  var areaText2 = document.getElementById('areaText2');
  var toggleIcon3 = document.getElementById('toggleIcon3');
  var toggleIcon4 = document.getElementById('toggleIcon4');
  areaText2.style.display = 'none';
  toggleIcon3.style.display = 'inline';
  toggleIcon4.style.display = 'none';
});
document.getElementById('toggleIcon5').addEventListener('click', function () {
  var areaText3 = document.getElementById('areaText3');
  var toggleIcon5 = document.getElementById('toggleIcon5');
  var toggleIcon6 = document.getElementById('toggleIcon6');
  areaText3.style.display = 'block';
  toggleIcon5.style.display = 'none';
  toggleIcon6.style.display = 'inline';
});
document.getElementById('toggleIcon6').addEventListener('click', function () {
  var areaText3 = document.getElementById('areaText3');
  var toggleIcon5 = document.getElementById('toggleIcon5');
  var toggleIcon6 = document.getElementById('toggleIcon6');
  areaText3.style.display = 'none';
  toggleIcon5.style.display = 'inline';
  toggleIcon6.style.display = 'none';
});
var dropdownToggle = document.getElementById('dropdownToggle');
var dropdownMenu = document.getElementById('dropdownMenu');
dropdownToggle.addEventListener('mouseenter', function () {
  dropdownMenu.classList.remove('hidden');
});
dropdownMenu.addEventListener('mouseleave', function () {
  dropdownMenu.classList.add('hidden');
});
var dropdownToggle2 = document.getElementById("dropdownToggle2");
var dropdownMenu2 = document.getElementById("dropdownMenu2");
dropdownToggle2.addEventListener('mouseenter', function () {
  dropdownMenu2.classList.remove('hidden');
});
dropdownMenu2.addEventListener('mouseleave', function () {
  dropdownMenu2.classList.add('hidden');
});
var dropdownToggle3 = document.getElementById("dropdownToggle3");
var dropdownMenu3 = document.getElementById("dropdownMenu3");
dropdownToggle3.addEventListener('mouseenter', function () {
  dropdownMenu3.classList.remove('hidden');
});
dropdownMenu3.addEventListener('mouseleave', function () {
  dropdownMenu3.classList.add('hidden');
});
var swiperEl = document.querySelector('.mySwiper3');
Object.assign(swiperEl, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    clickable: true
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50
    }
  }
});
swiperEl.initialize();
/******/ })()
;