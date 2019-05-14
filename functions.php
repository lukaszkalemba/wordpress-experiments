<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'about' => __( 'O nas' ),
      'contact' => __( 'Kontakt' )
    )
  );
}
add_action( 'init', 'register_my_menus' );




function site_setup() {
  wp_enqueue_style('style', get_theme_file_uri('/dist/css/main.min.css'));
  wp_enqueue_script('js', get_theme_file_uri('/dist/js/index.min.js'), NULL,  microtime(), true);
}

add_action('wp_enqueue_scripts', 'site_setup');


?>