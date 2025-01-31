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

    <section class="counter_sec number_scroll" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/counter-section-bg.jpg');">
        <div class="container">
            <div class="counter_row">
                <div class="counter_col" data-aos="fade-up">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-icon.svg" alt="">
                    <div class="counter_wrap">
                        <span class="counter" id="1-counter" data-startval="0" data-endval="1122">1,122</span>
                    </div>
                    <div class="moretext">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                <div class="counter_col" data-aos="fade-up">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direction-icon.svg" alt="">
                    <div class="counter_wrap">
                        <span class="counter" id="2-counter" data-startval="0" data-endval="25">25</span>%
                    </div>
                    <div class="moretext">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                <div class="counter_col" data-aos="fade-up">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dollar-icon.svg" alt="">
                    <div class="counter_wrap">
                        <span class="counter" id="3-counter" data-startval="0" data-endval="5.4">5.4</span>
                    </div>
                    <div class="moretext">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history_sec">
        <div class="container">
            <div class="historyTabWrap">
                <div id="historyTab">          
                    <span class="tabTopLink" style="float: left;">Click Through <em class="arrow_sign">&gt;</em></span>
                    <ul class="resp-tabs-list">
                        <li>1980</li>
                        <li>1985</li>
                        <li>1990</li>
                        <li>1995</li>
                        <li>2000</li>
                        <li>2005</li>
                        <li>2010</li>
                        <li>2015</li>
                        <li>2019</li>
                    </ul> 
                    <div class="resp-tabs-container">                                                        
                        <div> <?php echo do_shortcode('[mapplic id="29"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="35"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="29"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="35"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="29"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="35"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="29"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="35"]')?> </div>
                        <div> <?php echo do_shortcode('[mapplic id="29"]')?> </div>                    
                    </div>
                </div>
                <div class="map_content">
                    <ul class="map_category_list">
                        <li class="burgerKing">Burger King <span></span></li>
                        <li class="popeyes">Popeyes <span></span></li>
                        <li class="laMadeleine">La Madeleine <span></span></li>
                        <li class="convenienceStores">Convenience Stores <span></span></li>
                        <li class="otherRestaurants">Other Restaurants <span></span></li>
                    </ul>
                    <div class="heading_title right"><h2>History of National Growth</h2></div>
                </div> 
            </div> 
            
            <div class="text-column">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
        </div>
    </section>

    <section class="mission_sec">
        <div class="container">
            <div class="heading_title">
                <h2>Mission</h2>
            </div>
            <div class="mission_content">
                <p>Leverage Decades of Franchising Experience to Create an Exceptional Customer Experience Across A variety of Strong, Differentiated Brands.</p>
                <div class="text-right">
                    <a href="#" class="more"><em class="arrow_sign">&gt;</em> Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="recent_news">
        <div class="container">
            <div class="news_row">
                <div class="news_thumb_col">
                    <a href="#" class="news_thumb">
                        <div class="news_thumb_image_wrap"><div class="news_thumb_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/la-madeleine.jpg');"></div></div>
                        <div class="news_thumb_content">
                            <span class="sub_title">Franchising Today Magazine</span>
                            <h3>The Dhanani Group- Franchising Today</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                        </div>
                        <div class="news_thumb_footer">
                            <span class="more"><em class="arrow_sign">&gt;</em> Read More</span>
                        </div>
                    </a>
                </div>
                <div class="news_thumb_col">
                    <a href="#" class="news_thumb">
                        <div class="news_thumb_image_wrap"><div class="news_thumb_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/burger-king.jpg');"></div></div>
                        <div class="news_thumb_content">
                            <span class="sub_title">Forbes</span>
                            <h3>Dhanani Runs One of America’s Largest...</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                        </div>
                        <div class="news_thumb_footer">
                            <span class="more"><em class="arrow_sign">&gt;</em> Read More</span>
                        </div>
                    </a>
                </div>
                <div class="news_thumb_col">
                    <a href="#" class="news_thumb">
                        <div class="news_thumb_image_wrap"><div class="news_thumb_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/popeyes.jpg');"></div></div>
                        <div class="news_thumb_content">
                            <span class="sub_title">Business Insider</span>
                            <h3>Gulshan Recognized Company of the Year</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                        </div>
                        <div class="news_thumb_footer">
                            <span class="more"><em class="arrow_sign">&gt;</em> Read More</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="heading_title right">
                <h2>Recent News</h2>
            </div>
        </div>
    </section>


<?php
get_footer();
