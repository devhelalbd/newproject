<?php

function new_project(){

     // text domain
     load_theme_textdomain('newproject');

     // Title
     add_theme_support('title-tag');

     
     add_theme_support('post-thumbnails',array('post','events'));

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

function wtd_cpt(){

     $labels = array(
		'name'                  => _x( 'Events', 'Post type general name', 'newproject' ),
		'singular_name'         => _x( 'Event', 'Post type singular name', 'newproject' ),
		'menu_name'             => _x( 'Events', 'Admin Menu text', 'newproject' ),
		'name_admin_bar'        => _x( 'Event', 'Add New on Toolbar', 'newproject' ),
		'add_new'               => __( 'Add New Event', 'newproject' ),
		'add_new_item'          => __( 'Add New Event', 'newproject' ),
		'new_item'              => __( 'New Event', 'newproject' ),
		'edit_item'             => __( 'Edit Event', 'newproject' ),
		'view_item'             => __( 'View Event', 'newproject' ),
		'all_items'             => __( 'All Events', 'newproject' ),
		'search_items'          => __( 'Search Events', 'newproject' ),
		'parent_item_colon'     => __( 'Parent Events:', 'newproject' ),
		'not_found'             => __( 'No Events found.', 'newproject' ),
		'not_found_in_trash'    => __( 'No Events found in Trash.', 'newproject' ),
		'featured_image'        => _x( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'newproject' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'newproject' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'newproject' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'newproject' ),
		'archives'              => _x( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'newproject' ),
		'insert_into_item'      => _x( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'newproject' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'newproject' ),
		'filter_items_list'     => _x( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'newproject' ),
		'items_list_navigation' => _x( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'newproject' ),
		'items_list'            => _x( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'newproject' ),
	);


     $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'events' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
          'show_in_rest'       => false
	);
     
     register_post_type('events', $args);
}

add_action('init', 'wtd_cpt');
/*
 * Add columns to events post list
 */
function add_acf_columns ( $columns ) {
	return array_merge ( $columns, array ( 
	  'location' => __ ( 'Event Location' ),
	  'event_date' => __ ( 'Event Date' )
	) );
   }
   add_filter ( 'manage_events_posts_columns', 'add_acf_columns' );

 /*
 * Add columns to events post list
 */
   function events_custom_column ( $column, $post_id ) {
	switch ( $column ) {
	  case 'location':
	    echo get_post_meta ( $post_id, 'location', true );
	    break;
	  case 'event_date':
	    echo get_post_meta ( $post_id, 'event_date', true );
	    break;
	}
   }
   add_action ( 'manage_events_posts_custom_column', 'events_custom_column', 10, 2 );

   /*
 	* Add sortable columns
   */
  function my_column_register_sortable($columns){
	$columns['location'] = 'loaction';
	$columns['event_date'] = 'event_date';

	return $columns;
  }

  add_filter('manage_events_sortable_columns', 'my_column_register_sortable');




?>