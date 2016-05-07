<?php get_header();

?>
<div id='cssmenu'>
	<?php wp_nav_menu(); ?>
</div>
<?php

?>

		<?php if (have_posts()): while(have_posts()) : the_post(); ?>


			<div class="container-fluid" id="conter">
				<div class="row">
					<div class="col-md-8">
						<div class="wrapper">
							<div class="text-center">
								<div class="thumbnail">
									<?php the_post_thumbnail('medium'); ?>
								</div>
							</div>
							<div class="posts">
								<h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
								<label><?php the_time()?> | by <?php the_author(); ?></label>
								<p>
									<?php the_excerpt(); ?>
								</p>
								<a href="<?php the_permalink()?>" class="view-more">View more</a>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
		<?php endif; ?>





<?php get_footer(); ?>
