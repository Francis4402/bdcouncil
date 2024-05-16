/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/langchange.js ***!
  \************************************/
var url = "{{ route('lang.change') }}";
$('lang-change').change(function () {
  var lang_code = $(this).val();
  window.location.href = url + "?lang=" + lang_code;
});
/******/ })()
;