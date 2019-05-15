<?php

function register_menus() {
  register_nav_menus(
    array(
      'main_nav' => __( 'Header navigation menu' ),
    )
  );
}
add_action( 'init', 'register_menus' );




function site_setup() {
  wp_enqueue_style('style', get_theme_file_uri('/dist/css/main.min.css'));
  wp_enqueue_script('js', get_theme_file_uri('/dist/js/index.min.js'), NULL,  microtime(), true);
}

add_action('wp_enqueue_scripts', 'site_setup');


?>