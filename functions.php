<?php

function theme_files() {
  // load javascript
  wp_enqueue_script('custom-script', get_theme_file_uri('/dist/js/app.js'),NULL,1.0, true);
  // load css
  wp_enqueue_style('custom-style', get_theme_file_uri('/dist/css/styles.css'));
}

add_action( 'wp_enqueue_scripts', 'theme_files' );

// theme supported features
function theme_features() {
  // adds top title for each page
  add_theme_support('title-tag');
  // adds featured images
  add_theme_support('post-thumbnails');
  add_post_type_support( 'slider', 'thumbnail' );
}

add_action('after_setup_theme', 'theme_features');


// theme image path
if( !defined(IMG_PATH)){
  define( 'IMG_PATH', get_stylesheet_directory_uri() . '/dist/images' );
}

