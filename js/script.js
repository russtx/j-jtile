
(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$('#scrollDown').on('click', function(e){
	     e.preventDefault();
	     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	       var target = $(this.hash);
	       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	       if (target.length) {
	         $('html,body').animate({
	           scrollTop: target.offset().top
	         }, 1000);
	         return false;
	       }
	     }
	   });
		 //next
		 $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});





//end here
	});

})(jQuery, this);
