<?php

function new_project(){

     // text domain
     load_theme_textdomain('newproject');

     // Title
     add_theme_support('title-tag');

     //
     add_theme_support('post-thumbnails');

     // register nav menu
     register_nav_menus(array(
          'main-menu' => __('Main Menu', 'newproject'),
          'footer-menu' => __('Footer Menu', 'newproject'),
     ));
}

add_action('after_setup_theme','new_project');

function theme_scrpts(){
     wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
     wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );

     // Main Stylesheet CSS
     wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'theme_scrpts');

// register sidebar

function theme_widget(){

     register_sidebar(array(
          'name' => __('Main Sidebar', 'newproject'),
          'id' => __('sidebar-1'),
          'description' => __('Our sidebar description', 'newproject'),
          'before-widget' => '<div class="blog-sidebar">',
          'after-widget' => '</div>',
          'before-title' => '<h4>',
          'after-title' => '</h4>'

     )
);
}

add_action('widgets_init', 'theme_widget');

?>