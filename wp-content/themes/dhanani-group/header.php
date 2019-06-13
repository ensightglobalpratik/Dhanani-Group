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
                <?php if(!(is_front_page())):?>
                <div class="banner">
                    <div class="bannerslider owl-carousel">
                        <div>
                            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/madeline-4.jpg');">
                                <div class="container">
                                    <div class="banner_content">
                                        <h2>We Believe People First, Always</h2>
                                    </div>
                                </div>
                                <div class="slide_caption_wrap">
                                    <div class="container">
                                        <div class="slide_caption">
                                            <p>Names of People in photo, add photo credit here too, perhaps location.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/madeline-2.jpg');">
                                <div class="container">
                                    <div class="banner_content">
                                        <h2>We Believe People First, Always</h2>
                                    </div>
                                </div>
                                <div class="slide_caption_wrap">
                                    <div class="container">
                                        <div class="slide_caption">
                                            <p>Names of People in photo, add photo credit here too, perhaps location.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/madeline-3.jpg');">
                                <div class="container">
                                    <div class="banner_content">
                                        <h2>We Believe People First, Always</h2>
                                    </div>
                                </div>
                                <div class="slide_caption_wrap">
                                    <div class="container">
                                        <div class="slide_caption">
                                            <p>Names of People in photo, add photo credit here too, perhaps location.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <?php endif;?>