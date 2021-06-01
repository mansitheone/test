<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	$parenthandle = 'twentytwentyone-style'; // This is 'twentytwentyone-style' for the Twenty Twenty-one theme.
	$theme = wp_get_theme();
	wp_enqueue_style($parenthandle, get_template_directory_uri() . '/style.css',  array());
	wp_enqueue_style('child-style', get_stylesheet_uri(), array($parenthandle));
}