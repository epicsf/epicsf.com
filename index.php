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
 * @subpackage EpicSF
 * @since EpicSF 1.0
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() ) : ?>
        <header class="home-header"></header>
        <div class="container-fluid">
          <div class="row home-featured">
              <?php
                $featured = epic_get_featured_post();
                if ( $featured ) { ?>
            <div class="col-md-10 col-md-offset-2 col-xs-12">
              <h1 class="variation"><?php echo get_the_title($featured); ?></h1>
              <div class="body2"><?php get_the_subtitle($featured) ?></div>
              <div class="spacer-30"></div>
            </div>
            <div class="col-md-5 col-md-offset-2 col-xs-12">
              <?php echo $featured->post_content; ?>
            </div>
              <?php } ?>
            <div class="col-md-4 featured-messages col-xs-12">
              <div class="spacer-30 hidden-sm-up"></div>
              <?php
                $featured_messages = epic_get_featured_messages_post();
                if ( $featured_messages ) { ?>
                <?php echo $featured_messages->post_content; ?>
                <?php } ?>
            </div>
          </div> <!-- .home-featured -->
          <div class="row hidden-xs-down">
            <div class="col-md-11 col-md-offset-1 col-xs-12">
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
                    <div class="col-md-4 col-xs-12">
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
          <?php if (count($all_posts) > 3): ?>
          <div class="row hidden-xs-down">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
              <div class="carousel-controls text-md-right text-xs-right">
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
          <?php endif; ?>
          <div class="row hidden-sm-up">
            <div class="col-xs-12">
              <div class="carousel slide" id="carousel-mobile" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                  $all_posts = epic_get_events();
                  $i = 0; ?>
                  <?php foreach($all_posts as $post): ?>
                  <div class="carousel-item <?php echo $i === 0 ? 'active' : 'next'; ?>">
                    <div class="row">
                    <div class="col-xs-12">
                      <?php epic_post_thumbnail() ?>
                    </div>
                    </div> <!-- row -->
                  </div> <!-- item -->
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </div> <!-- inner -->
              </div> <!-- carousel.slide -->
            </div> <!-- col -->
          </div> <!-- row -->
          <div class="row hidden-sm-up">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
              <div class="carousel-controls text-md-right text-xs-right">
                <a class="left carousel-control" href="#carousel-mobile" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-mobile" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div> <!-- row -->
          <div class="spacer-80 hidden-sm-down"></div>
          <div class="spacer-60 hidden-sm-up"></div>
        </div>
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
        if ( $page ) { ?>
        <div class="container-fluid">
          <?php echo $page->post_content; ?>
        </div>
        <?php }
      }
      else {
        $page = strtolower( the_title(null, null, false) );
        if ( $page === 'events' ) {
          $posts = epic_get_events();

          if (count($posts) > 0) {
            $post = $posts[0];
            include( locate_template('template-parts/events/main-event.php') );
          }
          ?>
        <div class="container-fluid">
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
        </div>
        <?php
        } else if ( $page === 'media' ) {
          $posts = epic_get_media();

          if (count($posts) > 0) {
            $post = $posts[0];
            include( locate_template('template-parts/media/main-media.php') );
          }
          ?>
        <div class="container-fluid">
        <div class="row media-snippets">
          <div class="col-md-offset-1 col-md-10">
        <?php
          foreach ( array_chunk( array_slice($posts, 1), 3) as $row ) { ?>
            <div class="row">
            <?php foreach ($row as $post) {
            include( locate_template('template-parts/media/media-snippet.php') );
            } ?>
            </div>
        <?php } ?>
          </div>
        </div>
        </div>
        <?php
        } else if ( $page === 'stories' ) {
          $posts = epic_get_story_media();
        ?>
        <div class="container-fluid">
        <div class="row story-snippets">
          <div class="col-md-offset-1 col-md-10">
        <?php
          foreach ( array_chunk( $posts, 3) as $row ) { ?>
            <div class="row">
            <?php foreach ($row as $post) {
            include( locate_template('template-parts/stories/story-snippet.php') );
            } ?>
            </div>
        <?php } ?>
          </div>
        </div>
        </div>
        <?php
        } else if ( $page === 'baptisms' ) {
          $posts = epic_get_baptism_media();
        ?>
        <div class="container-fluid">
        <div class="row baptism-snippets">
          <div class="col-md-offset-1 col-md-10">
        <?php
          foreach ( array_chunk( $posts, 3) as $row ) { ?>
            <div class="row">
            <?php foreach ($row as $post) {
            include( locate_template('template-parts/stories/story-snippet.php') );
            } ?>
            </div>
        <?php } ?>
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
