<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dhanani_Group
 */

?>
<section class="news_row_sec">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<?php dhanani_group_post_thumbnail(); ?>
			<?php
			    echo '<div class="news_thumb_content">
			        <span class="sub_title">'.get_field('subtitle').'</span>
			        <a href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a>
			        <p>'.get_the_excerpt().'</p>
                                <a href="'.get_permalink().'" class="content_link"><em class="arrow_sign">&gt;</em> Read More</a>    
			    </div>';
			?>
		</div>
	</div>
</section>