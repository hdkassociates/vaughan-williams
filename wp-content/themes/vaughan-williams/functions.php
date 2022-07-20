<?php
/**
 * vaughan_williams functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vaughan_williams
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vaughan_williams, use a find and replace
		 * to change 'vaughan_williams' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vaughan_williams', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_image_size( 'standard', 680, 462, true );
		add_image_size( 'standard@2x', 1320, 924, true );

		add_image_size( 'square@2x', 640, 640, true );

		add_image_size( 'gallery', 328, 9999 );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_post_type_support( 'page', 'excerpt' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'vaughan_williams' ),
				'footer-1' => esc_html__( 'Footer', 'vaughan_williams' ),
				'footer-2' => esc_html__( 'Footer Two', 'vaughan_williams' ),
				'footer-3' => esc_html__( 'Footer Three', 'vaughan_williams' ),
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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'vaughan_williams_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/* Editor Style Support */
		add_theme_support('wp-block-styles');
		add_theme_support('editor-styles');  
		add_editor_style('editor-styles.css');
		add_theme_support('align-wide');  

		/* Set Guttenburg Font Sizes */
		add_theme_support('editor-font-sizes', array(
			array(
				'name' => __('Small', 'vaughan_williams'),
				'size' => 14,
				'slug' => 'ft-14'
			),
			array(
				'name' => __('20PX', 'vaughan_williams'),
				'size' => 20,
				'slug' => 'ft-20'
			),
			array(
				'name' => __('30PX', 'vaughan_williams'),
				'size' => 30,
				'slug' => 'ft-20'
			),
			array(
				'name' => __('40PX', 'vaughan_williams'),
				'size' => 40,
				'slug' => 'ft-40'
			),
			array(
				'name' => __('52PX', 'vaughan_williams'),
				'size' => 52,
				'slug' => 'ft-52'
			)
		));
		add_theme_support('disable-custom-font-sizes');


		/* Set Colour Support */
		//https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
		add_theme_support('editor-color-palette', array(
			array(
				'name' => __('Evergreen', 'vaughan_williams'),
				'slug' => 'evergreen',
				'color' => '#214045',
			),
			array(
				'name' => __('Evergreen Light', 'vaughan_williams'),
				'slug' => 'evergreen-light',
				'color' => '#F5F3DD',
			),
			array(
				'name' => __('Intense Red', 'vaughan_williams'),
				'slug' => 'intense-red',
				'color' => '#EF431A',
			),
			array(
				'name' => __('Intense Red Light', 'vaughan_williams'),
				'slug' => 'intense-red-light',
				'color' => '#FCE0DA',
			),
			array(
				'name' => __('Periwinkle', 'vaughan_williams'),
				'slug' => 'periwinkle',
				'color' => '#7F92C9',
			),
			array(
				'name' => __('Periwinkle Light', 'vaughan_williams'),
				'slug' => 'periwinkle-light',
				'color' => '#D0D5E6',
			),
			array(
				'name' => __('Stillness', 'vaughan_williams'),
				'slug' => 'stillness',
				'color' => '#799993',
			),
			array(
				'name' => __('Stillness Light', 'vaughan_williams'),
				'slug' => 'stillness-light',
				'color' => '#DEE7E5',
			),
			array(
				'name' => __('Rich Depth', 'vaughan_williams'),
				'slug' => 'rich-depth',
				'color' => '#57173B',
			),
			array(
				'name' => __('Rich Depth Light', 'vaughan_williams'),
				'slug' => 'rich-depth-light',
				'color' => '#E6DDE2',
			)
		));
		add_theme_support('disable-custom-colors');
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vaughan_williams_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vaughan_williams' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vaughan_williams' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vaughan_williams_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vaughan_williams_scripts() {

	wp_enqueue_style( 'starter-theme-style', get_stylesheet_uri(), array(), strtotime('now') );
  	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Radio+Canada:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet', false );
	wp_style_add_data( 'starter-theme-style', 'rtl', 'replace' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
	if (!is_admin()) {
        wp_deregister_script('jquery');

        // load the local copy of jQuery in the footer
        wp_register_script('jquery', home_url(trailingslashit(WPINC) . 'js/jquery/jquery.js'), false, null, true);


        wp_enqueue_script('jquery');
    }
	$main_script = get_template_directory_uri() . '/dist/js/main.js';
	wp_enqueue_script('main-script', $main_script, array('jquery'), strtotime('now'), true);
	wp_localize_script('main-script', 'WPDATA', array('ajaxurl' => admin_url('admin-ajax.php')));


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'vaughan_williams_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * POST TYPES
 */
require get_template_directory() . '/inc/template-posttypes.php';

/**
 * Custom Wordpress Functions
 */
require get_template_directory() . '/inc/extra-functions.php';

/**
 * Helper Functions
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load ACF BLOCKS.
 */
if (class_exists('ACF')) {
	require get_template_directory() . '/inc/acf-blocks.php';
}


remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );


function add_is_mobile_bodyclass($classes) {
	if (wp_is_mobile()) {

	$classes[] = 'wp_is_mobile';

	}
	return $classes;
}

add_filter('body_class','add_is_mobile_bodyclass');

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes() {
    add_meta_box(
	    'box-id-here',
	    'Box Title Here',
	    'createBoxHtml',
	    'post',
	    'side' ); // <-- this is important
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );
