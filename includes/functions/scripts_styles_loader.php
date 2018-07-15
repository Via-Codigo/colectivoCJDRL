<?php

// Add scripts and styles
// feel free to uncomment those you won't use.
function oniros_scripts(){

		/* loading specific scripts asynchronusly or deffered */
		function add_defer_attribute($tag, $handle) {
		   // add script handles to the array below
		   $scripts_to_defer = array();// pass in the script's handlers as arguments
		   
		   foreach($scripts_to_defer as $defer_script) {
		      if ($defer_script === $handle) {
		         return str_replace(' src', ' defer="defer" src', $tag);
		      }
		   }
		   return $tag;
		}
		// Uncomment next line to add deffered scripts to the enqueing
		//add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

		function add_async_attribute($tag, $handle) {
	   // add script handles to the array below
	   $scripts_to_async = array();// pass in the script's handlers as arguments
	   
	   foreach($scripts_to_async as $async_script) {
		      if ($async_script === $handle) {
		         return str_replace(' src', ' async="async" src', $tag);
		      }
		   }
		   return $tag;
		}
		// Uncomment next line to add deffered scripts to the enqueing
		// add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
	/*
	We assume your development server has WP_DEBUG turned on and your production enviroment has it turned off
	*/

	// WP required stylesheet
	wp_enqueue_style('base', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/source/css/bootstrap.css' );
	wp_enqueue_style('main', get_stylesheet_directory_uri().'/source/css/main.css');	
	wp_enqueue_style('color', get_stylesheet_directory_uri().'/source/css/color.css');	


	
	if( !WP_DEBUG ) {
		
		// Our own stylesheet (minimized)
		//wp_enqueue_style('main', get_stylesheet_directory_uri().'/source/css/main.css');	

	} else{
		
		// Our own stylesheet 
		//wp_enqueue_style('main', get_stylesheet_directory_uri().'/source/css/main.css');	
	}	
	// Own scripts
	// main runs on every page load, if you need a specific script to run on a specific page, just create a conditional here
	// wp_enqueue_script('jquery',get_stylesheet_directory_uri().'/source/js/jquery-2.2.4.min.js', array("jquery"), null, true);
	wp_enqueue_script('bootstrap',get_stylesheet_directory_uri().'/source/js/bootstrap.js', array("jquery"), null, true);
	wp_enqueue_script('JQplugins',get_stylesheet_directory_uri().'/source/js/plugins.js', array("jquery"), null, true);
	wp_enqueue_script('active',get_stylesheet_directory_uri().'/source/js/active.js', array("jquery", "JQplugins"), null, true);
	wp_enqueue_script('main',get_stylesheet_directory_uri().'/source/js/main.js', array("jquery"), null, true);
	
	// Add other scripts here
	if(is_post_type_archive( $post_types = 'iniciativa' )){
		wp_enqueue_style('iniciativas', get_stylesheet_directory_uri().'/source/css/iniciativas.css');	
		wp_enqueue_script('iniciativas',get_stylesheet_directory_uri().'/source/js/iniciativas.js', array("jquery"), null, true);
	}
	if(is_singular("iniciativa")){
		
		wp_enqueue_style('proyectosingular', get_stylesheet_directory_uri().'/source/css/proyectoSingular.css');
	}
	if(is_post_type_archive("institucion")){
		wp_enqueue_style('instituciones', get_stylesheet_directory_uri().'/source/css/instituciones.css');	
		wp_enqueue_script('instituciones',get_stylesheet_directory_uri().'/source/js/instituciones.js', array("jquery"), null, true);
	}
	if(is_404()){
		wp_enqueue_style('404', get_stylesheet_directory_uri().'/source/css/404.css');
	}
}
add_action( 'wp_enqueue_scripts', 'oniros_scripts');



// REMOVE WP EMOJI http://www.denisbouquet.com/remove-wordpress-emoji-code/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove JQuery MIgrate and JQuery if not admin
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
     	// removes Jquery (this disables jquery-migrate)
        $scripts->remove( 'jquery');
        // Adds just jQuery Core so migrate is excluded
        // this is commented by default since we think jQuery shouldn't be used unless necesary
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}

// Remove WP Embedd
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );