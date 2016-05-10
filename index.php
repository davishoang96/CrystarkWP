<?php get_header(); ?>
<div id="cssmenu">
	<?php wp_nav_menu() ?>
</div>
<div class="jumbotron">

</div>
<div class="container">
	<div class="col-md-12">
		<div id="wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		 <div class="box">
			<a href="<?php the_permalink() ?>" rel="bookmark">

			<?php if (has_post_thumbnail()) {
				the_post_thumbnail('medium');
			}?>
			<h2><?php the_title(); ?></h2></a>
			<label for=""><?php the_time() ?> | by <?php the_author() ?></label>
			</div>

		<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function($){
    	$('#wrapper').masonry({
      	  itemSelector: '.box',
    	  });
  	});
</script>

<?php get_footer(); ?>
