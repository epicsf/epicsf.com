<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Epic
 * @since Epic 1.0
 */
?>

    </div><!-- .site-content -->

    <footer id="footer" class="site-footer" role="contentinfo">
      <div class="container-fluid">
        <div class="row">
        <?php if ( has_nav_menu( 'footer-ministries' ) ) : ?>
          <div class="col-md-3">
            <strong>Ministries</strong>
            <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Footer Ministries Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-ministries',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </nav>
          </div>
        <?php endif; ?>
      <?php if ( has_nav_menu( 'footer-get-connected' ) ) : ?>
        <div class="col-md-3">
          <strong>Get Connected</strong>
          <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Footer Get Connected Menu', 'epic' ); ?>">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer-get-connected',
                'menu_class'     => 'nav navbar-nav',
               ) );
            ?>
          </nav>
        </div>
      <?php endif; ?>
      <?php if ( has_nav_menu( 'footer-media' ) ) : ?>
        <div class="col-md-3">
          <strong>Media</strong>
          <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Footer Media Menu', 'epic' ); ?>">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer-media',
                'menu_class'     => 'nav navbar-nav',
               ) );
            ?>
          </nav>
        </div>
      <?php endif; ?>
      <?php if ( has_nav_menu( 'footer-about-us' ) ) : ?>
        <div class="col-md-3">
          <strong>About Us</strong>
          <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Footer About Us Menu', 'epic' ); ?>">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer-about-us',
                'menu_class'     => 'nav navbar-nav',
               ) );
            ?>
          </nav>
        </div>
      <?php endif; ?>
        </div> <!-- .row -->
      </div>
      <div class="site-info">
      </div><!-- .site-info -->
    </footer><!-- .site-footer -->
  </div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
</body>
</html>
