


<?php get_header() ?>
<div class="background-news" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
  <div class="title-news">
    <h1 class="animated infinite jello portfolio-title"><?php the_title(); ?></h1>
  </div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div id="wrapper">
				<!--Print Portfolio Posts Only-->
				<?php $portfolioPosts = new WP_Query('cat=5'); ?>

				<?php if ($portfolioPosts->have_posts()) : while ($portfolioPosts->have_posts()) : $portfolioPosts->the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>
