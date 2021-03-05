
/**
 * External Dependencies
 */
require("intersection-observer");
import lozad from "lozad";
import retina from "retinajs";
import SmoothScroll from 'smooth-scroll'

console.log('testing')

$(document).ready(function () {


  var currentPage = get_page_vars
  console.log(currentPage.currentPage)
  if (get_page_vars.currentPage == '5-2') {
    const heroBtn = document.querySelector('#hero-button')
    heroBtn.addEventListener('click', e => {
      console.log('click')
      var scroll = new SmoothScroll()
      var anchor = document.querySelector('.about-section')
      scroll.animateScroll(anchor)
    })


    var $animation_trigger = $('#box-two');
    var $window = $(window);
    
    function check_if_in_view() {   
      var window_top_position = $window.scrollTop();
      var bxTwo = $animation_trigger.offset ();

      var bxTwoTrigger = bxTwo.top - bxTwo.top * .3;
      console.log(bxTwoTrigger)
      if (bxTwoTrigger <= window_top_position) {
        $("#box-one").animate({ left: "14%" }, 1000);
        $("#box-one").css({
          '-webkit-transform': 'rotate(' + -45 + 'deg)',
          '-moz-transform': 'rotate(' + -45 + 'deg)',
          '-ms-transform': 'rotate(' + -45 + 'deg)',
          'transform': 'rotate(' + -45+ 'deg)'
        });
        $("#box-two").animate({top: "33%", left: "15%"}, 1000);
        $("#box-three").animate({ right: "16%", top: "160px" }, 1000);
        $("#box-four").animate({ right: "13%", top: "130px" }, 1000);
        $("#box-five").animate({ right: "15%", top: "130px" }, 1000);
        $("#box-six").animate({ left: "10%", top: "200px" }, 1000);
        $("#box-sever").animate({right: "16%", top: "160px"}, 1000);
      }
    }
    
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll'); 
  }






  // $("#button").click(function () {
  //   $('html, body').animate({
  //     scrollTop: $("#myDiv").offset().top
  //   }, 2000);
  // });


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