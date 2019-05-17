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
  // wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
  wp_enqueue_style('style', get_theme_file_uri('/dist/css/main.min.css'));
  wp_enqueue_script('js', get_theme_file_uri('/dist/js/index.min.js'), NULL,  microtime(), true);
}

add_action('wp_enqueue_scripts', 'site_setup');




function widget_setup() {
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'about-us-sidebar',
      'class' => 'custom',
      'description' => 'Sidebar na stronie o nas',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>'

    )
  );
}

add_action('widgets_init', 'widget_setup');



add_theme_support('post-thumbnails');



add_image_size( 'post-thumbnail-size', 400, 250 );
add_image_size( 'employee', 150, 150 );
?>