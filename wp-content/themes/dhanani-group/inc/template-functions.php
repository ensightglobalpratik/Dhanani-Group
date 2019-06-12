<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Dhanani_Group
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dhanani_group_body_classes($classes) {
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}

add_filter('body_class', 'dhanani_group_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dhanani_group_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'dhanani_group_pingback_header');

/**
 * SVG filter
 */
function dhanani_group_cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'dhanani_group_cc_mime_types');
/**
 * ACf Options Page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page( array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => true,
        'icon_url'   => 'dashicons-menu',
        'position'   => 60,
	) );
    acf_add_options_sub_page( array(
        'page_title'  => 'Theme Branding Settings',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-general-settings',
	) );
	acf_add_options_sub_page( array(
        'page_title'  => 'Theme Footer Settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-general-settings',
	) );
}

/**
 * custom logo url
 */
function dhanani_group_loginpage_custom_link() {
    $home_url = home_url();
    return $home_url;
}

add_filter('login_headerurl', 'dhanani_group_loginpage_custom_link');

/**
 * Remove css js version
 */
function remove_cssjs_ver($src) {
    if (strpos($src, '?ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);
/*
 * get current year
 */

function currentYear($atts) {
    return date('Y');
}

add_shortcode('year', 'currentYear');

/**
 * Add Custom admin logo
 */
function dhanani_group_my_login_logo() {
    $admin_dashboard_logo = get_field('admin_dashboard_logo', 'option');
    echo '<style type="text/css">
		body{
                    background: #ffffff !important;
                    }
                    .login form{    background: #f3f3f3 !important;}
                    .login h1 a {
                    background-image: url(' . $admin_dashboard_logo . ') !important;
                    background-size: 300px auto !important;
                    width: auto !important;
		}
                body.login div#login form#loginform {
			border-radius: 3%;
			box-shadow: 0 2px 4px 6px rgba(0, 0, 0, 0.15);
		}

		body.login div#login p#nav a,
		body.login div#login p#backtoblog a {
			color: #ee7622;
		}

		body.login div#login p#nav a:hover,
		body.login div#login p#backtoblog a:hover {
			color: #ffb347;
		}

	</style>';
}

add_action('login_enqueue_scripts', 'dhanani_group_my_login_logo');

/**
 * add favicon icon
 */
function dhanani_group_favicon() {
    $favicon = get_field('website_favicon', 'option');
    echo '<link rel="shortcut icon" href="' . $favicon . '" type="image/x-icon" />';
    echo '<link rel="icon" href="' . $favicon . '" />';
}

add_action('wp_head', 'dhanani_group_favicon');
/*****************
 * Get option value
 */
function get_option_value( $id ) {
	if ( function_exists( 'get_field' ) ):
		$val = get_field( $id, 'option' );
	endif;
	return $val;
}
