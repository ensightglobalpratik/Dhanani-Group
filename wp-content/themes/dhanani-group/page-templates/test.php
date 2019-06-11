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

    <section class="content_sec">
        <div class="container">
            <div class="content_row">
                <div class="content_left">
                    <div class="heading_title">
                        <h2>Dhanani Group, a family of dynamic companies</h2>
                    </div>
                </div>
                <div class="content_right">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feuquis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="counter_sec" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/counter-section-bg.jpg');">
        <div class="container">
            <div class="counter_row">
                <div class="counter_col">
                    <span></span>
                    <div class="counter_wrap">
                        <span class="counter">1,122</span>
                    </div>
                    <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</a>
                </div>
            </div>
        </div>
    </section>

    
<?php
get_footer();
