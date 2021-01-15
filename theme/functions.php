<?php

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

if (!class_exists('Timber')) {

	add_action(
		'admin_notices',
		function () {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
		}
	);

	add_filter(
		'template_include',
		function ($template) {
			return dirname(get_stylesheet_directory()) . '/static/no-timber.html';
		}
	);
	return;
}

Timber::$dirname = array('../views');

function remove_wp_css()
{
	wp_deregister_style('wp-block-library');
	wp_deregister_script('jquery');
	wp_deregister_script('devicepx');
	wp_deregister_style('dashicons');
}

Timber::$autoescape = false;
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}
class VideoGridSite extends Timber\Site
{
	/** Add timber support. */
	public function __construct()
	{
		add_action('after_setup_theme', array($this, 'theme_supports'));
		add_filter('timber/context', array($this, 'add_to_context'));
		add_filter('timber/twig', array($this, 'add_to_twig'));
		add_action('init', array($this, 'register_post_types'));
		add_action('init', array($this, 'register_taxonomies'));
		add_action('wp_print_styles', 'remove_wp_css');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');
		parent::__construct();
	}
	/** This is where you can register custom post types. */
	public function register_post_types()
	{
	}
	/** This is where you can register custom taxonomies. */
	public function register_taxonomies()
	{
	}

	/** This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context($context)
	{
		$context['menu']  = new Timber\Menu();
		$context['site']  = $this;
		$context['options'] = get_fields('option');
		return $context;
	}

	public function theme_supports()
	{
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support('menus');
	}


	/** This is where you can add your own functions to twig.
	 *
	 * @param string $twig get extension.
	 */
	public function add_to_twig($twig)
	{
		$twig->addExtension(new Twig\Extension\StringLoaderExtension());
		return $twig;
	}
}

new VideoGridSite();
