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

add_theme_support('post-thubnails');
add_theme_support('post-thubnails', array('about-us'));




add_filter( 'image_send_to_editor', 'wp_kama_image_send_to_editor_filter', 10, 9 );

/**
 * Function for `image_send_to_editor` filter-hook.
 * 
 * @param string       $html    The image HTML markup to send.
 * @param int          $id      The attachment ID.
 * @param string       $caption The image caption.
 * @param string       $title   The image title.
 * @param string       $align   The image alignment.
 * @param string       $url     The image source URL.
 * @param string|int[] $size    Requested image size. Can be any registered image size name, or an array of width and height values in pixels (in that order).
 * @param string       $alt     The image alternative, or alt, text.
 * @param string       $rel     The image rel attribute.
 *
 * @return string
 */
function wp_kama_image_send_to_editor_filter( $html, $id, $caption, $title, $align, $url, $size, $alt, $rel ){

	// filter...
	return $html;
}
?>