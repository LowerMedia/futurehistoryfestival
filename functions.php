<?php

/*############################################################################################
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
  		/*'capability_type' => 'band',
		'capabilities' => array(
			'publish_posts' => 'publish_band',
			'edit_posts' => 'edit_band',
			'edit_others_posts' => 'edit_others_band',
			'delete_posts' => 'delete_band',
			'delete_others_posts' => 'delete_others_band',
			'read_private_posts' => 'read_private_band',
			'edit_post' => 'edit_band',
			'delete_post' => 'delete_band',
			'read_post' => 'read_band',
			'edit_page' => 'edit_band',
		),*/
  		'public' => true,
  		'has_archive' => true,
  		'supports'=> array('thumbnail','title','editor', 'custom-fields', 'excerpt', 'revisions'),
  		'rewrite' => array('slug' => 'band'),
  		)
  	);
  }
  
/*############################################################################################
#
#   ADD CUSTOM JS FILES/LIBRARIES(STICKY.JS)
#   //This function adds custom javascript libraries and files
*/

/*function lowermedia_role_set (){
	global $wp_roles;

	$role = get_role( 'editor' );
	$role->add_cap( 'publish_band' );
	$role->add_cap( 'edit_band' );
	$role->add_cap( 'edit_others_band' );
	$role->add_cap( 'delete_others_band' );
	$role->add_cap( 'read_private_band' );
	$role->add_cap( 'manage_band' );

}
add_action('init', 'lowermedia_role_set');*/

/*############################################################################################
#
#   ADD CUSTOM JS FILES/LIBRARIES(STICKY.JS)
#   //This function adds custom javascript libraries and files
*/

function lowermedia_add_theme_js()  
  {  
      // Register and enque sticky.js the script like this for a theme:  
      // Sticky JS http://www.labs.anthonygarand.com/sticky
      wp_register_script( 'sticky', get_stylesheet_directory_uri() . '/js/jquery.sticky.js', array( 'jquery' ), '1.0.0', true);
      wp_register_script( 'run-sticky', get_stylesheet_directory_uri() . '/js/run-sticky.js', array( 'sticky' ), '1.0.0', true);
      wp_enqueue_script( 'run-sticky' );

  }  
add_action( 'wp_enqueue_scripts', 'lowermedia_add_theme_js' ); 

/*############################################################################################
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


/*############################################################################################
#
#   REGISTER WDIGETS
#   //This function registers home page widget 4
*/
function lowermedia_responsive_widgets_init() {
    register_sidebar(array(
                'name' => __('Home Widget 4', 'responsive'),
                'description' => __('Area 9 - sidebar-home.php', 'responsive'),
                'id' => 'home-widget-4',
                'before_title' => '<div id="widget-title-four" class="widget-title-home"><h3>',
                'after_title' => '</h3></div>',
                'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                'after_widget' => '</div>'
            ));

    register_sidebar(array(
                'name' => __('Home Widget 5', 'responsive'),
                'description' => __('Area 9 - sidebar-home.php', 'responsive'),
                'id' => 'home-widget-5',
                'before_title' => '<div id="widget-title-four" class="widget-title-home"><h3>',
                'after_title' => '</h3></div>',
                'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                'after_widget' => '</div>'
            ));
}
add_action('widgets_init', 'lowermedia_responsive_widgets_init');

/*############################################################################################
#
#   ALLOW WIDGETS TO PROCESS SHORTCODES
#   
*/
add_filter('widget_text', 'do_shortcode');

?>