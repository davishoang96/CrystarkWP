<?php get_header(); ?>

<div class="jumbotron" data-stellar-background-ratio="0.2">
	<div class="center-title">
		<h1>RESEARCH 2.4.5 "BETA VERSION"</h1>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="wrapper">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>




	<?php get_footer(); ?>
