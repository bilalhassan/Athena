<?php

/**
 * 
 * Athena WordPress Theme
 * 
 * This file contains most of the work done by Athena
 * It's pretty straight forward, feel free to edit if you're comfortable with basic PHP
 * 
 * If you got here, thank you for using this theme ! Hack away at it as you see fit.
 * Please take a minute to leave us a review on WordPress.org
 * 
 * 
 */
function athena_scripts() {

    wp_enqueue_style('athena-style', get_stylesheet_uri());

    wp_enqueue_script('athena-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('athena-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }


    wp_enqueue_style('athena-font-raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600', array(), ATHENA_VERSION);

    if ('Raleway, sans-serif' == get_theme_mod('theme_header_font', 'Raleway, sans-serif'))
        wp_enqueue_style('athena-font-raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600', array(), ATHENA_VERSION);


    if ('Source Sans Pro, sans-serif' == get_theme_mod('theme_header_font', 'Raleway, sans-serif'))
        wp_enqueue_style('athena-font-sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600', array(), ATHENA_VERSION);

    if ('Lato, sans-serif' == get_theme_mod('theme_header_font', 'Raleway, sans-serif'))
        wp_enqueue_style('athena-font-lato', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic', array(), ATHENA_VERSION);

    if ('Josefin Sans, sans-serif' == get_theme_mod('theme_header_font', 'Raleway, sans-serif'))
        wp_enqueue_style('athena-font-josefin', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700', array(), ATHENA_VERSION);

    if ('Open Sans, sans-serif' == get_theme_mod('theme_header_font', 'Raleway, sans-serif'))
        wp_enqueue_style('athena-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700', array(), ATHENA_VERSION);

    wp_enqueue_style('athena-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-bootstrap-theme', get_template_directory_uri() . '/inc/css/bootstrap-theme.min.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-fontawesome', get_template_directory_uri() . '/inc/css/font-awesome.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-main-style', get_template_directory_uri() . '/inc/css/style.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-camera-style', get_template_directory_uri() . '/inc/css/camera.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-animations', get_template_directory_uri() . '/inc/css/animate.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-slicknav', get_template_directory_uri() . '/inc/css/slicknav.min.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-template', get_template_directory_uri() . '/inc/css/temps/' . esc_attr(get_theme_mod('theme_color', 'green')) . '.css', array(), ATHENA_VERSION);
//    wp_enqueue_style('athena-wow', get_template_directory_uri() . '/inc/css/wow.min.css', array(), ATHENA_VERSION);

    wp_enqueue_script('athena-sticky', get_template_directory_uri() . '/inc/js/sticky.min.js', array('jquery'), ATHENA_VERSION, true);
    wp_enqueue_script('athena-easing', get_template_directory_uri() . '/inc/js/easing.js', array('jquery'), ATHENA_VERSION, true);
    wp_enqueue_script('athena-camera', get_template_directory_uri() . '/inc/js/camera.js', array('jquery'), ATHENA_VERSION, true);
    wp_enqueue_script('athena-carousel', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array('jquery'), ATHENA_VERSION, true);
    wp_enqueue_script('athena-slicknav', get_template_directory_uri() . '/inc/js/slicknav.min.js', array('jquery'), ATHENA_VERSION, true);
    wp_enqueue_script('athena-wow', get_template_directory_uri() . '/inc/js/wow.js', array('jquery'), ATHENA_VERSION, true);



    wp_enqueue_script('athena-script', get_template_directory_uri() . '/inc/js/script.js', array('jquery', 'jquery-ui-core', 'jquery-masonry'), ATHENA_VERSION);
}

add_action('wp_enqueue_scripts', 'athena_scripts');

function athena_widgets_init() {

    register_sidebar(array(
        'name' => esc_html__('Right Sidebar', 'athena'),
        'id' => 'sidebar-right',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Left Sidebar', 'athena'),
        'id' => 'sidebar-left',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Shop Sidebar ( WooCommerce )', 'athena'),
        'id' => 'sidebar-shop',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Footer', 'athena'),
        'id' => 'sidebar-footer',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-4">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Slider Overlay', 'athena'),
        'id' => 'sidebar-overlay',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-6">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Homepage', 'athena'),
        'id' => 'sidebar-homepage',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'athena_widgets_init');

function athena_get_image() {

    echo wp_get_attachment_url($POST['id']);

    exit();
}

add_action('wp_ajax_athena_get_image', 'athena_get_image');

function athena_customize_nav($items) {

    $items .= '<li class="menu-item"><a class="athena-search" href="#search" role="button" data-toggle="modal"><span class="fa fa-search"></span></a></li>';
    $items .= '<li><a class="athena-cart" href="' . WC()->cart->get_cart_url() . '"><span class="fa fa-shopping-cart"></span> ' . WC()->cart->get_cart_total() . '</a></li>';
    
    return $items;
}

add_filter('wp_nav_menu_items', 'athena_customize_nav');

function athena_custom_css() {
    ?>
    <style type="text/css">


        body{
            font-size: <?php echo esc_attr( get_theme_mod( 'theme_font_size', '14px') ); ?>;
            font-family: <?php echo esc_attr( get_theme_mod( 'theme_font', 'Raleway, sans-serif' ) ); ?>;

        }
        h1,h2,h3,h4,h5,h6,.slide2-header,.slide1-header,.athena-title, .widget-title,.entry-title, .product_title{
            font-family: <?php echo esc_attr( get_theme_mod('header_font', 'Raleway, sans-serif' ) ); ?>;
        }
        
        ul.athena-nav > li.menu-item a{
            font-size: <?php echo esc_attr( get_theme_mod('menu_font_size', '14px' ) ); ?>;
        }
        
    </style>
    <?php
}

add_action('wp_head', 'athena_custom_css');

function athena_homepage_script() { ?>

    <script>
        jQuery(document).ready(function ($) {

            function get_height() {

                if (jQuery(window).width() < 601) {

                    return jQuery(window).height();
                } else {
                    return jQuery(window).height();
                }


            }

            athena_slider();

            function athena_slider() {

                var height = get_height();

                jQuery('#athena-slider').camera({
                    height: height + 'px',
                    loader: false,
                    overlay: false,
                    fx: 'simpleFade',
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

<?php
}

add_action('wp_head', 'athena_homepage_script');

function athena_render_homepage() { ?>

    <div id="athena-jumbotron">

        <div id="athena-slider" class="hero">

            <div id="slide1" data-thumb="<?php echo esc_url(get_theme_mod('featured_image1', get_template_directory_uri() . '/inc/images/athena.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image1', get_template_directory_uri() . '/inc/images/athena.jpg')); ?>">

                <div class="overlay">
                    <div class="row">
                        
                        <div class="col-sm-6 parallax">
                            <h2 class="header-text animated slideInDown slide1-header"><?php echo esc_attr( get_theme_mod( 'featured_image1_title', __( 'Welcome to Athena', 'athena' )  ) ); ?></h2>
                            
                            <a href="<?php echo esc_url( get_theme_mod( 'slide1_button1_url', '#') ); ?>" 
                               class="athena-button primary large animated flipInX slide1_button1 delay3">
                                <?php echo esc_attr( get_theme_mod( 'slide1_button1_text', __( 'View Features', 'athena' )  ) ); ?>
                            </a>
                            
                            <a href="<?php echo esc_url( get_theme_mod( 'slide1_button2_url', '#') ); ?>" 
                               class="athena-button default large animated flipInX slide1_button2 delay3">
                                <?php echo esc_attr( get_theme_mod( 'slide1_button2_text', __( 'Learn More', 'athena' )  ) ); ?>
                            </a>
                            
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
                            <h2 class="header-text animated slideInDown slide2-header"><?php echo esc_attr( get_theme_mod( 'featured_image2_title', __( 'Welcome to Athena', 'athena' )  ) ); ?></h2>
                            
                            <a href="<?php echo esc_url( get_theme_mod( 'slide2_button1_url', '#') ); ?>" 
                               class="athena-button primary large animated flipInX slide2_button1 delay3">
                                <?php echo esc_attr( get_theme_mod( 'slide2_button1_text', __( 'View Features', 'athena' )  ) ); ?>
                            </a>
                            
                            <a href="<?php echo esc_url( get_theme_mod( 'slide2_button2_url', '#') ); ?>" 
                               class="athena-button default large animated flipInX slide2_button2 delay3">
                                <?php echo esc_attr( get_theme_mod( 'slide2_button2_text', __( 'Learn More', 'athena' )  ) ); ?>
                            </a>
                            
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

            <span class="<?php echo esc_attr( get_theme_mod( 'overlay_icon', 'fa fa-plus' ) ); ?> animated rotateIn delay3"></span>
            
        </div>

        <div class="slider-bottom">
            <div>
                <span class="fa fa-chevron-down scroll-down reveal animated slideInUp delay-long"></span>
            </div>
        </div>
        
        
    </div>

    <div class="clear"></div>

    <div id="athena-featured" >

        <div class="col-sm-4 featured-box featured-box1">

            <div class="reveal animated fadeInUp reveal">

                <div class="athena-icon">
                    <span class="<?php echo esc_attr(get_theme_mod('callout1_icon', __('fa fa-desktop', 'athena'))); ?>"></span>
                </div>

                <h3 class="athena-title"><?php echo esc_attr(get_theme_mod('callout1_title', __('Responsive', 'athena'))); ?></h3>

                <p class="athena-desc"><?php echo esc_attr(get_theme_mod('callout1_text', __('Athena looks amazing on desktop and mobile devices.', 'athena'))); ?></p>

            </div>
            
        </div>

        <div class="col-sm-4 featured-box featured-box2 ">

            <div class="reveal animated fadeInUp delay1">

                <div class="athena-icon">
                    <span class="<?php echo esc_attr(get_theme_mod('callout2_icon', __('fa fa-black-tie', 'athena'))); ?>"></span>
                </div>

                <h3 class="athena-title"><?php echo esc_attr(get_theme_mod('callout2_title', __('Beautiful', 'athena'))); ?></h3>

                <p class="athena-desc"><?php echo esc_attr(get_theme_mod('callout2_text', __('Athena is a carefully designed and developed theme that you can use to make your site stand out', 'athena'))); ?></p>

            </div>
            
        </div>

        <div class="col-sm-4 featured-box featured-box3 ">

            <div class="reveal animated fadeInUp delay2">
            
                <div class="athena-icon">
                    <span class="<?php echo esc_attr(get_theme_mod('callout3_icon', __('fa fa-star', 'athena'))); ?>"></span>
                </div>

                <h3 class="athena-title"><?php echo esc_attr(get_theme_mod('callout3_title', __('Excellent', 'athena'))); ?></h3>

                <p class="athena-desc"><?php echo esc_attr(get_theme_mod('callout3_text', __('Athena is easily customizable, without touching a line of code', 'athena'))); ?></p>
                
            </div>
        </div>

    </div>
    
    <div class="clear"></div>

    <div id="athena-homepage-widget">
        <div class="row">
            <?php get_sidebar('homepage'); ?>
        </div>
    </div>
    
    
    
    <?php
}

add_action( 'athena_homepage', 'athena_render_homepage' );
