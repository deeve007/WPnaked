<?php
/**
 * NakedTheme functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package		WordPress
 * @subpackage	NakedTheme
 * @since		NakedTheme 1.0
 */
 

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add basic Wordpress features support to theme
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');
register_nav_menus(array('primary' => 'Primary Navigation'));

/* Remove ugly Wordpress toolbar from frontend */
add_filter('show_admin_bar', '__return_false');

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/
function load_the_scripts()  { 
	
	// load html5shiv for IE only (is there Wordpress conditional for ie9 or less?)
	global $is_IE;
	if ( $is_IE ) {
		wp_enqueue_script( 'load-html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array( 'jquery' ),null,true );
	}
	
	// load fluidvids
	wp_enqueue_script( 'load-fitvids', get_template_directory_uri() . '/js/fluidvids.min.js','',null,true );
	
	// load theme scripts & wordpress jquery
	wp_enqueue_script( 'load-themejs', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ),null,true );
	
	// load CSS reset
	wp_enqueue_style( 'load-reset', 'http://yui.yahooapis.com/3.13.0/build/cssreset/cssreset-min.css','', 'screen' );
	
	// load theme stylesheet
	wp_enqueue_style( 'load-style', get_template_directory_uri() . '/style.css','', 'screen' );
	
	// add support for child themes without needing to manually import parent theme style.css via @import
	// add after parent theme css so it can override settings if required
	if ( get_stylesheet_directory_uri() != get_template_directory_uri() ) {
		wp_register_style( 'childcss', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
		wp_enqueue_style( 'childcss' );
	}
  
}
if (!is_admin()) add_action("wp_enqueue_scripts", "load_the_scripts");

/*-----------------------------------------------------------------------------------*/
/* Register sidebar(s)
/*-----------------------------------------------------------------------------------*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar 1',
		'before_widget' => '<section class="widget %2$s %1$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}