<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage EpicSF
 * @since EpicSF 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <div class="site-inner">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'epic' ); ?></a>

    <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
      <div id="site-header-menu" class="site-header-menu">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <nav id="site-navigation" class="navbar navbar-full navbar-light" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'epic' ); ?>">
            <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#epicCollapsingNavbar">
              &#9776;
            </button>
            <img src="/wp-content/uploads/2016/07/logo-mobile.png" alt="" class="hidden-sm-up navbar-brand pull-right">
            <div class="collapse navbar-toggleable-sm" id="epicCollapsingNavbar">
            <div>
              <a href="/" class="navbar-brand" id="epic-logo">
                <span class="screen-reader-text">Epic</span>
                <img src="/wp-content/uploads/2016/07/logo-desktop.png" alt="" class="hidden-sm-down">
              </a>
            </div>
            <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav navbar-nav pull-md-right',
               ));
            ?>
            </div>
          </nav><!-- .navbar -->
        <?php endif; ?>
      </div><!-- .site-header-menu -->
    <?php endif; ?>
  </div><!-- .site-header-main -->

    <div id="content" class="site-content">
