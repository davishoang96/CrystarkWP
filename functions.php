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


//Pull masonry bundle from the WP Core
function masonry(){
  wp_register_script('jquery_masonry', get_template_directory_uri(). '/js/masonry.pkgd.min.js', array('jquery'), '2.0.110526', true );
}
add_action('wp_enqueue_scripts', 'masonry');

function my_masonry_script(){
  wp_enqueue_script('my_masonry_script', get_template_directory_uri(). '/js/my_masonry.js', array('jquery'), '', true);
}
add_action('wp_footer', "my_masonry_script");

//Parallax Scroll Effect
function stellar_parallax(){
  wp_enqueue_script('stellar_parallax', get_template_directory_uri() . "/js/jquery.stellar.min.js", array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'stellar_parallax');

function activate_stellar(){
  wp_enqueue_script('activateStellar_js', get_template_directory_uri() . "/js/activate_stellar.js", array('jquery'), '', true);
}
add_action("wp_footer", 'activate_stellar');
add_theme_support( 'post-thumbnails' );

function widget_area(){
  register_sidebar(array(
    'name' => 'Right Sidebar',
    'id' => 'right_sidebar',
    'description' => 'This is an area for widget on the right',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => "</li>n",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => "</h2>n"
  ));
}
add_action('widgets_init','widget_area');








?>
