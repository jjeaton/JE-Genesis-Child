<?php
/**
 * Functions
 *
 * @package      JE_Genesis_Child
 * @since        1.0.0
 * @author       Josh Eaton <josh@josheaton.org>
 * @copyright    Copyright (c) 2013, Josh Eaton
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

/**
 * Theme Setup
 * @since 1.0.0
 *
 * This setup function attaches all of the site-wide functions
 * to the correct hooks and filters. All the functions themselves
 * are defined below this setup function.
 *
 */
add_action('genesis_setup','child_theme_setup', 15);
function child_theme_setup() {
  // Start the engine
  require_once( get_template_directory() . '/lib/init.php' );

  // Child theme (do not remove)
  define( 'CHILD_THEME_NAME', 'JE Genesis Child Theme' );
  define( 'CHILD_THEME_URL', 'http://www.josheaton.org/' );
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );

  // * Backend *

  // * Frontend *

  // Add Viewport meta tag for mobile browsers
  add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
  function sample_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
  }

  // Add support for custom background
  add_theme_support( 'custom-background' );

  // Add support for custom header
  add_theme_support( 'genesis-custom-header', array(
    'width' => 1152,
    'height' => 120
  ) );

  // Add support for 3-column footer widgets
  add_theme_support( 'genesis-footer-widgets', 3 );
}

