/**
 * External Dependencies
 */
require("intersection-observer");
import lozad from "lozad";
import retina from "retinajs";

const targets = document.querySelectorAll(".lozad");

const lazyLoad = target => {
  const io = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        const src = img.getAttribute("data-src");
        img.setAttribute("src", src);
        observer.disconnect();
      }
    });
  });

  io.observe(target);
};



$(window).scroll(function () {
  
 
  if ($(document).scrollTop() == 0) {
    console.log()
    $("#main-header").removeClass("is-sticky");
  } else {
    $("#main-header").addClass("is-sticky");
  }

  if ($(document).scrollTop() == 100) {
    $("#box-one").addClass("move");
  } 
});

$(document).ready(function() {
  var scroll = $(window).scrollTop();
  console.log(scroll)

});

