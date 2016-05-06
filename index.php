<?php get_header();

    ?>
    <div id='cssmenu'>
      <?php wp_nav_menu(); ?>
    </div>
    <?php

    ?>
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

    if(have_posts()){
      while (have_posts()) {
        the_post();
        ?>
        <article class="the-post">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="thumbnail">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300, 200)); ?></a>
                </div>
                <p><?php the_excerpt() ?></p>
                <label><?php the_time(); ?> | by <?php the_author(); ?></label>
              </div>
            </div>
          </div>
        </article>
        <?php
      }
    } else {
      ?>
      <h1>NO CONTENT</h1>
      <?php
    }
    ?>



    <?php get_footer(); ?>
