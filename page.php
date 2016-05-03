<?php
get_header();
?>
<div id='cssmenu'>
  <?php wp_nav_menu(); ?>
</div>
<?php
if(have_posts()){
  while(have_posts()){
    the_post();
    ?>
      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <h1><?php the_title(); ?></h1>
            <p>
              <?php the_content(); ?>
            </p>
            <hr>
          </div>
        </div>
      </div>
    <?php
  }
}


get_footer();
?>
