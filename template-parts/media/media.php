<article id="post-<?php the_ID(); ?>" class="media-detail <?php echo implode(' ', get_post_class(basename(get_permalink()))); ?>">
  <div class="entry-content container-fluid">
    <div class="row media-header">
      <div class="col-md-4 col-md-offset-1 col-xs-12">
        <div class="spacer-60 hidden-xs-down"></div>
        <div class="title-2"><?php the_subtitle() ?></div>
        <div class="spacer-40"></div>
        <?php the_title( '<h1 class="variation">', '</h1>' ); ?>
        <div class="divider-1"></div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div>
          <?php epic_post_thumbnail() ?>
        </div>
      </div>
    </div> <!-- row -->
    <div class="row">
      <div class="col-md-6 col-md-offset-5 col-xs-12">
        <div class="spacer-60"></div>
        <h2>Message Archive</h2>
        <div class="spacer-40"></div>
        <?php the_content() ?>
      </div>
    </div>

  </div><!-- .entry-content -->

</article><!-- #post-## -->
