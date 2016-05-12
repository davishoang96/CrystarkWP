

<div class="box">
  <a href="<?php the_permalink() ?>" >

    <?php if (has_post_thumbnail()) {
      ?>
      <div class="text-center">
        <?php  the_post_thumbnail('medium', array('class' => 'feature-image'));
        ?>
      </div>
      <?php
    }?>
    <div class="post-meta ">
      <h2><?php the_title(); ?></h2></a>
      <label for=""><?php the_time() ?> | by <?php the_author() ?></label>
      <p>
        <?php
        $content = get_the_content();
        echo wp_trim_words( $content , '30' );
        ?>
      </p>
    </div>
  </div>
