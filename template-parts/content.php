<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage EpicSF
 * @since EpicSF 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="<?php echo implode(' ', get_post_class(basename(get_permalink()))); ?>">
  <header class="entry-header">
    <div class="row">
      <div class="col-md-10 col-md-offset-2 col-xs-12">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      </div>
    </div>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

</article><!-- #post-## -->
