<?php

add_action('genesis_setup','child_theme_setup', 15);



function child_theme_setup() {

load_theme_textdomain( 'circlesurrogacy', get_template_directory() . '/languages' );
//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Add default posts and comments RSS feed links to <head>.
add_theme_support( 'automatic-feed-links' );

// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
         add_theme_support( 'post-thumbnails' );

// Register responsive menu script
         add_action( 'wp_enqueue_scripts', 'circlesurrogacy_enqueue_scripts' );

       }

/**
 * Enqueue responsive javascript
 * @todo Change 'prefix' to your theme's prefix
 */
function circlesurrogacy_enqueue_scripts() {

  wp_enqueue_script( 'circlesurrogacy-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );

}

/**
   * Footer
   *
   */
  function be_footer() {
    echo '<div class="left"><p>© Copyright ' . date('Y') . ' : All Rights Reserved</p></div>';
    echo '<div class="right">';
    wp_nav_menu( array( 'menu' => 'Footer' ) );
    echo '</div>';
  }
  ?>


