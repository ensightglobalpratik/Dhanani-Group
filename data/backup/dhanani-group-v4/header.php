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
                <?php
                    global $post;
                    $$page_for_posts = get_option( 'page_for_posts' );
                    if(is_home()):
                        $id=$$page_for_posts;
                    else:  
                        $id=$post->ID;
                    endif;
                    $banner_image_group=get_field('banner_image_group',$id);
                    if(!empty($banner_image_group)):
                ?>
                        <div class="banner">
                            <div class="bannerslider owl-carousel">
                                <?php 
                                    foreach($banner_image_group as $row):
                                        $background_image=$row['background_image'];
                                        $title=$row['title'];
                                        $caption=$row['caption'];
                                ?>
                                            <div>
                                                <div class="slide" style="background-image: url('<?php echo $background_image['url']; ?>');">
                                                    <div class="container">
                                                        <?php echo (!empty($title)?'<div class="banner_content"><h2>'.$title.'</h2></div>':'');?>
                                                    </div>
                                                    <div class="slide_caption_wrap">
                                                        <div class="container">
                                                            <?php echo (!empty($caption)?'<div class="slide_caption">'.$caption.'</div>':'');?>                                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                <?php endforeach;?>                                
                            </div>        
                        </div>
                <?php endif;?>
                <?php endif;?>