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
    <div class="background-news" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
      <div class="title-news">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="container news-posts">
      <div class="row">
        <div class="col-lg-8">
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
