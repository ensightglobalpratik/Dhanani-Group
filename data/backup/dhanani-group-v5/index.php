<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dhanani_Group
 */

get_header();
?>
<?php
    $page_for_posts = get_option( 'page_for_posts' );
        if( have_rows('two_column_block_group_blog',$page_for_posts) ): 
            while( have_rows('two_column_block_group_blog',$page_for_posts) ): the_row();
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'blog' );

			endwhile;
                        echo '<div class="container pagination_wrap">';
                                the_posts_navigation( array(
                                    'prev_text' => __( '//Next', 'textdomain' ),
                                    'next_text' => __( 'Previous', 'textdomain' ),
                                ));
                                global $wp_query;
                                echo '<span>page '.(!empty($wp_query->query['paged'])?$wp_query->query['paged']:'1').'of'.$wp_query->max_num_pages.'</span>';
                        echo '</div>';
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
