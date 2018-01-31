<div>
  <div class="embed-responsive embed-responsive-16by9">
    <?php
      $post = get_post();
      echo $post->post_content;
    ?>
  </div>
  <div class="spacer-20"></div>
  <div class="title-3"><?php the_title() ?></div>
  <div class="title-2"><?php the_subtitle() ?></div>
  <div class="spacer-20"></div>
</div>
