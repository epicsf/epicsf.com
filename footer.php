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
      <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'epic' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu_class'     => 'primary-menu',
             ) );
          ?>
        </nav><!-- .main-navigation -->
      <?php endif; ?>

      <?php if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'epic' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'social',
              'menu_class'     => 'social-links-menu',
              'depth'          => 1,
              'link_before'    => '<span class="screen-reader-text">',
              'link_after'     => '</span>',
            ) );
          ?>
        </nav><!-- .social-navigation -->
      <?php endif; ?>

      <div class="site-info">
        <?php
          /**
           * Fires before the twentysixteen footer text for footer customization.
           *
           * @since Twenty Sixteen 1.0
           */
          do_action( 'twentysixteen_credits' );
        ?>
      </div><!-- .site-info -->
    </footer><!-- .site-footer -->
  </div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
</body>
</html>
