<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post();  ?>

  <div class="background-news" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
    <div class="title-news">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

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

<script type="text/javascript">
(function($){

    var documentEl = $(document),
        parallaxBg = $('div.background-news');


    documentEl.on('scroll', function(){
      var currScrollPos = documentEl.scrollTop();
      parallaxBg.css('background-position','0 ' + -currScrollPos/4 + 'px');
    });

})(jQuery);
</script>

<?php endwhile; endif; ?>
<?php get_footer() ?>
