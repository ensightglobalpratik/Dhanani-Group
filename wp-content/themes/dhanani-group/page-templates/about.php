<?php
/*
  Template Name: About Us Page Template
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
    if( have_rows('full_width_content_group_about') ): 
            while( have_rows('full_width_content_group_about') ): the_row();
                    $background_color=get_sub_field('background_color');
                    $title=get_sub_field('title');
                    $content=get_sub_field('content');
                            echo '<section class="values_vision_sec" style="background-color: '.$background_color.';">
                                    <div class="container">
                                        '.(!empty($title)? '<div class="heading_title"> <h2>'.$title.'</h2> </div>':'').' 
                                        '.(!empty($content)? '<div class="values_vision_content">'.$content.'</div>':'').'                                           
                                    </div>
                            </section>';
            endwhile;
    endif;

?>
<?php
    $np=1;
    if( have_rows('add_person_bio_data') ): 
?>
<!-- Bio -->
<section class="bio_sec">
    <div class="active_bio_wrap">
        <div class="container">
            <?php
                while( have_rows('add_person_bio_data') ): the_row();
                    $image=get_sub_field('image');
                    $name=get_sub_field('name');
                    $position=get_sub_field('position');
                    $content=get_sub_field('content');
            ?>
            <div class="active_bio_row <?php echo (!empty($np)&& $np==1 ? 'active':'');?>" id="bio-<?php echo $np;?>" >
                <?php echo (!empty(($image))?'<div class="active_bio_image" style="background-image: url('.$image['url'].');"></div>':'');?>
                
                <div class="active_bio_content ">
                    <?php echo (!empty(($position))?'<span class="bio_top_title">'.$position.'</span>':'');?>
                    <?php echo (!empty(($name))?'<h3>'.$name.'</h3>':'');?>
                    <?php echo (!empty(($content))? $content :'');?>
                    <div class="biolinkwrap">
                        <a href="#bio-<?php echo $np-1;?>" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-<?php echo $np+1;?>" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <?php $np++; endwhile;?>
        </div>
    </div>
    <div class="container">
        <div class="bio_list">
            <?php
            $counter=1;
                while( have_rows('add_person_bio_data') ): the_row();
                    $image=get_sub_field('image');
                    $name=get_sub_field('name');
                    $position=get_sub_field('position');
                    $content=get_sub_field('content');
            ?>
            <a href="#bio-<?php echo $counter;?>" class="bio_col " data-aos="fade-up" data-aos-duration="2000">
                <?php if($image || $name || $position): ?>
                <div class="bio_block" style="background-image: url('<?php echo $image['url']; ?>');">
                    <?php echo (!empty($name) || !empty($position) ? '<span class="bio_caption">'.$name.', '.$position.'</span>': '');?>
                </div>
                <?php endif;?>
                <div class="bio_content">
                    <?php echo (!empty(($position))?'<span class="bio_top_title">'.$position.'</span>':'');?>
                    <?php echo (!empty(($name))?'<h3>'.$name.'</h3>':'');?>
                    <?php echo (!empty(($content))? $content :'');?>
                </div>
            </a>
            <?php $counter++; endwhile;?>
        </div>
    </div>
</section>
<?php endif;?>
<?php
    if( have_rows('two_column_block_group') ): 
            while( have_rows('two_column_block_group') ): the_row();
                $background_image_of_title=get_sub_field('background_image_of_title');
                $title=get_sub_field('title');
                $content_right=get_sub_field('content_right');
?>
                    <!-- Our Story -->
                    <section class="our_story_sec">
                        <div class="container">
                            <div class="our_story_row">
                                <div class="our_story_left">
                                    <?php echo (!empty($background_image_of_title)? '<figure class="dg-logo-img"> <img src="'.$background_image_of_title['url'].'" alt="'.$background_image_of_title['alt'].'"> </figure>' : '');?>                                    
                                    <div class="heading_title right">
                                    <?php echo (!empty($title)? '<h2>'.$title.'</h2>': '');?>  
                                    </div>                
                                </div>
                                <div class="our_story_right">
                                    <?php echo (!empty($content_right)? $content_right : '');?>  
                                </div>
                            </div>
                        </div>
                    </section>
<?php
            endwhile;
    endif;
    
?>

<?php
get_footer();
