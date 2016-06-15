

(function($) {
  jQuery(document).ready(function($){
    $('#wrapper').masonry({
      itemSelector: '.box',
      gutterWidth: 0,
      isAnimated: false,
      isFitWidth: true, // I have spend 5 hours for this shit
      isRTL: true,
      isResizable: true,
      resize: true,
      transitionDuration: '0s'
    });
  });
}(jQuery));
