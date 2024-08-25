<?php

function new_project(){

     load_theme_textdomain('newproject');

     register_nav_menus(array(
          'main-menu' => __('Main Menu', 'newproject'),
          'footer-menu' => __('Footer Menu', 'newproject'),
     ));
}

add_action('after_setup_theme','new_project');

function theme_scrpts(){
     wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
     wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
}

add_action('wp_enqueue_scripts', 'theme_scrpts');

?>