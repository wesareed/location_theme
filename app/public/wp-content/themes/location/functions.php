<?php 

add_action( 'wp_enqueue_scripts', 'location_scripts' );
function location_scripts() {
    /* If using a child theme, auto-load the parent theme style. */
    if( is_child_theme() ) {
        wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    } 

    /*Always load active theme's style.css. */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

/**
 * Add a sidebar.
 */
function location_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'location' ),
        'id'            => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'location' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'location_widgets_init' );
