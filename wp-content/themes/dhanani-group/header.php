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
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">	
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <?php
                $header_logo = get_option_value('header_logo');
                $header_icon = get_option_value('header_icon');
            ?>
            <header id="masthead" class="site-header">
                <div class="main-header">
                    <div class="container">
                        <?php echo ( ! empty( $header_logo ) ) ? '<div class="logo"> <a href="'.home_url().'"> <img src="'.$header_logo['url'].'" alt="Dhanani Group"> </a> </div>' : ''; ?>
                        <div class="main_nav">
                            <?php
                                if($header_icon):
                                    echo '<ul class="brand-topbar">';
                                        foreach($header_icon as $row):
                                            $icon=$row['icon'];
                                            $link=$row['link'];
                                                echo '<li><a href="'.$link.'"><img src="'.$icon['url'].'" alt="'.$icon['alt'].'"></a></li>';
                                        endforeach;
                                    echo '</ul>';
                                endif;
                                wp_nav_menu(array('menu_class' => 'enumenu_ul menu', 'menu' => 'Main Menu')); ?>
                        </div>
                    </div>
                </div>
            </header><!-- #masthead -->
            <div id="content" class="site-content">