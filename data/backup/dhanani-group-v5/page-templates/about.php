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

<!-- Values and Vision -->
<!--<section class="values_vision_sec">
    <div class="container">
        <div class="heading_title">
            <h2>Values and Vision</h2>
        </div>
        <div class="values_vision_content">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi aliquam erat volutpat.</p>
            <ul>
                <li>elit, sed diam nonummy nibh euismod tincidunt ut ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing Lorem ipsum.</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing.</li>
            </ul>
        </div>
    </div>
</section>-->

<!-- Bio -->
<section class="bio_sec">
    <div class="active_bio_wrap">
        <div class="container">
            <div class="active_bio_row active" id="bio-1" >
                <div class="active_bio_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bio-1.jpg');"></div>            
                <div class="active_bio_content ">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-0" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-2" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-2">
                <div class="active_bio_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bio-2.jpg');"></div>            
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-1" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-3" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-3">
                <div class="active_bio_image"></div>            
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-2" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-4" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-4">
                <div class="active_bio_image"></div>
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-3" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-5" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-5">
                <div class="active_bio_image"></div>
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-4" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-6" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-6">
                <div class="active_bio_image"></div>
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-5" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-7" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-7">
                <div class="active_bio_image"></div>
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-6" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-8" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-8">
                <div class="active_bio_image"></div>
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-7" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-9" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>                
                    </div>
                </div>
            </div>
            <div class="active_bio_row" id="bio-9">
                <div class="active_bio_image"></div>
                <div class="active_bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                    <div class="biolinkwrap">
                        <a href="#bio-8" class="biolink prev_link"><em class="arrow_sign">&lt;</em> Previous</a>                
                        <a href="#bio-10" class="biolink next_link"><em class="arrow_sign">&gt;</em> Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bio_list">
            <a href="#bio-1" class="bio_col">
                <div class="bio_block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bio-1.jpg');">
                    <span class="bio_caption">First & Last Name, Position</span>
                </div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-2" class="bio_col">
                <div class="bio_block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bio-2.jpg');">
                    <span class="bio_caption">First & Last Name, Position</span>
                </div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-3" class="bio_col">
                <div class="bio_block">&nbsp;</div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-4" class="bio_col">
                <div class="bio_block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bio-2.jpg');">
                    <span class="bio_caption">First & Last Name, Position</span>
                </div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-5" class="bio_col">
                <div class="bio_block">&nbsp;</div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-6" class="bio_col">
                <div class="bio_block">&nbsp;</div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-7" class="bio_col">
                <div class="bio_block">&nbsp;</div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-8" class="bio_col">
                <div class="bio_block">&nbsp;</div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
            <a href="#bio-9" class="bio_col">
                <div class="bio_block">&nbsp;</div>
                <div class="bio_content">
                    <span class="bio_top_title">Position/Title</span>
                    <h3>First & Last Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy diam nonummy amet, consectetuer adipiscing elit, sed diam nonummy tetuer adipiscing elit, sed diam nonummy. ing elit, sed diam nonummy. nonummy diam nonummy amet, consectetuer adipiscing elit, sed.</p>
                </div>
            </a>
        </div>
    </div>
</section>
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
