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
  <?php if ( have_posts() ) : ?>

    <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/events/event', get_post_format() );
    endwhile;

  endif;
  ?>
  </main>
</div>

<?php get_footer(); ?>
