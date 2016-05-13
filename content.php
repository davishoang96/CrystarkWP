

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
      <hr>
      <label for="">
        <?php $comment_count = get_comment_count($post->ID);
        if ( comments_open() || $comment_count['approved'] > 0 ) : comments_number('0 comments','1 comment','% comments');
        if ( !comments_open() ) : ?> (comments are closed)<?php endif; ?>
      <?php endif; ?>
    </label>

  </div>
</div>
