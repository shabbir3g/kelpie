(function($){
	$(document).ready(function() {		
		
  		// parallax-bg
        var documentEl = $(document),
            parallaxBg = $('div.parallax-bg');
        
        documentEl.on('scroll', function() {
            var currScrollPos = documentEl.scrollTop();
            parallaxBg.css('background-position', '0 ' + -currScrollPos/4 + 'px');
        });
		

			
			// shrink Header
			
			var shrinkHeader = 350;
			  jQuery(window).scroll(function() {
				var scroll = getCurrentScroll();
				  if ( scroll >= shrinkHeader ) {
					   jQuery('.header-top-fixed').addClass('shrink');
					}
					else {
						jQuery('.header-top-fixed').removeClass('shrink');
					}
			  });
			  function getCurrentScroll() {
				return window.pageYOffset || document.documentElement.scrollTop;
				}
		
	});
})(jQuery);