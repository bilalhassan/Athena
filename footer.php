<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Athena
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    
    
    <div class="athena-footer parallax-image">
        <div>
            <div class="row">
                <?php get_sidebar('footer'); ?>
            </div>            
        </div>

        
    </div>
    
    <div class="clear"></div>
    
    <div class="site-info">
        
        <div class="row">
            
            <div id="authica-social">
                
                <a href="" target="_BLANK">
                    <span class="fa fa-facebook"></span>
                </a>
                
                <a href="" target="_BLANK">
                    <span class="fa fa-google-plus"></span>
                </a>
                
                <a href="" target="_BLANK">
                    <span class="fa fa-instagram"></span>
                </a>
                
                <a href="" target="_BLANK">
                    <span class="fa fa-linkedin"></span>
                </a>
                
                <a href="" target="_BLANK">
                    <span class="fa fa-pinterest"></span>
                </a>
                
                <a href="" target="_BLANK">
                    <span class="fa fa-twitter"></span>
                </a>
                
            </div>
            
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'athena')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'athena'), 'WordPress'); ?></a>
            <span class="sep"> | </span>

            <?php printf(esc_html__('Theme: %1$s by %2$s.', 'athena'), 'Athena', '<a href="https://smartcatdesign.net" rel="designer">Smartcat</a>'); ?>

            <?php $menu = wp_nav_menu( array ( 
                'theme_location'    => 'footer', 
                'menu_id'           => 'footer-menu', 
                'menu_class'        => 'athena-footer-nav' ,

                ) ); ?>
        </div>
        
        <div class="scroll-top alignright">
            <span class="fa fa-chevron-up"></span>
        </div>
        
    </div><!-- .site-info -->
    
    
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
