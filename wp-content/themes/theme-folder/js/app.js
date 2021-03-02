(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./resources/scripts/app.js":
/*!**********************************!*\
  !*** ./resources/scripts/app.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var lozad__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lozad */ "./node_modules/lozad/dist/lozad.min.js");
/* harmony import */ var lozad__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(lozad__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var retinajs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! retinajs */ "./node_modules/retinajs/dist/retina.min.js");
/* harmony import */ var retinajs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(retinajs__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! smooth-scroll */ "./node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js");
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(smooth_scroll__WEBPACK_IMPORTED_MODULE_2__);
/**
 * External Dependencies
 */
__webpack_require__(/*! intersection-observer */ "./node_modules/intersection-observer/intersection-observer.js");




console.log('testing');
jQuery(document).ready(function () {
  var heroBtn = document.querySelector('#hero-button');
  heroBtn.addEventListener('click', function (e) {
    var scroll = new smooth_scroll__WEBPACK_IMPORTED_MODULE_2___default.a();
    var anchor = document.querySelector('.about-me-section');
    scroll.animateScroll(anchor);
  });
  var scroll = $(window).scrollTop();
  $("#button").click(function () {
    $('html, body').animate({
      scrollTop: $("#myDiv").offset().top
    }, 2000);
  });
}); // $(window).scroll(function () {
//   if ($(document).scrollTop() == 0) {
//     console.log()
//     $("#main-header").removeClass("is-sticky");
//   } else {
//     $("#main-header").addClass("is-sticky");
//   }
//   if ($(document).scrollTop() == 100) {
//     $("#box-one").addClass("move");
//   } 
// });
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/styles/main.scss":
/*!************************************!*\
  !*** ./resources/styles/main.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************!*\
  !*** multi ./resources/scripts/app.js ./resources/styles/main.scss ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/patrickritchie/Desktop/Dev/official-portfolio/wp-content/themes/theme-folder/resources/scripts/app.js */"./resources/scripts/app.js");
module.exports = __webpack_require__(/*! /Users/patrickritchie/Desktop/Dev/official-portfolio/wp-content/themes/theme-folder/resources/styles/main.scss */"./resources/styles/main.scss");


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["jQuery"]; }());

/***/ })

},[[0,"/dist/js/manifest","/dist/js/vendor"]]]);
//# sourceMappingURL=app.js.map