<?php
/*
  Template Name: Our Brands Page Template
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
    
    if( have_rows('full_width_content_group') ): 
            while( have_rows('full_width_content_group') ): the_row();
                    $background_color=get_sub_field('background_color');
                    $title=get_sub_field('title');
                    $content=get_sub_field('content');
                            echo '<section class="page_title_bar" style="background-color: '.$background_color.';">
                                    <div class="container">
                                        '.(!empty($title)? '<div class="heading_title"> <h2>'.$title.'</h2> </div>':'').' 
                                        '.(!empty($content)? '<div class="page_title_content">'.$content.'</div>':'').'                                           
                                    </div>
                            </section>';
            endwhile;
    endif;
?>
<?php if( have_rows('two_column_block_section_group') ):?>
        <section class="row_column_sec">
            <?php while ( have_rows('two_column_block_section_group') ) : the_row(); $image=get_sub_field('image');?>
                    <div class="row_column_wrap">
                        <div class="container container-lg">
                            <div class="row_column">
                                <div class="image_column" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                                    <?php $i=0; if( have_rows('block_content') ):?>
                                        <div class="content_column">
                                            <?php while ( have_rows('block_content') ) : the_row(); if($i%2==0): $class="right";  else:  $class="left";  endif; $title=get_sub_field('title');  $contents=get_sub_field('contents');  $button_label=get_sub_field('button_label');  $button_link=get_sub_field('button_link');?>
                                                    <div class="brand_content_row <?php echo $class;?>">
                                                        <h3><?php echo $title;?></h3>
                                                        <div class="brand_text_area">
                                                            <?php echo $contents;?>
                                                            <?php if(!empty($button_link)):?><a href="<?php echo $button_link;?>" class="content_link"><em class="arrow_sign">&gt;</em> <?php echo $button_label;?></a><?php endif;?>
                                                        </div>
                                                        <?php  if( have_rows('counter_data') ): ?>
                                                            
                                                                    <div class="counter_row">
                                                                        <?php 
                                                                        while ( have_rows('counter_data') ) : the_row();
                                                                            $icon=get_sub_field('icon');
                                                                            $number=get_sub_field('number');
                                                                            $suffix=get_sub_field('suffix');
                                                                            $title_sub=get_sub_field('title_sub');
                                                                        ?>
                                                                        <div class="counter_col">
                                                                            <img src="<?php echo $icon['url']; ?>" class="sm-ico" alt="<?php echo $icon['alt']; ?>">
                                                                            <div class="counter_wrap">
                                                                                <span class="counter"><?php echo $number;?></span><?php echo $suffix;?>
                                                                            </div>
                                                                            <h4><?php echo $title_sub;?></h4>
                                                                        </div>
                                                                        <?php endwhile;?>
                                                                    </div>
                                                        <?php  endif;?>
                                                     </div>
                                            <?php $i++; endwhile;?>
                                        </div>
                                    <?php endif;?>
                            </div>
                        </div>
                    </div>
        <?php endwhile;?>
        </section>
<?php endif;?>




<?php
get_footer();
