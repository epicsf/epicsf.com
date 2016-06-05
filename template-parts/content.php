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

  <div class="entry-content">
    <?php
      /* translators: %s: Name of current post */
      the_content( sprintf(
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'epic' ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'epic' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'epic' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php epic_entry_meta(); ?>
    <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Name of current post */
          __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'epic' ),
          get_the_title()
        ),
        '<span class="edit-link">',
        '</span>'
      );
    ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
