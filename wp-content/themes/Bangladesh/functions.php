<?php


//Add Theme support

function bangladesh_themeSetup(){
    add_theme_support( 'title_tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'post-formats', array( 'aside','image','gallery','video','audio','link','quote','status' ) );

}

add_action( 'after_setup_theme', 'bangladesh_themeSetup' );


//Loding Script


function bangladesh_script(){
    wp_enqueue_style( 'my-theme', get_stylesheet_uri(), [], time(), 'all' );
    wp_enqueue_style( 'custome-css', get_template_directory_uri() . '/assets/custome.css', [], '1.0', 'all' );
    wp_enqueue_style( 'goole-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap' );
}

add_action( 'wp_enqueue_scripts', 'bangladesh_script' );


//register NavMenu

register_nav_menus([
    'main-menu' => __('Main Menu', 'Bangladesh'),
    'Footer-menu' => __('Footer Menu', 'Bangladesh'),
]);


//register widgets

function bangladesh_widgets_init() {
    register_sidebar([
            'name'=> __('Main Sidebar', 'Bangladesh'),
            'id'=> 'main-sidebar',
            'description'=> __('Add your Widget'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_widget' => '</h2>',

        ]);
}

add_action('widgets_init', 'bangladesh_widgets_init');