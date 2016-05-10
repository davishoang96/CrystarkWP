<?php
function custom_css(){
  wp_enqueue_style('styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_css');

function bootstrap_css(){
  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . "/css/bootstrap.min.css");
}
add_action('wp_enqueue_scripts', 'bootstrap_css');

function bootstrap_js(){
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.min.js" , array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_js');

function main_jquery(){
  wp_enqueue_script('jquery', get_template_directory_uri() . "/js/jquery-2.2.3.min.js", array('jquery'), '' , true);
}
add_action('wp_enqueue_scripts', 'main_jquery');

function stellar_parallax(){
  wp_enqueue_script('stellar_parallax', get_template_directory_uri() . "/js/jquery.stellar.min.js", array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'stellar_parallax');

function masonry(){
  wp_register_script('jquery_masonry', get_template_directory_uri(). '/js/masonry.pkgd.min.js', array('jquery'), '2.0.110526', true );
}
add_action('wp_enqueue_scripts', 'masonry');

function activate_stellar(){
  wp_enqueue_script('activateStellar_js', get_template_directory_uri() . "/js/activate_stellar.js", array('jquery'), '', true);
}
add_action("wp_footer", 'activate_stellar');
add_theme_support( 'post-thumbnails' );





?>
