<?php
/*
  Template Name: Career Page Templage
 */
get_header();

while ( have_posts() ) :
            the_post();
                if(get_the_content()):
                    echo '<section class="page_title_bar">
                            <div class="container">';
                                get_template_part( 'template-parts/content', 'page' );
                            echo '</div>
                    </section>'    ;
                endif;
    endwhile; // End of the loop.
?>
<?php
    if( have_rows('full_width_column_group_career') ): 
            while( have_rows('full_width_column_group_career') ): the_row();
                $main_title=get_sub_field('main_title');
                $content=get_sub_field('content');
?>
    <!-- page_title_bar -->
                    <section class="page_title_bar">
                        <div class="container">
                            <?php echo (!empty($main_title)? '<div class="heading_title"> <h2>'.$main_title.'</h2> </div>' : '');?>                            
                            <div class="page_title_content">
                                <?php echo (!empty($content)? $content : '');?>
                                <?php
                                    if( have_rows('add_links_with_label') ):                                         
                                ?>
                                            <ul class="whyus_menu">
                                                <?php
                                                    while( have_rows('add_links_with_label') ): the_row();
                                                        $label=get_sub_field('label');
                                                        $link=get_sub_field('link');
                                                ?>
                                                        <li><a href="<?php echo $link;?>" title="<?php echo $label;?>"><?php echo $label;?></a></li>
                                                <?php  endwhile;?>              
                                            </ul>
                                <?php                                       
                                endif;
                            ?>
                            </div>
                        </div>
                    </section>
<?php
            endwhile;
    endif;
?>
<?php
    if( have_rows('annual_section_group') ): 
            while( have_rows('annual_section_group') ): the_row();
                $background_image=get_sub_field('background_image');
                $title=get_sub_field('title');
                $subtitle=get_sub_field('subtitle');
?>
                    <!-- Annual Promotions -->
                    <section class="annual_promotions_sec number_scroll" style="background-image: url('<?php echo $background_image['url']; ?>');">
                        <div class="container">
                            <div class="heading_title right">
                                <?php echo (!empty($title)? '<h2>'.$title.'</h2>':'');?>
                                <?php echo (!empty($subtitle)? '<p>'.$subtitle.'</p>':'');?>
                            </div>
                            <?php $counter=1; if( have_rows('three_column_data') ):?>
                                    <div class="circle_row">
                                        <?php
                                            while( have_rows('three_column_data') ): the_row();
                                                $number=get_sub_field('number');
                                                $text=get_sub_field('text');
                                        ?>
                                        <div class="circle_col">
                                            <div class="circle"><span class="counter" id="<?php echo $counter;?>-counter" data-startval="0" data-endval="<?php echo $number;?>"><?php echo $number;?></span></div>
                                            <?php echo (!empty($text)? '<p>'.$text.'</p>':'');?>
                                        </div>
                                        <?php $counter++; endwhile;?>
                                    </div>
                            <?php endif;?>
                        </div>
                    </section>
<?php 
            endwhile;
    endif;
?>
<?php
    $modul=1;
    if( have_rows('two_column_section_data_group') ): 
            while( have_rows('two_column_section_data_group') ): the_row();
                $background_image=get_sub_field('background_image');
                $title=get_sub_field('title');
                $subtitle=get_sub_field('subtitle');
                $content=get_sub_field('content');
                $button_label=get_sub_field('button_label');
                $button_link=get_sub_field('button_link');
                if($modul%2==0):
                    $cl='right';
                else:
                    $cl='';                    
                endif;
                if(!empty($background_image)):
                    $bg_class="content_image_module";
                else:
                    $bg_class="";
                endif;
?>
                    <div class="content_module <?php echo $cl.' '.$bg_class;?>" style="background-image: url('<?php echo $background_image['url']; ?>');">
                        <div class="container">
                            <div class="content_module_row">
                                <div class="content_module_title" data-aos="fade-right">
                                    <div class="heading_title">
                                        <?php echo (!empty($title)? '<h2>'.$title.'</h2>':'');?>
                                        <?php echo (!empty($subtitle)? '<p>'.$subtitle.'</p>':'');?>
                                    </div>
                                </div>
                                <div class="content_module_content" data-aos="fade-left">
                                    <?php echo (!empty($content)? $content :'');?>
                                    <?php echo (!empty($button_link)? '<a href="'.$button_link.'" title="'.$button_label.'" class="button">'.$button_label.'</a>' :'');?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
<?php   $modul++;    endwhile; 
    endif;
?>
<?php
        if( have_rows('testimonials_group') ): 
            while( have_rows('testimonials_group') ): the_row();
                $heading=get_sub_field('heading');
?>
<!-- Testimonials -->
                        <section class="testimonials">
                            <div class="container">
                                <?php if( have_rows('add_testimonials') ): ?>
                                        <div class="testimonial_slider owl-carousel"> 
                                            <?php
                                                while( have_rows('add_testimonials') ): the_row();
                                                    $image=get_sub_field('image');
                                                    $content=get_sub_field('content');
                                            ?>
                                            <div>                
                                                <div class="testimonial_column">
                                                    <div class="testimonial_image" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                                                    <?php echo (!empty($content)? '<div class="testimonials_content">'.$content.'</div>' :'');?>
                                                </div>                
                                            </div>
                                            <?php endwhile;?>
                                        </div>
                                <?php endif;?>
                                <?php echo (!empty($heading)?'<div class="heading_title right"> <h2>'.$heading.'</h2> </div>':'');?>
                            </div>
                        </section>

<?php       endwhile; 
        endif;

get_footer();
