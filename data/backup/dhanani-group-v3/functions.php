<?php
/**
 * Dhanani Group functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dhanani_Group
 */

if ( ! function_exists( 'dhanani_group_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dhanani_group_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Dhanani Group, use a find and replace
		 * to change 'dhanani-group' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dhanani-group', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'dhanani-group' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'dhanani_group_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'dhanani_group_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dhanani_group_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dhanani_group_content_width', 640 );
}
add_action( 'after_setup_theme', 'dhanani_group_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dhanani_group_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dhanani-group' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dhanani-group' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dhanani_group_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dhanani_group_scripts() {
        wp_enqueue_script('jquery');
	wp_enqueue_style( 'dhanani-group-easy-responsive-tabs', get_template_directory_uri() . '/assets/css/easy-responsive-tabs.css', array(), '');
	wp_enqueue_style( 'dhanani-group-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dhanani-group-menu', get_template_directory_uri() . '/assets/css/menu.css', array(), '' );
	wp_enqueue_style( 'dhanani-group-owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '' );        
	wp_enqueue_style( 'dhanani-group-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), '' );        
	wp_enqueue_style( 'dhanani-group-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '' );        
	wp_enqueue_script( 'dhanani-group-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '' );
	wp_enqueue_script( 'dhanani-group-menu-js', get_template_directory_uri() . '/assets/js/menu.js', array(), '');
	wp_enqueue_script( 'dhanani-group-owl.carousel.min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(),'20151215',false);
	wp_enqueue_script( 'dhanani-group-easy-aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(),'20151215',false);
	wp_enqueue_script( 'dhanani-group-easy-responsive-js', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array(),'20151215',false);
	wp_enqueue_script( 'dhanani-group-general-js', get_template_directory_uri() . '/assets/js/general.js', array(), '20151215');
	wp_enqueue_script( 'dhanani-group-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dhanani_group_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

