<?php

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu Location', 'my_theme' ) );
  //register_nav_menu( 'primary', __( 'Secondary Menu', 'my_theme' ) );
};

add_action( 'after_setup_theme', 'register_my_menu' );

?>