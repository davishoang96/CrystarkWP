
(function(){

    var documentEl = $(document),
        parallaxBg = $('div.trumbotron');


    documentEl.on('scroll', function(){
      var currScrollPos = documentEl.scrollTop();
      parallaxBg.css('background-position','0 ' + -currScrollPos/6 + 'px');
    });

})();
