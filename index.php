<?php get_header();

    ?>
    <div id='cssmenu'>
      <?php wp_nav_menu(); ?>
    </div>
    <?php

    ?>
    <div class="container" id="coverpage" data-stellar-background-ratio="0.8">

        <div class="row">
          <div class="text-center">
            <h1> Howdy everyone! this is my <?php  bloginfo('name'); ?></h1>
            <p>
              Sign up and Join us
            </p>
            <button href="<?php the_permalink('about');?>" class="btn btn-success" type="button" name="button">Contact</button>
          </div>
        </div>

    </div>

    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <?php the_post_thumbnail(array(300,200)) ?>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <label for=""><?php the_time() ?>| by <?php the_author(); ?></label>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "No post";
      }







    ?>





    <?php get_footer(); ?>
