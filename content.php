

<div class="box">


    <?php if (has_post_thumbnail()) {
      ?>
      <div class="text-center">
        <?php  the_post_thumbnail('medium', array('class' => 'feature-image'));
        ?>
      </div>
      <?php
    }?>
    <div class="title-link">
      <a id="shit" href="<?php the_permalink() ?>" ><h2><?php the_title(); ?></h2></a>
    </div>
    <div class="post-meta">

      <label for=""><?php the_time() ?> | by <?php the_author(); ?> </label>
      <h5 class="post-comment">
        <label for="">Comments : <?php $commentscount = get_comments_number(); echo $commentscount; ?></label>
      </h5>
      <p>
        <?php
        $content = get_the_content();
        echo wp_trim_words( $content , '30' );
        ?>
      </p>


    </label>

  </div>
</div>
