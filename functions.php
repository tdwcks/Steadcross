<?php
// =================================================================
// 		Miln Ltd
// 			Digital Experiences
// 		Wordpress Functions
// =================================================================


// Hide the admin bar
add_filter('show_admin_bar', '__return_false');

// Enqueue Scripts Like a king/Queen 
function wpb_adding_scripts() {
wp_register_script('jquery', get_template_directory_uri() . '/js/global/lib/jquery.js', array('jquery'),'', true);
wp_register_script('swiper', get_template_directory_uri() . '/js/plugins/swiper.js', array('jquery'),'', false);
wp_register_script('global', get_template_directory_uri() . '/js/global.js', array('jquery'),'', true);
wp_enqueue_script('jquery');
wp_enqueue_script('swiper');
wp_enqueue_script('global');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

// Allows us to add pictures
add_theme_support( 'post-thumbnails' );

// Dynamic Menus 

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


?>