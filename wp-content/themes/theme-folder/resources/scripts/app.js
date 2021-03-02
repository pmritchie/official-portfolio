
/**
 * External Dependencies
 */
require("intersection-observer");
import lozad from "lozad";
import retina from "retinajs";
import SmoothScroll from 'smooth-scroll'

console.log('testing')

jQuery(document).ready(function () {


  const heroBtn = document.querySelector('#hero-button')
  heroBtn.addEventListener('click', e => {
    var scroll = new SmoothScroll()
    var anchor = document.querySelector('.about-me-section')
    scroll.animateScroll(anchor)
  })
  var scroll = $(window).scrollTop();


  $("#button").click(function () {
    $('html, body').animate({
      scrollTop: $("#myDiv").offset().top
    }, 2000);
  });


});


// $(window).scroll(function () {
  
 
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