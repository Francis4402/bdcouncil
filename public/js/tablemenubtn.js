/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/tablemenubtn.js ***!
  \**************************************/
var tablemenu = document.querySelector('.tablemenubtn');
var smallmenu = document.querySelector('.smallmenu');
tablemenu.addEventListener('click', function () {
  smallmenu.classList.toggle('hidden');
});
document.addEventListener('click', function (event) {
  if (!smallmenu.contains(event.target) && !tablemenu.contains(event.target)) {
    smallmenu.classList.add('hidden');
  }
});
/******/ })()
;