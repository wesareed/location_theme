<?php 

function location_scripts() {
    wp_enqueue_style( ' main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'location_scripts' );