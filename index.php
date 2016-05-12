<?php get_header(); ?>

<div class="jumbotron" data-stellar-background-ratio="0.5">
	<div class="center-title">
		<h1>RESEARCH 2.3</h1>
	</div>
</div>
<div class="container-fluid">
	<div id="wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; endif; ?>
	</div>



	</div>

	<!-- <script>
	jQuery(document).ready(function($){
		$('#wrapper').masonry({
			itemSelector: '.box',
			gutterWidth: 0,
			isAnimated: true,
			isFitWidth: true, // I have spend 5 hours for this shit
			isRTL: true,
			isResizable: true,
			resize: true
		});
	});
	</script> -->

	<?php get_footer(); ?>
