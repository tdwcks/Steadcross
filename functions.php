<?php
// 4D 69 6C 6E  4C 74 64
// =================================================================
// 		Miln Ltd
// 			Digital Experiences
// 		Wordpress Functions
// =================================================================


// Hide the admin bar
add_filter('show_admin_bar', '__return_false');

// Enqueue Scripts Like a king/Queen 
function wpb_adding_scripts() {
wp_register_script('swiper', get_template_directory_uri() . '/js/plugins/swiper.js', array('jquery'),'', true);
wp_enqueue_script('swiper');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 



?>