<?php
//Bootstrap Walker
require('wp_bootstrap_navwalker.php');

//Main Stylesheet
function custom_css(){
  wp_enqueue_style('styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_css');

//Main bootstrap CSS
function bootstrap_css(){
  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . "/css/bootstrap.min.css");
}
add_action('wp_enqueue_scripts', 'bootstrap_css');

function bootstrap_js(){
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.min.js" , array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_js');


//Google Maps
function googlemaps(){
  wp_enqueue_script('google_maps', get_template_directory_uri() . "/js/google_maps.js" , array('jquery'), '', true);
}
add_action('wp_footer', 'googlemaps');


//Pull masonry bundle from the WP Core
function masonry(){
  wp_enqueue_script( 'masonry' );

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

//Activate parallax plugin
function activate_stellar(){
  wp_enqueue_script('activateStellar_js', get_template_directory_uri() . "/js/activate_stellar.js", array('jquery'), '', true);
}
add_action("wp_footer", 'activate_stellar');
add_theme_support( 'post-thumbnails' );

function parallax_hand_code(){
  wp_enqueue_script('parallax_hand_code', get_template_directory_uri() . "/js/parallax-handcode.js", array('jquery'), '', true);
}
add_action("wp_footer", 'parallax_hand_code');

function widget_area(){
  register_sidebar(array(
    'name' => 'Right Sidebar',
    'id' => 'right_sidebar',
    'description' => 'This is an area for widget on the right',
    'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style: none">',
    'after_widget' => "</li>",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => "</h2>"
  ));
}
add_action('widgets_init','widget_area');

function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

     <div class="comment-class">

       <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-author vcard">
           <?php printf(__('<cite class="comment-author-name">%s</cite> <span class="says">wrote:</span>'), get_comment_author_link()) ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
           <em><?php _e('Your comment is awaiting moderation.') ?></em>
           <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

        <p class="comment-text">
          <?php comment_text() ?>
        </p>

       </div>
     </div>
<?php
}
?>
