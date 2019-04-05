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
	//Carregando estilos
	wp_enqueue_style('bootstrap_style', get_template_directory_uri() .'/assets/includes/bootstrap-4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,700,700i,900,900i');
	wp_enqueue_style('fontwasome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');
}