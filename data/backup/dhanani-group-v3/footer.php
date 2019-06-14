<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dhanani_Group
 */
?>

</div><!-- #content -->
<?php
    $footer_logo = get_option_value('footer_logo');
    $address = get_option_value('address');
    $mailchimp_form_title = get_option_value('mailchimp_form_title');
    $mailchimp_form_shortcode = get_option_value('mailchimp_form_shortcode');
    $social_icon = get_option_value('social_icon');
    $bottom_text = get_option_value('bottom_text');
?>
<footer id="colophon" class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer_row">
                <div class="footer_col">
                    <?php echo ( ! empty( $footer_logo ) ) ? '<div class="footer_logo"> <a href="'.home_url().'"> <img src="'.$footer_logo['url'].'" alt="Dhanani Group"> </a> </div>' : ''; ?>
                </div>
                <div class="footer_col">
                    <?php echo ( ! empty( $address ) ) ? '<address> '.$address.' </address>' : ''; ?>
                </div>
                <div class="footer_col">
                    <?php wp_nav_menu(array('menu_class' => 'footer_menu', 'menu' => 'Footer Menu'));?>                    
                </div>
                <div class="footer_col footerForm">
                    <?php echo ( ! empty( $mailchimp_form_title ) ) ? '<h5> '.$mailchimp_form_title.' </h5>' : ''; ?>
                    <?php echo ( ! empty( $mailchimp_form_shortcode ) ) ? do_shortcode($mailchimp_form_shortcode) : ''; ?>
                    <?php
                        if($social_icon):
                            echo '<ul class="social-icons">';
                                foreach($social_icon as $row):
                                    $icon=$row['icon'];
                                    $link=$row['link'];
                                    $title=$row['title'];
                                    echo '<li><a href="'.$link.'" title="'.$title.'" target="_blank"><img src="'.$icon['url'].'" alt="'.$icon['alt'].'"></a></li>';
                                endforeach;
                            echo '</ul>';
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo ( ! empty( $bottom_text ) ) ? '<div class="copyright-bar"> <div class="container">'.$bottom_text.'</div> </div>' : ''; ?>
    
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
