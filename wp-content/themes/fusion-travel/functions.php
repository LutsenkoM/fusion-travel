<?php

function load_styles() {
    wp_enqueue_style('style.css', get_stylesheet_uri() );
    wp_enqueue_style(
        'font-awesome.min.css', get_stylesheet_directory_uri() . '/style/stylesheets/lib/font-awesome/css/font-awesome.min.css'
    );

    wp_enqueue_script('jquery-3.2.1.min.js', get_template_directory_uri() . '/js/lib/jquery-3.2.1.min.js');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/custom.js');
}

add_action ('wp_enqueue_scripts', 'load_styles');

//Custom post type
function post_types_init() {
    //Welcome posts
    $welcome = array(
        'label' => 'Welcome posts',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'welcome'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type('welcome', $welcome);
    //Welcome posts end
}

add_action('init', 'post_types_init');
//Custom post type end

function after_setup() {

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'header' => esc_html__( 'header', 'fusion-travel' ),
    ) );

    register_nav_menus( array(
        'footer' => esc_html__( 'footer', 'fusion-travel' ),
    ) );


}

add_action( 'after_setup_theme', 'after_setup' );

require get_template_directory() . '/inc/customizer.php';