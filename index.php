<?php

get_header(); ?>
		<div id="cssmenu">
			<?php wp_nav_menu(); ?>
		</div>
		<div class="jumbotron" data-stellar-background-ratio="0.5">

				<div class="center-title" >
					<h1>Welcome to my <?php bloginfo('name'); ?></h1>
					<p>
						Sign Up and Join Us
					</p>
					<a href="#" class="btn btn-default"></a>
				</div>

		</div>
		<div class="container">
			<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div><!-- /content -->
<?php get_footer(); ?>
