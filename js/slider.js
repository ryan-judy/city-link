$(document).ready(function() {
console.log('loaded')
  $("#container1").twentytwenty();

var OFFSET_TOP = 50;

console.log(OFFSET_TOP)

$(window).scroll(function () {
  if ($('.navbar').length) {
    if ($('.navbar').offset().top > OFFSET_TOP) {
    	console.log('load')
      $('.scrolling-navbar').addClass('top-nav-collapse');
    } else {
      $('.scrolling-navbar').removeClass('top-nav-collapse');
    }
  }
});

});