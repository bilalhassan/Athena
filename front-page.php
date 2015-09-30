<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
get_header();
?>

<script>
    jQuery(document).ready(function ($) {

        function get_height() {

            if (jQuery(window).width() < 601) {
//                return 200;
                return jQuery(window).height();
            } else {
                return jQuery(window).height();
            }


        }


        athena_slider();


//        jQuery(window).resize( function () {
//            var height = jQuery(window).height();
//            athena_slider(); 
//        });


        function athena_slider() {

            var height = get_height();


            jQuery('#athena-slider').camera({
                height: height + 'px',
                loader: false,
                overlay: false,
                pagination: false,
                thumbnails: false,
                transPeriod: 1000,
                overlayer: false,
                playPause: false,
                hover: false,
            });

        }



    });

</script>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div id="athena-jumbotron">

            <div id="athena-slider" class="hero">

                <div id="slide1" data-thumb="<?php echo esc_url(get_theme_mod('featured_image1', get_template_directory_uri() . '/inc/images/athena.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image1', get_template_directory_uri() . '/inc/images/athena.jpg')); ?>">

                    <div class="overlay">
                        <div class="row">
                            <div class="col-sm-6 ">
                                <h2 class="header-text reveal animated slideInUp">Welcome to Athena</h2>
                                <a class="athena-button primary large animated slideInUp">View Features</a>
                                <a class="athena-button default large animated slideInUp">Buy Now</a>                           
                            </div>
                            <div class="col-sm-6">

                            </div>

                        </div>
                    </div>                    

                </div>                

                <div id="slide2" data-thumb="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/inc/images/athena2.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/inc/images/athena2.jpg')); ?>">

                    <div class="overlay">
                        <div class="row">
                            <div class="col-sm-6 parallax">
                                <h2 class="header-text reveal animated slideInUp">Welcome to Athena</h2>
                                <a class="athena-button primary large animated slideInUp">View Features</a>
                                <a class="athena-button default large animated slideInUp">Buy Now</a>                           
                            </div>
                            <div class="col-sm-6">

                            </div>

                        </div>
                    </div>                    

                </div>                

            </div>

            <div id="athena-overlay-trigger">

                <div class="overlay-widget">
                    <?php if (is_active_sidebar('sidebar-overlay')) : ?>
                        <?php dynamic_sidebar('sidebar-overlay'); ?>
                    <?php endif; ?>
                </div>

                <span class="<?php echo esc_attr(get_theme_mod('overlay_icon', 'fa fa-plus')); ?> animated rotateIn delay3"></span>
            </div>

        </div>

        <div class="clear"></div>

        <div id="athena-featured" >

            <div class="col-sm-4 featured-box reveal animated fadeInUp">

                <div class="athena-icon">
                    <span class="<?php echo esc_attr(get_theme_mod('callout1_icon', __('fa fa-desktop', 'athena'))); ?>"></span>
                </div>

                <h3 class="athena-title"><?php echo esc_attr(get_theme_mod('callout1_title', __('Responsive', 'athena'))); ?></h3>

                <p class="athena-desc"><?php echo esc_attr(get_theme_mod('callout1_text', __('Athena looks amazing on desktop and mobile devices.', 'athena'))); ?></p>

            </div>

            <div class="col-sm-4 featured-box reveal animated fadeInUp delay1">

                <div class="athena-icon">
                    <span class="<?php echo esc_attr(get_theme_mod('callout2_icon', __('fa fa-black-tie', 'athena'))); ?>"></span>
                </div>

                <h3 class="athena-title"><?php echo esc_attr(get_theme_mod('callout2_title', __('Beautiful', 'athena'))); ?></h3>

                <p class="athena-desc"><?php echo esc_attr(get_theme_mod('callout2_text', __('Athena is a carefully designed and developed theme that you can use to make your site stand out', 'athena'))); ?></p>

            </div>

            <div class="col-sm-4 featured-box reveal animated fadeInUp delay2">

                <div class="athena-icon">
                    <span class="<?php echo esc_attr(get_theme_mod('callout3_icon', __('fa fa-star', 'athena'))); ?>"></span>
                </div>

                <h3 class="athena-title"><?php echo esc_attr(get_theme_mod('callout3_title', __('Excellent', 'athena'))); ?></h3>

                <p class="athena-desc"><?php echo esc_attr(get_theme_mod('callout3_text', __('Athena is easily customizable, without touching a line of code', 'athena'))); ?></p>

            </div>

        </div>
        
        
        <div class="homepage-page-content col-sm-<?php echo (!is_active_sidebar('sidebar-right') ) ? '12' : '8'; ?>">
            <?php if (have_posts()) : ?>

                <?php if (is_home() && !is_front_page()) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>


                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/content', get_post_format()); ?>

                <?php endwhile; ?>

                <?php echo paginate_links(); ?>

            <?php else : ?>


                <?php get_template_part('template-parts/content', 'none'); ?>



            <?php endif; ?>
        </div>
        <div class="col-sm-4" id="athena-sidebar">
            <?php get_sidebar(); ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>        