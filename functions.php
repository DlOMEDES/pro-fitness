<?php 

function fitness_files(){
  wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/style.css'));
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap');
  wp_enqueue_style('fitness-styles', '//use.fontawesome.com/releases/v5.11.2/css/all.css');
 
  wp_register_script( 'fitness-script', get_template_directory_uri() . '/assets/js/script.js', NULL, 1.0, true );
  wp_enqueue_script( 'fitness-script' );
}
add_action( 'wp_enqueue_scripts', 'fitness_files');


function fitness_features(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'fitness_features');


add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');
