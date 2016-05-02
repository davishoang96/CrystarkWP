<?php
get_header();
    ?>
    <nav class="navi">
      <?php wp_nav_menu(); ?>
    </nav>

    <div class="jumbotron" id="coverpage" data-stellar-background-ratio="0.4">
      <div class="text-center">
        <h1>Welcome to my <?php bloginfo('name'); ?></h1>
        <p>
          Sign up for my newsletter to receive periodic webDev tips, tricks, resources and coupons.
        </p>
        <button type="button" name="button" class="btn btn-success">Click here</button>
      </div>
    </div>


    <?php

if(have_posts()){
  while(have_posts()){
    the_post();
    ?>
      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
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
