<?php
function mytheme_accets()
{
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap-grid.min.css');
	wp_enqueue_style('jquerycss', get_template_directory_uri() . '/assets/libs/jquery.fancybox.min.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/libs/animate.css"');

	wp_enqueue_style('minjquery', get_template_directory_uri() . '/assets/libs/jquery.fancybox.min.js');
	wp_enqueue_style('adaptivecss', get_template_directory_uri() . '/assets/css/adaptive.css');
	wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css');

}
	add_action('wp_enqueue_scripts', 'mytheme_accets');

	add_theme_support( 'post-thubnails');
	add_theme_support( 'post-thubnails', array('about-us'));
?>