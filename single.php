
<?php get_header(); ?>

<?php if(have_posts() ) : the_post(); ?>

  <!-- Header posts image -->
  <?php if (has_post_thumbnail()) { ?>
    <div class="background-news animated fadeInDown" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
      <div class="title-news">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  <?php } else { ?>
    <div class="background-news" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/default_feature_image.png');">
      <div class="title-news">
        <h1><?php the_title() ?></h1>
      </div>
    </div>
  <?php }?>
  <!--  -->

  <!-- The content post -->
    <div class="container-fluid">
      <div class="col-md-8">

        <div class="letter animated fadeInLeft">
          <div id='post' class="content-post">
            <div class="text-center" id="single-title">
              <h1><?php the_title() ?></h1>
              <h4><?php the_time('F j, Y') ?> | by <?php the_author(); ?> </h4>
              <hr>
              <hr>
            </div>
            <p>
              <?php the_content() ?>
            </p>
            <hr>

          </div>
        </div>
        <div class="letter animated fadeInLeft">
          <label for="">Number of comment : <?php $commentscount = get_comments_number(); echo $commentscount; ?></label>
          <?php comments_template(); ?>
        </div>

      </div>
      <div class="col-md-4">
        <div class="letter animated fadeInRight" id="the-sidebar">

            <?php if(dynamic_sidebar('right_sidebar')) : else : endif; ?>
        </div>
      </div>
    </div>

  <!--  -->

  <?php
  else :
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="color: red">There aren't any post here</h1>
        </div>
      </div>
    </div>

  <?php endif; get_footer();   ?>
