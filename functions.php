<?php

/**
 * 24h News functions and definitions
 *
 * @link https://anjani.co.id/wordpress/themes/24h-news
 *
 * @package 24h_news
 */

/**
 * Enqueue scripts and styles.
 */
function frontend_scripts()
{
	wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('style-template', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('color', get_template_directory_uri() . '/assets/css/colors.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
	wp_enqueue_style('weather-icons', get_template_directory_uri() . '/assets/css/weather-icons.min.css');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', false, '3.1.1', true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), false, true);
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), false, true);
	wp_enqueue_script('function', get_template_directory_uri() . '/assets/js/functions.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'frontend_scripts');
