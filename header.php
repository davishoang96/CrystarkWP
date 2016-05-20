<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <?php wp_head(); ?>

    <!-- <script type="text/javascript">
      function parallax(){
        var trumbotron = document.getElementById('trumbotron');
        trumbotron.style.top = -(window.pageYOffset / 4) + 'px';
      }
      window.addEventListener("scroll" , parallax, false);
    </script> -->

    <script type="text/javascript">
    (function(){
      var documentEl = $(document),
          parallaxBg = $('div.trumbotron');


      documentEl.on('scroll', function(){
        var currScrollPos = documentEl.scrollTop();
        parallaxBg.css('background-position', '0 ' + -currScrollPos/4 + 'px');
      });
    });

    </script>

  </head>
  <body <?php body_class('moke'); ?> >

    <div id="cssmenu">
      <?php wp_nav_menu(); ?>
    </div>
