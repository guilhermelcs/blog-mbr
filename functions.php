<?php
/**
 * Created by Guilherme Lucas.
 * User: root
 * Date: 03/04/19
 * Time: 14:24
 */

add_theme_support( 'post-thumbnails' );

//Carregando Scripts
add_action('wp_enqueue_scripts', 'wpdocs_scripts_method');
/*
 * Enqueue a script with the correct path.
 */
function wpdocs_scripts_method() {
	wp_enqueue_script('popper', get_template_directory_uri() .'/assets/includes/bootstrap-4.3.1/js/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/includes/bootstrap-4.3.1/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('theme', get_template_directory_uri() .'/assets/js/theme.js', array('jquery'), null, true);
	//Carregando estilos
	wp_enqueue_style('bootstrap_style', get_template_directory_uri() .'/assets/includes/bootstrap-4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,700,700i,900,900i');
	wp_enqueue_style('fontwasome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');
};

//Adicionando menu
function wpb_custom_new_menu() {	
	register_nav_menu('header_menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

//Adicionando Logo
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'width'       => 50,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// Numbered Pagination
if ( ! function_exists( 'post_pagination' ) ) :
	function post_pagination() {
	  global $wp_query;
	  $pager = 999999999; // need an unlikely integer
  
		 echo paginate_links( array(
			  'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
			  'format' => '?paged=%#%',
			  'current' => max( 1, get_query_var('paged') ),
			  'total' => $wp_query->max_num_pages
		 ) );
	}
 endif;