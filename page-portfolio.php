<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post();  ?>

<div class="container">
  <div class="col-md-8">
    <div class="letter">
      <p>
        <?php the_content(); ?>
      </p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="letter">
      <?php if(dynamic_sidebar('right_sidebar')) : else : endif; ?>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer() ?>
