<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'fhf_band',
		array(
			'labels' => array(
				'name' => __( 'Band' ),
				'singular_name' => __( 'Band' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

//function theme_styles()  
//{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
 // wp_register_style( 'screen', get_stylesheet_directory_uri() . '/stylesheets/screen.css', array(), '20120208', 'all' );

  //wp_register_style( 'sass-print', get_stylesheet_directory_uri() . '/stylesheets/print.css', array(), '20120208', 'all' );

  //wp_register_style( 'sass-ie', get_stylesheet_directory_uri() . '/stylesheets/ie.css', array(), '20120208', 'all' );

  // enqueing:
  //wp_enqueue_style( 'sass-ie' );
  //wp_enqueue_style( 'sass-print' );
  //wp_enqueue_style( 'screen' );
//}
//add_action('wp_enqueue_scripts', 'theme_styles');

//This function adds our compiles sass files (css) to the header
function lowermedia_add_theme_sass()  
{  
    // Register the style like this for a plugin:  
    //wp_register_style( 'screen', plugins_url( '/stylesheets/custom-style.css', __FILE__ ), array(), '20120208', 'all' );  
    // or  
    // Register the style like this for a theme:  
    //wp_register_style( 'screen', get_template_directory_uri() . '/stylesheets/screen.css', array(), '20120208', 'all' );  
    wp_register_style( 'screen', get_stylesheet_directory_uri() . '/stylesheets/screen.css', array(), '20120208', 'all' );  
  
    // For either a plugin or a theme, you can then enqueue the style:  
    wp_enqueue_style( 'screen' );  
}  
add_action( 'wp_enqueue_scripts', 'lowermedia_add_theme_sass' );  
?>