<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post();  ?>

<div class="wrapper-portfolio">
  <p>
    <?php the_content(); ?>
  </p>
</div>

<?php endwhile; endif; ?>
<?php get_footer() ?>
