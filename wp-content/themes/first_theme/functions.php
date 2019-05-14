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

?>