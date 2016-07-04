<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

      <?php if ( is_home() ) : ?>
        <header class="home-header"></header>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="variation">Featured</h1>
            <p>Check out the latest message and see the upcoming events at our church.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-11 col-md-offset-1">
            <div class="carousel slide" id="carousel" data-ride="carousel">
              <div class="carousel-inner">
              <?php
                $all_posts = epic_get_events();
                $i = 0;
                $posts = array_slice($all_posts, $i, 3);
                while(count($posts)): ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : 'next'; ?>">
                  <div class="row">
                <?php foreach($posts as $post): ?>
                  <div class="col-md-4">
                    <?php epic_post_thumbnail() ?>
                  </div>
                <?php endforeach; ?>
                  </div> <!-- row -->
                </div> <!-- item -->
                <?php
                  $i+= 3;
                  $posts = array_slice($all_posts, $i, 3);
                endwhile;
                ?>
              </div> <!-- inner -->
            </div> <!-- carousel.slide -->
          </div> <!-- col -->
        </div> <!-- row -->
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="carousel-controls text-md-right">
              <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div> <!-- row -->
        <div class="spacer-80"></div>
      <?php endif; ?>

      <?php
      // Start the loop.
      while ( !is_home() && have_posts() ) : the_post();
        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

      // End the loop.
      endwhile;

    endif;
    ?>

    <?php
      if ( is_home() ) {
        $page = get_page_by_title('Home');
        if ( $page ) {
          echo $page->post_content;
        }
      } else {
        $page = the_title(null, null, false);
        if ( strtolower( $page ) === 'events' ) {
          $posts = epic_get_events();

          if (count($posts) > 0) {
            $post = $posts[0];
            include( locate_template('template-parts/events/main-event.php') );
          }

        ?>
        <div class="row event-snippets">
          <div class="col-md-offset-1 col-md-10">
            <div class="row">
        <?php
          foreach ( array_slice($posts, 1) as $post ) {
            include( locate_template('template-parts/events/event-snippet.php') );
          } ?>
            </div>
          </div>
        </div>
        <?php
      }
      }
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>
