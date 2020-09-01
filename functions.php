<?php

/**
 * 24h News functions and definitions
 *
 * @link https://anjani.co.id/wordpress/themes/24h-news
 *
 * @package 24h_news
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


if (!function_exists('duaempath_news_setup')) {
	function duaempath_news_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('twentynineteen', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'twentynineteen'),
				'footer' => __('Footer Menu', 'twentynineteen'),
				'social' => __('Social Links Menu', 'twentynineteen'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				// 'height'      => 190,
				// 'width'       => 190,
				// 'flex-width'  => false,
				// 'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
	}
}
add_action('after_setup_theme', 'duaempath_news_setup');

/**
 * Enqueue scripts and styles.
 */
function duaempath_news_frontend_scripts()
{
	wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('style-template', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('color', get_template_directory_uri() . '/assets/css/colors.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
	wp_enqueue_style('weather-icons', get_template_directory_uri() . '/assets/css/weather-icons.min.css');
	wp_enqueue_style('duaempath-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', false, '3.1.1', true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), false, true);
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), false, true);
	wp_enqueue_script('function', get_template_directory_uri() . '/assets/js/functions.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'duaempath_news_frontend_scripts');

/**
 * @param \WP_Post $item
 */
function duaempath_nav_menu_add_dropdown_toggle_class($atts, $item, $args, $depth)
{
	if (in_array('dropdown', $item->classes) && property_exists($args, 'submenu_toggle_class') ) {
		$atts['class'] = $args->submenu_toggle_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'duaempath_nav_menu_add_dropdown_toggle_class', 10, 4);
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Nav Menun Walker template.
 */
require get_template_directory() . '/classes/class-duaempath-walker-nav-menu.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/init.php';

