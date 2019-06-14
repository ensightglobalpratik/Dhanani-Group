<?php
/*
  Template Name: Contact Page Template
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
    if( have_rows('full_width_content_group_contact') ): 
            while( have_rows('full_width_content_group_contact') ): the_row();
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
    
    $form_section=get_field('form_section');
?>
<?php if(!empty($form_section)):?>
    <section class="contact_sec">
        <div class="container">
            <div class="contact_form">
                <?php echo $form_section; ?>
            </div>
        </div>
    </section>
<?php endif;?>
<?php
    if( have_rows('two_column_content_group') ): 
            while( have_rows('two_column_content_group') ): the_row();
                $google_map_content=get_sub_field('google_map_content');
                $title=get_sub_field('title');
                $content=get_sub_field('content');
?>
                <section class="our_headquarters">
                    <?php if($google_map_content):?>
                        <div class="google_map"><?php echo $google_map_content;?></div>
                    <?php endif;?>
                    <div class="container">
                        <div class="headquarters_row">  
                            <div class="headquarters_col">
                                <?php if($title):?>
                                        <div class="heading_title right">
                                            <h2><?php echo $title;?></h2>
                                        </div>
                                <?php endif;?>
                                <?php if($content):?>
                                    <address><?php echo $content;?></address>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile;?>
    <?php endif;?>
<?php
get_footer();
