<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
    while ( have_posts() ) :
            the_post();
                if(get_the_content()):
                    echo '<section class="page_title_bar" style="background-color: #e8e8e8;">
                            <div class="container">';
                                get_template_part( 'template-parts/content', 'page' );
                            echo '</div>
                    </section>'    ;
                endif;
    endwhile; // End of the loop.
?>
    <?php
        if( have_rows('banner_group') ): 
            while( have_rows('banner_group') ): the_row();
                $banner_image_one=get_sub_field('banner_image_one');
                $banner_image_two=get_sub_field('banner_image_two');
                $banner_image_three=get_sub_field('banner_image_three');
                $logo_one=get_sub_field('logo_one');
                $logo_two=get_sub_field('logo_two');
                $logo_three=get_sub_field('logo_three');
            
    ?>
                <div class="banner home-banner">
                    <div class="banner-row">
                        <div class="banner-column burger-king" style="background-image: url('<?php echo $banner_image_one['url']; ?>');">
                            <?php echo (!empty($logo_one)?'<img src="'.$logo_one['url'].'" alt="'.$logo_one['alt'].'">':'');?>
                        </div>
                        <div class="banner-column popeyes" style="background-image: url('<?php echo $banner_image_two['url']; ?>');">
                            <?php echo (!empty($logo_two)?'<img src="'.$logo_two['url'].'" alt="'.$logo_two['alt'].'">':'');?>
                        </div>
                        <div class="banner-column la-madeleine" style="background-image: url('<?php echo $banner_image_three['url']; ?>');">
                            <?php echo (!empty($logo_three)?'<img src="'.$logo_three['url'].'" alt="'.$logo_three['alt'].'">':'');?>
                        </div>
                    </div>
                </div>
    <?php
            endwhile;
        endif;
    ?>
    <?php
        if( have_rows('two_column_block_group') ): 
            while( have_rows('two_column_block_group') ): the_row();
                $main_title=get_sub_field('main_title');
                $content=get_sub_field('content');
    ?>
                <section class="content_sec">
                    <div class="container">
                        <div class="content_row">
                            <div class="content_left">
                                <?php echo (!empty($main_title)?'<div class="heading_title"> <h2>'.$main_title.'</h2> </div>':'');?>                                
                            </div>
                            <div class="content_right">
                                <?php echo (!empty($content)? $content :'');?>
                            </div>
                        </div>
                    </div>
                </section>
    <?php
            endwhile;
        endif;
    ?>  
    <?php
        if( have_rows('three_column_block_group') ): 
            while( have_rows('three_column_block_group') ): the_row();
                $background_image=get_sub_field('background_image');
    ?>
                <section class="counter_sec" style="background-image: url('<?php echo $background_image['url']; ?>');">
                    <div class="container">
                        <?php $i=1; if( have_rows('block_data') ):   ?>
                            <div class="counter_row">
                                <?php
                                    while( have_rows('block_data') ): the_row();
                                        $icon=get_sub_field('icon');
                                        $number=get_sub_field('number');
                                        $suffix=get_sub_field('suffix');
                                        $content=get_sub_field('content');
                                ?>
                                                <div class="counter_col" data-aos="fade-up">
                                                    <?php echo (!empty($icon)?'<img src="'.$icon['url'].'" alt="'.$icon['alt'].'">':'');?>
                                                    <?php echo (!empty($number || $suffix)?'<div class="counter_wrap"> <span class="counter" id="'.$i.'-counter" data-startval="0" data-endval="'.$number.'">'.$number.'</span>'.$suffix.' </div>':'');?>
                                                    <?php echo (!empty($content)?'<div class="moretext">'.$content.'</div>':'');?>                                                    
                                                </div>
                                <?php
                                   $i++; endwhile;
                                ?>
                            </div>
                        <?php endif;?>
                    </div>
                </section>
    <?php
            endwhile;
        endif;
    ?>
    <?php
        if( have_rows('map_group') ): 
            while( have_rows('map_group') ): the_row();
                $text_line=get_sub_field('text_line');
                $title=get_sub_field('title');
                $contents=get_sub_field('contents');
    ?>
                <section class="history_sec">
                    <div class="container">
                        <div class="historyTabWrap">
                            <div id="historyTab">     
                                <?php echo (!empty($text_line)?'<span class="tabTopLink" style="float: left;">'.$text_line.' <em class="arrow_sign">&gt;</em></span>':'');?>
                                <?php if( have_rows('map_data_section') ): ?>
                                    <ul class="resp-tabs-list">
                                        <?php while( have_rows('map_data_section') ): the_row(); $year=get_sub_field('year');?>
                                                <li><?php echo $year;?></li>
                                        <?php endwhile;?>
                                    </ul> 
                                <?php endif; ?> 
                                <?php if( have_rows('map_data_section') ): ?>
                                    <div class="resp-tabs-container">  
                                        <?php while( have_rows('map_data_section') ): the_row(); $content=get_sub_field('content');?>
                                                <div> <?php echo $content; ?> </div>
                                        <?php endwhile;?>                  
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if( have_rows('category') ): ?>
                                <div class="map_content">
                                    <ul class="map_category_list">
                                        <?php while( have_rows('category') ): the_row(); $label=get_sub_field('label'); $color=get_sub_field('color');?>
                                                <li><?php echo $label;?> <span style="background-color: <?php echo $color;?>;"></span></li>
                                        <?php endwhile;?>
                                    </ul>
                                    <?php echo (!empty($title)?'<div class="heading_title right"><h2>'.$title.'</h2></div>':'');?>                                
                                </div>
                            <?php endif; ?>   
                        </div> 
                        <?php echo (!empty($contents)?'<div class="text-column">'.$contents.'</div>':'');?>
                    </div>
                </section>
    <?php
            endwhile;
        endif;
    ?>   
            <?php if( have_rows('mission_section') ): while( have_rows('mission_section') ): the_row(); $button_label=get_sub_field('button_label'); $button_link=get_sub_field('button_link'); $title=get_sub_field('title'); $content=get_sub_field('content');?>
                <section class="mission_sec">
                    <div class="container">
                        <?php echo (!empty($title)?'<div class="heading_title"><h2>'.$title.'</h2></div>':'');?>
                        <div class="mission_content">
                            <?php echo (!empty($content)? $content :'');?>
                            <?php echo (!empty($button_link)? '<div class="text-right"> <a href="'.$button_link.'" class="more"><em class="arrow_sign">&gt;</em> '.$button_label.'</a> </div>' :'');?>                            
                        </div>
                    </div>
                </section>
            <?php endwhile; endif;?>
            <?php if( have_rows('recent_news_section') ): while( have_rows('recent_news_section') ): the_row(); $main_title=get_sub_field('main_title'); $content=get_sub_field('content');?>
                <section class="recent_news">
                    <div class="container">
                        <?php echo (!empty($content)? $content :'');?>
                        <?php echo (!empty($main_title)? '<div class="heading_title right"> <h2>'.$main_title.'</h2> </div>' :'');?>                        
                    </div>
                </section>
            <?php endwhile; endif;?>    
<?php
get_footer();
