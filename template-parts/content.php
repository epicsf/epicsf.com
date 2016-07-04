<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Epic
 * @since Epic 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="<?php echo implode(' ', get_post_class(basename(get_permalink()))); ?>">
  <?php if (!is_home()): ?>
  <header class="entry-header">
    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      </div>
    </div>
  </header><!-- .entry-header -->
  <?php endif; ?>

  <?php if ( is_home() ): ?>
  <div class="row">
    <div class="carousel">
      <?php epic_post_thumbnail() ?>
    </div>
  </div>

  <?php else: ?>
  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->
  <? endif; ?>

</article><!-- #post-## -->
