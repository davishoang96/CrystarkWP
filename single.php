<?php
  get_header();

  ?>
  <div id='cssmenu'>
    <?php wp_nav_menu(); ?>
  </div>
  <?php

  if(have_posts() ) :

    the_post();
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php the_title(); ?></h1>
          <?php the_post_thumbnail('medium') ?>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </div>
    <?php

    else :
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color: red">There aren't any post here</h1>
          </div>
        </div>
      </div>
      <?php
    endif;

  get_footer();
 ?>
