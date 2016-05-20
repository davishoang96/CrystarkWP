<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('moke'); ?> >

    <div id="cssmenu">
      <?php wp_nav_menu(); ?>
    </div>
