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
  <header class="entry-header">
    <div class="row">
      <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <span class="sticky-post"><?php _e( 'Featured', 'epic' ); ?></span>
      <?php endif; ?>

      <div class="col-md-10 col-md-offset-2">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      </div>
    </div>
  </header><!-- .entry-header -->

  <?php epic_excerpt(); ?>

  <?php epic_post_thumbnail(); ?>

  <?php if ( is_home() ): ?>
  <?php else: ?>
  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->
  <? endif; ?>

</article><!-- #post-## -->
