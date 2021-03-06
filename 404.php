<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage EpicSF
 * @since EpicSF 1.0
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <header class="page-header text-md-center">
          <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found', 'epic' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content text-md-center">
          <p><?php _e( 'It looks like nothing was found at this location.', 'epic' ); ?></p>
          <br><br><br>
          <em>For the Son of Man came to seek and to save the lost.</em>
          <br><em>Luke 19:10</em>

        </div><!-- .page-content -->
      </section><!-- .error-404 -->

    </main><!-- .site-main -->

  </div><!-- .content-area -->

<?php get_footer(); ?>
