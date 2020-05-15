<?php
  function load_style_js() {
    // load javascript
    wp_enqueue_script('custom-script', get_theme_file_uri('/dist/js/app.js'),NULL,1.0, true);
    // load css
    wp_enqueue_style('custom-style', get_theme_file_uri('/dist/css/styles.css'));
  }
  
  add_action( 'wp_enqueue_scripts', 'load_style_js' );

  // theme image path
  if( !defined(IMG_PATH)){
    define( 'IMG_PATH', get_stylesheet_directory_uri() . '/dist/images' );
  }

  //Function to add Meta Tags in Header without Plugin
  // function add_meta_tags() {
  //   echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
  //   echo '<meta charset="UTF-8" />';

  //   echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
  //   echo '<meta http-equiv="X-UA-Compatible" content="ie=edge" />';
    
  // }
  // add_action('wp_head', 'add_meta_tags');

?>
