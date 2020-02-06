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
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-11664989-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- Global site tag (gtag.js) - Google Ads: 1070758363 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1070758363"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-1070758363');
  </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <div class="site-inner">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'epic' ); ?></a>

    <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
      <div id="site-header-menu" class="site-header-menu">

        <a id="churchonline_counter" class="body4" href="http://live.epicsf.com">
          <span class="live link">Watch Live</span>
          <span class="msg">Watch live in</span>
          <ul class="countdown clearfix">
            <li><span class="days"></span> <span class="unit">days</span></li>
            <li><span class="hours"></span> <span class="unit">hrs</span></li>
            <li><span class="minutes"></span> <span class="unit">mins</span></li>
          </ul>
        </a>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <nav id="site-navigation" class="navbar navbar-full navbar-light" aria-label="<?php esc_attr_e( 'Primary Menu', 'epic' ); ?>">
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
                'walker'         => new WP_Bootstrap_Navwalker(),
                'depth'          => 2,
               ));
            ?>
            </div>
          </nav><!-- .navbar -->
        <?php endif; ?>
      </div><!-- .site-header-menu -->
    <?php endif; ?>
  </div><!-- .site-header-main -->

    <div id="content" class="site-content">
