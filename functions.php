<?php

/*
#
#   CREATE BAND POST TYPE
#   //This function creates a custom post type of band
*/

add_action( 'init', 'create_post_type' );
function create_post_type() 
  {
  	register_post_type( 'band',
  		array(
  			'labels' => array(
  				'name' => __( 'Band' ),
  				'singular_name' => __( 'Band' ),
  				'add_new' => __( 'Add Band' ),
	            'all_items' => __( 'All bands' ),
	            'add_new_item' => __( 'Add band' ),
	            'edit_item' => __( 'Edit band' ),
	            'new_item' => __( 'New band' ),
	            'view_item' => __( 'View band' ),
	            'search_items' => __( 'Search bands' ),
	            'not_found' => __( 'No bands found' ),
	            'not_found_in_trash' => __( 'No bands found in trash' ),
	            'parent_item_colon' => __( 'Parent band' )
	            //'menu_name' => default to 'name'
  			),
  		'public' => true,
  		'has_archive' => true,
  		'supports'=> array('thumbnail','title','editor', 'custom-fields', 'excerpt', 'revisions'),
  		'rewrite' => array('slug' => 'band'),
  		)
  	);
  }

/*
#
#   ADD CUSTOM JS FILES/LIBRARIES(STICKY.JS)
#   //This function adds custom javascript libraries and files
*/

function lowermedia_add_theme_js()  
  {  
      // Register and enque sticky.js the script like this for a theme:  
      // Sticky JS http://www.labs.anthonygarand.com/sticky
      wp_register_script( 'sticky', get_stylesheet_directory_uri() . '/js/sticky.js', array( 'jquery' ) );  
      wp_enqueue_script( 'sticky' );  
  }  
add_action( 'wp_enqueue_scripts', 'lowermedia_add_theme_js' ); 

/*
#
#   ADD CUSTOM CSS FILES (SASS)
#   //This function adds custom css and our compiled sass files (css)
*/

function lowermedia_add_theme_css()  
  {  
      // Register and enque the compiled sass stylesheet screen.css like this for a theme: 
      wp_register_style( 'normalize', get_stylesheet_directory_uri() . '/normalize.css', array(), '20120208', 'all' ); 
      wp_register_style( 'screen', get_stylesheet_directory_uri() . '/stylesheets/screen.css', array(), '20120208', 'all' );   
      wp_enqueue_style( 'normalize' );
      wp_enqueue_style( 'screen' );   
        
  }  
add_action( 'wp_enqueue_scripts', 'lowermedia_add_theme_css' );  


?>