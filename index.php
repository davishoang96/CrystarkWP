<?php
/**
 * The main template file.
 * @package metro-creativex
 */
get_header(); ?>
		<div id="cssmenu">
			<?php wp_nav_menu(); ?>
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
