<?php get_header(); ?>
<div id="cssmenu">
	<?php wp_nav_menu() ?>
</div>
<div class="jumbotron">
	<div class="center-title">
		<h1>Masonry Grid In Action</h1>
	</div>
</div>
<div class="container-fluid">



						<div id="wrapper">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						 <div class="box">
							<a href="<?php the_permalink() ?>" >

							<?php if (has_post_thumbnail()) {
								?>
								<div class="text-center">
									<?php  the_post_thumbnail('medium', array('class' => 'feat'));
									 	?>
								</div>
								<?php
							}?>
							<h2><?php the_title(); ?></h2></a>
							<label for=""><?php the_time() ?> | by <?php the_author() ?></label>

							<p>
								<?php the_excerpt(); ?>
							</p>
							</div>

						<?php endwhile; endif; ?>
						</div>



</div>

<script>
	jQuery(document).ready(function($){
    	$('#wrapper').masonry({
      	  itemSelector: '.box'


    	  });
  	});
</script>

<?php get_footer(); ?>
