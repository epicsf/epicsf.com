<?php
/**
 * The template file for a single post (event / media page)
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Epic
 * @since Epic 1.0
 */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<h1>Heyy</h1>
  <?php if ( have_posts() ) : ?>

    <?php
    while ( have_posts() ) : the_post();
      if (epic_is_event()) {
        get_template_part( 'template-parts/events/event', get_post_format() );
      } else if (epic_is_media()) {
        get_template_part( 'template-parts/media/media', get_post_format() );
      }
    endwhile;

  endif;
  ?>
  </main>
</div>

<?php get_footer(); ?>
