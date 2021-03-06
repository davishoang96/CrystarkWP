<?php get_header(); ?>

<div class="jumbotron animated fadeInDown">
	<div class="center-title">
		<h1 id="site-name"><?php bloginfo('name' ) ?></h1>
		<h4 id="site-name">A Theme by Hoang Viet</h4>
		<a href="" id="btn-link"  class="btn btn-success" role="button">Sign Up</a>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div id="wrapper">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
