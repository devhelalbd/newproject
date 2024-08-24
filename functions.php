<?php


function theme_scrpts(){
     wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', false );
     wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', false );
}

add_action('wp_enqueue_scripts', 'theme_scrpts');

?>