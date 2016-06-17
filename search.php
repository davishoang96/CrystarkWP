<?php get_header(); ?>

<div class="container-fluid" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-8">
			<div class="text-center">
				<h2>Search result for: <span id="the-search-query"><?php the_search_query() ?></span></h2>
			</div>
			<div id="wrapper" class="animated fadeInUp">
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
