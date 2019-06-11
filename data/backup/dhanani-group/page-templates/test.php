<?php
/*
  Template Name: Test
 */
get_header();
?>



    <!-- Banner -->
    <div class="banner home-banner">
        <div class="banner-row">
            <div class="banner-column burger-king" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/burger-king.png');">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/burger-king-logo.svg" alt="">
            </div>
            <div class="banner-column popeyes" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/popeyes.png');">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/popeyes-logo.svg" alt="">
            </div>
            <div class="banner-column la-madeleine" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/opening-la-madeleine.png');">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/la-madeleine-logo.svg" alt="">
            </div>
        </div>
    </div>

    <!-- Inner Banner -->
    <div class="banner home-banner">
        <!-- Banner Slider -->
        <!-- <div class="bannerslider owl-carousel">
                    <div>
                        <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg');"></div>
                    </div>
                    <div>
                        <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg');"></div>
                    </div>
                </div> -->        
    </div>

    
<?php
get_footer();
