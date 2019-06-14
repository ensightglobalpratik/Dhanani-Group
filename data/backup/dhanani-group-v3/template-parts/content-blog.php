<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dhanani_Group
 */

?>
<?php dhanani_group_post_thumbnail(); ?>
<?php
    echo '<div class="news_thumb_content">
        <span class="sub_title">'.get_field('subtitle').'</span>
        <h3>'.get_the_title().'</h3>
        <p>'.get_the_excerpt().'</p>
    </div>';
?>