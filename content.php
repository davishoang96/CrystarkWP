<div class="container-fluid" id="conter">
  <div class="row">
    <div class="col-md-12">
      <div class="wrapper">
        <div class="text-center">
          <div class="thumbnail">
            <?php the_post_thumbnail('medium'); ?>
          </div>
        </div>
        <div class="posts">
          <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
          <label><?php the_time()?> | by <?php the_author(); ?></label>
          <p>
            <?php the_excerpt(); ?>
          </p>
          
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
