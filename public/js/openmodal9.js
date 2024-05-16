/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/openmodal9.js ***!
  \************************************/
var button = document.querySelector('.modal-button9');
var modal = document.getElementById('my_modal_9');
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
/******/ })()
;