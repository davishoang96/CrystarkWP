
<?php
get_header();
?>

<?php if(have_posts() ) : the_post(); ?>

  <!-- Header posts image -->
  <div class="background-news" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
    <div class="title-news">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <!--  -->

  <!-- The content post -->
    <div class="container">
      <div class="col-md-8">

        <div class="letter">
          <div class="content-post">
            <h4><?php the_title() ?></h4>
            <p>
              <?php the_content() ?>
            </p>
            <hr>
            <label><?php the_time() ?> | by <?php the_author(); ?></label>
          </div>
        </div>

      </div>
      <div class="col-md-4">
        <div class="letter">
            <h4>Place some widgets here</h4>
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
