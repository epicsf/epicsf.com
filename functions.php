<?php

if (!function_exists('epic_setup')) {
  function epic_setup() {
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    register_nav_menus(array(
      'primary' => 'Primary Nav Menu',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'status',
      'audio',
      'chat',
    ));

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
    add_editor_style(array(
      'css/editor-style.css',
      epic_fonts_url()
    ));
  }
}

add_action('after_setup_theme', 'epic_setup');

if (!function_exists('epic_fonts_url')) {
  /**
   * Register Google fonts for Epic.
   *
   * Create your own epic_fonts_url() function to override in a child theme.
   *
   * @since Epic 1.0
   *
   * @return string Google fonts URL for the theme.
   */
  function epic_fonts_url() {
    $fonts_url = '';
    $fonts = array(
      'Cardo',
      'Lato',
    );
    $weights = array(
      400,
      700,
    );

    $fonts_url = add_query_arg(array(
      'family' => urlencode(
        implode('|', $fonts)
      ) . ':' . implode(',', $weights),
    ), 'https://fonts.googleapis.com/css');

    return $fonts_url;
  }
}

/**
 * Enqueues scripts and styles.
 *
 * @since Epic 1.0
 */
function epic_scripts() {
  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style(
    'epic-fonts',
    epic_fonts_url(),
    array(),
    null
  );

  // Theme stylesheet.
  wp_enqueue_style(
    'epic-style',
    get_stylesheet_uri()
  );

}

add_action('wp_enqueue_scripts', 'epic_scripts');

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Epic 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function epic_body_classes($classes) {
  // Adds a class of custom-background-image to sites with a custom background image.
  if (get_background_image()) {
    $classes[] = 'custom-background-image';
  }

  // Adds a class of group-blog to sites with more than 1 published author.
  if (is_multi_author()) {
    $classes[] = 'group-blog';
  }

  // Adds a class of no-sidebar to sites without active sidebar.
  if (! is_active_sidebar('sidebar-1')) {
    $classes[] = 'no-sidebar';
  }

  // Adds a class of hfeed to non-singular pages.
  if (!is_singular()) {
    $classes[] = 'hfeed';
  }

  return $classes;
}

add_filter('body_class', 'epic_body_classes');

/**
 * Custom template tags for this theme.
 *
 * @since Epic 1.0
 */
require get_template_directory() . '/inc/template-tags.php';
