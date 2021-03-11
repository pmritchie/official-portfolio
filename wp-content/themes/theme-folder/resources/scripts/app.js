
/**
 * External Dependencies
 */
require("intersection-observer");
import lozad from "lozad";
import retina from "retinajs";
import SmoothScroll from 'smooth-scroll'


$(document).ready(function () {
  var currentPage = get_page_vars
  if (get_page_vars.currentPage == '5-2') {
    const heroBtn = document.querySelector('#hero-button')
    heroBtn.addEventListener('click', e => {
      var scroll = new SmoothScroll()
      var anchor = document.querySelector('.about-section')
      scroll.animateScroll(anchor)
    })


    var $animation_trigger = $('#box-two');
    var $window = $(window);
    
    function check_if_in_view() {   
      var window_top_position = $window.scrollTop();
      var bxTwo = $animation_trigger.offset ();
      var windowWidth = $(window).width(); 
      var bxTwoTrigger = bxTwo.top - bxTwo.top * .3;
      if (windowWidth >= 1000) {
        if (bxTwoTrigger <= window_top_position) {
          $(".box").css({
            "animation": "fadeIn ease 1s",
            "-webkit-animation": "fadeIn ease 1s",
            "-moz-animation": "fadeIn ease 1s",
            "-o-animation": "fadeIn ease 1s",
            "-ms-animation": "fadeIn ease 1s"})
          $("#box-one").animate({ left: "10%" }, 1000);
          $("#box-one").css({
            '-webkit-transform': 'rotate(' + -30 + 'deg)',
            '-moz-transform': 'rotate(' + -30 + 'deg)',
            '-ms-transform': 'rotate(' + -30 + 'deg)',
            'transform': 'rotate(' + -30 + 'deg)'
          });
          $("#box-two").animate({ left: "10%", top: "40%" }, 1000);
          $("#box-three").animate({ right: "10%", top: "15%" }, 1000);
          $("#box-four").animate({ right: "11%", top: "35%" }, 1000);
          $("#box-five").animate({ right: "10%", bottom: "25%" }, 1000);
          $("#box-six").animate({ left: "10%", bottom: "25%" }, 1000);
          $("#box-six").css({ 'box-shadow' : '0px 8px 8px 8px',
            '-webkit-transform': 'rotate(' + 30 + 'deg)',
            '-moz-transform': 'rotate(' + 30 + 'deg)',
            '-ms-transform': 'rotate(' + 30 + 'deg)',
            'transform': 'rotate(' + 30 + 'deg)'
          });
          $("#box-sever").animate({right: "16%", top: "160px"}, 1000);
        }
      }
    }
    
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll'); 
  }

  function window_width() {
    var windowWidth = $(window).width(); 
    console.log('width :' + windowWidth)
    if (windowWidth < 776) {
      if ($(document).scrollTop() == 0) {
        $("#main-header").removeClass("is-sticky");
      } else {
        $("#main-header").addClass("is-sticky");
      }
    }
  }
  $window.on('scroll resize', window_width);
  $window.trigger('scroll'); 


});


