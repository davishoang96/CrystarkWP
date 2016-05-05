<?php
get_header();
    ?>
    <div id='cssmenu'>
      <?php wp_nav_menu(); ?>
    </div>

    <div class="container" id="coverpage" data-stellar-background-ratio="0.4">
      <div class="col-lg-12">
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
    </div>



    <?php

    if(have_posts()) :
      while (have_posts()) :
        the_post();
        ?>
          <section class="the-loop">
            <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <?php the_post_thumbnail('thumbnail') ?>
                </div>
                <div class="col-md-8">

                  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                  <p><?php the_time(); ?> | by <?php the_author(); ?></p>
                </div>
              </div>
            </div>
          </section>
        <?php
      endwhile;
    else:

    endif;
    ?>
get_footer();
?>
