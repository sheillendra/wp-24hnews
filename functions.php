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


const DEH_TEXT_DOMAIN = 'default';

include_once(ABSPATH . 'wp-admin/includes/image.php');

if (!function_exists('duaempath_news_setup')) {
	function duaempath_news_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain(DEH_TEXT_DOMAIN, get_template_directory() . '/languages');

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
		add_image_size('duaempath-featured-image-thumbnail', 370, 185, true);
		add_image_size('duaempath-featured-image-detail', 800, 400, true);
		add_image_size('duaempath-featured-image-news_slider_1', 574, 443, true);
		add_image_size('duaempath-featured-image-news_slider_2', 274, 442, true);
		add_image_size('duaempath-featured-image-news_slider_3', 374, 215, true);

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
	if (in_array('dropdown', $item->classes) && property_exists($args, 'submenu_toggle_class')) {
		$atts['class'] = $args->submenu_toggle_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'duaempath_nav_menu_add_dropdown_toggle_class', 10, 4);

require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/inc/svg-icons.php';
require get_template_directory() . '/classes/class-duaempath-svg-icons.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Nav Menun Walker template.
 */
require get_template_directory() . '/classes/class-duaempath-walker-nav-menu.php';

// Custom comment walker.
require get_template_directory() . '/classes/class-duaempath-walker-comment.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/init.php';


function auto_featured_image()
{
	global $post;
	$attached_image = get_children("post_parent=$post->ID&amp;post_type=attachment&amp;post_mime_type=image&amp;numberposts=1");
	if ($attached_image) {
		foreach ($attached_image as $attachment_id => $attachment) {
			if (wp_get_attachment_image($attachment_id, 'duaempath-featured-image-detail') === '') {
				//echo $attachment_id;
				set_post_thumbnail($post->ID, $attachment_id);
			}
		}
	} else {
		$matches = array();
		$output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
		if (isset($matches[1]) && isset($matches[1][0])) {
			$firstImg = $matches[1][0];
			$oldImgPath = str_replace('https://tribratanews.gorontalo.polri.go.id/', '../', $firstImg);
			if (file_exists($oldImgPath)) {
				$uploaddir = wp_upload_dir();
				$pathinfo = pathinfo($firstImg);
				$uploadfile = $uploaddir['path'] . '/' . $pathinfo['basename'];
				copy($oldImgPath, $uploadfile);

				$wp_filetype = wp_check_filetype($pathinfo['basename'], null);
				$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title' => $pathinfo['filename'],
					'post_content' => '',
					'post_status' => 'inherit',
				);

				$attach_id = wp_insert_attachment($attachment, $uploadfile);

				$imagenew = get_post($attach_id);
				$fullsizepath = get_attached_file($imagenew->ID);
				$attach_data = wp_generate_attachment_metadata($attach_id, $fullsizepath); // wp_generate_attachment_metadata($attach_id, $fullsizepath);
				wp_update_attachment_metadata($attach_id, $attach_data);
				set_post_thumbnail($post->ID, $attach_id);
				$post->post_content = str_replace($matches[0][0], '', $post->post_content);
				wp_update_post($post);
			}
		}
	}
}

// Use it temporary to generate all featured images
add_action('the_post', 'auto_featured_image');
// Used for new posts
add_action('save_post', 'auto_featured_image');
add_action('draft_to_publish', 'auto_featured_image');
add_action('new_to_publish', 'auto_featured_image');
add_action('pending_to_publish', 'auto_featured_image');
add_action('future_to_publish', 'auto_featured_image');


function duaempath_comment_reply_link($link, $args = array(), $comment = null, $post = null)
{
	return '<i style="font-size:12px">' . $link . '</i>';
}
add_filter('comment_reply_link', 'duaempath_comment_reply_link');
