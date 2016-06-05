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
        <nav class="navbar navbar-fixed-bottom" role="navigation">
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12">
        <?php if ( has_nav_menu( 'footer-about-us' ) ) : ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <strong>About Us</strong>
            <div aria-label="<?php esc_attr_e( 'Footer About Us Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-about-us',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'footer-media' ) ) : ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <strong>Media</strong>
            <div aria-label="<?php esc_attr_e( 'Footer Media Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-media',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'footer-get-connected' ) ) : ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <strong data-abbrev="Connect">Get Connected</strong>
            <div aria-label="<?php esc_attr_e( 'Footer Get Connected Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-get-connected',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'footer-ministries' ) ) : ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <strong>Ministries</strong>
            <div aria-label="<?php esc_attr_e( 'Footer Ministries Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-ministries',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        </div> <!-- .col-md-9 -->
        <div class="col-md-3 col-sm-3 col-xs-12 aside-content">
          <div class="row">
            <div class="col-md-5 col-xs-6">
              <a href=""><strong>Giving</strong></a>
            </div> <!-- .col-md-6 -->
            <div class="col-md-7 col-xs-6">
              <a href=""><strong>Contact</strong></a>
            </div> <!-- .col-md-6 -->
          </div> <!-- .row -->
          <div class="row social-links">
            <div class="col-md-2">
              <a href="https://www.facebook.com/epicsf"><i class="fa fa-lg fa-facebook"></i> <span class="sr-only">facebook</span></a>
            </div> <!-- .col-md-2 -->
            <div class="col-md-2">
              <a href="https://twitter.com/EpicChurchSF"><i class="fa fa-lg fa-twitter"></i> <span class="sr-only">twitter</span></a>
            </div> <!-- .col-md-2 -->
            <div class="col-md-2">
              <a href="https://www.instagram.com/epicchurchsf"><i class="fa fa-lg fa-instagram"></i> <span class="sr-only">instagram</span></a>
            </div> <!-- .col-md-2 -->
          </div> <!-- .row -->
          <div class="row">
            <div class="col-md-12 service-times">
              <p>
                Join us at <strong>9:30am</strong> or <strong>11:00am</strong>
                <br>
                <em>250 Stevenson Street, SF</em>
              </p>
            </div> <!-- .col-md-12 -->
          </div> <!-- .row -->
        </div> <!-- .col-md-3 -->
        </div> <!-- .row -->
        </nav>
      </div> <!-- .container-fluid -->
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
