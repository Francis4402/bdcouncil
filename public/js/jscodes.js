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
var dropdownToggle = $('#dropdownToggle');
var dropdownMenu = $('#dropdownMenu');
dropdownToggle.on('mouseenter', function () {
  dropdownMenu.removeClass('hidden');
});
dropdownMenu.on('mouseleave', function () {
  dropdownMenu.addClass('hidden');
});
dropdownToggle.on('mouseenter', function () {
  $('#dropdownMenu3').addClass('hidden');
  $('#dropdownMenu2').addClass('hidden');
});
var dropdownToggle2 = $('#dropdownToggle2');
var dropdownMenu2 = $('#dropdownMenu2');
dropdownToggle2.on('mouseenter', function () {
  dropdownMenu2.removeClass('hidden');
});
dropdownToggle2.on('mouseenter', function () {
  $('#dropdownMenu3').addClass('hidden');
  $('#dropdownMenu').addClass('hidden');
});
dropdownMenu2.on('mouseleave', function () {
  dropdownMenu2.addClass('hidden');
});
var dropdownToggle3 = $('#dropdownToggle3');
var dropdownMenu3 = $('#dropdownMenu3');
dropdownToggle3.on('mouseenter', function () {
  dropdownMenu3.removeClass('hidden');
});
dropdownToggle3.on('mouseenter', function () {
  $('#dropdownMenu2').addClass('hidden');
  $('#dropdownMenu').addClass('hidden');
});
dropdownMenu3.on('mouseleave', function () {
  dropdownMenu3.addClass('hidden');
});
var dropdownToggles = [$('#dropdownToggle4'), $('#dropdownToggle5'), $('#dropdownToggle6'), $('#dropdownToggle7'), $('#dropdownToggle8'), $('#dropdownToggle9'), $('#dropdownToggle10'), $('#dropdownToggle11')];
dropdownToggles.forEach(function (dropdownToggle) {
  dropdownToggle.on('mouseenter', hideDropdownMenus);
});
function hideDropdownMenus() {
  $('#dropdownMenu2').addClass('hidden');
  $('#dropdownMenu').addClass('hidden');
  $('#dropdownMenu3').addClass('hidden');
}
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
$(document).ready(function () {
  var currentPath = window.location.pathname;
  $('.menu-link').each(function () {
    var linkPath = $(this).attr('href');
    if (linkPath === currentPath) {
      $(this).addClass('active');
    }
  });
});
/******/ })()
;