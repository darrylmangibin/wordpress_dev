<?php 

//setup

//includes
include ( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );

//hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');
add_action( 'after_setup_theme', 'ju_setup_theme' );

//shortcodes

 ?>