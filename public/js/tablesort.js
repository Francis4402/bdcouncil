/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/tablesort.js ***!
  \***********************************/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
/**
 * 
 * @param {HTMLTableElement} table 
 * @param {number} column 
 * @param {boolean} asc 
 */
function sortTableByColumn(table, column) {
  var asc = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
  var dirModifier = asc ? 1 : -1;
  var tBody = table.tBodies[0];
  var rows = Array.from(tBody.querySelectorAll('tr'));
  var sortedRows = rows.sort(function (a, b) {
    var aColText = a.querySelector("td:nth-child(".concat(column, ")")).textContent.trim();
    var bColText = b.querySelector("td:nth-child(".concat(column, ")")).textContent.trim();
    return aColText > bColText ? 1 * dirModifier : -1 * dirModifier;
  });
  while (tBody.firstChild) {
    tBody.removeChild(tBody.firstChild);
  }
  tBody.append.apply(tBody, _toConsumableArray(sortedRows));
  table.querySelectorAll("th").forEach(function (th) {
    return th.classList.remove("th-sort-asc", "th-sort-desc");
  });
  if (column !== 0) {
    table.querySelector("th:nth-child(".concat(column + 1, ")")).classList.toggle("th-sort-asc", asc);
    table.querySelector("th:nth-child(".concat(column + 1, ")")).classList.toggle("th-sort-desc", !asc);
  }
}
document.querySelectorAll(".table-sortable th").forEach(function (headerCell) {
  headerCell.addEventListener("click", function (event) {
    if (event.target.tagName.toLowerCase() === 'th') {
      var tableElement = headerCell.closest('table');
      var headerIndex = Array.from(headerCell.parentElement.children).indexOf(headerCell);
      var currentIsAscending = headerCell.classList.contains("th-sort-asc");
      if (headerCell.textContent.trim() === 'No') {
        sortTableByColumn(tableElement, 0, true); // Reset sorting by calling the function with the No column
        return;
      }
      sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    }
  });
});
/******/ })()
;