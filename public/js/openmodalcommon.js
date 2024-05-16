/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!***********************************!*\
  !*** ./resources/js/openmodal.js ***!
  \***********************************/
var button = document.querySelector('.modal-button');
var modal = document.getElementById('my_modal_1');
var closeButton = modal.querySelector('.btn-close');
button.addEventListener('click', function () {
  modal.showModal();
});
closeButton.addEventListener('click', function () {
  modal.close();
});
document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape' && modal.open) {
    modal.close();
  }
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************!*\
  !*** ./resources/js/openmodal2.js ***!
  \************************************/
var button2 = document.querySelector('.modal-button2');
var modal2 = document.getElementById('my_modal_2');
var closeButton2 = modal2.querySelector('.btn-close');
button2.addEventListener('click', function () {
  modal2.showModal();
});
closeButton2.addEventListener('click', function () {
  modal2.close();
});
document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape' && modal2.open) {
    modal2.close();
  }
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************!*\
  !*** ./resources/js/openmodal3.js ***!
  \************************************/
var button3 = document.querySelector('.modal-button3');
var modal3 = document.getElementById('my_modal_3');
var closeButton3 = modal3.querySelector('.btn-close');
button3.addEventListener('click', function () {
  modal3.showModal();
});
closeButton3.addEventListener('click', function () {
  modal3.close();
});
document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape' && modal3.open) {
    modal3.close();
  }
});
})();

/******/ })()
;