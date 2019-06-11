<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dhanani_Group
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php /* <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dhanani-group' ); ?></a> */ ?>

	<header id="masthead" class="site-header">
		<div class="main-header">
			<div class="container">
				<div class="logo">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
					</a>
				</div>
				<div class="main_nav">
					<ul class="brand-topbar">
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/burger-king-logo-sm.svg" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/popeyes-logo-sm.svg" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/la-madeleine-logo-sm.svg" alt=""></a></li>
					</ul>
			      	<?php wp_nav_menu(array('menu_class' => 'enumenu_ul menu', 'menu' => 'Main Menu')); ?>
			    </div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
