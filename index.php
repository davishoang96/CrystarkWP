<?php get_header(); ?>

<div class="jumbotron" data-stellar-background-ratio="0.5">
	<div class="center-title">
		<h1>RESEARCH 2.3</h1>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div id="wrapper">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>

		<div class="col-md-4">
			<div class="letter">
				<?php if(dynamic_sidebar('right_sidebar')) : else : endif; ?>
			</div>
		</div>
		
	</div>
</div>



	<?php get_footer(); ?>
