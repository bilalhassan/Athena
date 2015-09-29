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


function athena_scripts(){
    
    wp_enqueue_style( 'athena-style', get_stylesheet_uri() );

    wp_enqueue_script( 'athena-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'athena-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
    
            
    }
    
    
    wp_enqueue_style('athena-font-raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600', array(), ATHENA_VERSION );
    
    if( 'Raleway, sans-serif' == get_theme_mod( 'theme_header_font', 'Raleway, sans-serif' ) ) 
        wp_enqueue_style('athena-font-raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600', array(), ATHENA_VERSION );
    
    
    if('Source Sans Pro, sans-serif' == get_theme_mod( 'theme_header_font', 'Raleway, sans-serif' ) )  
        wp_enqueue_style('athena-font-sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600', array(), ATHENA_VERSION);
    
    if('Lato, sans-serif' == get_theme_mod( 'theme_header_font', 'Raleway, sans-serif' ) ) 
        wp_enqueue_style('athena-font-lato', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic', array(), ATHENA_VERSION);
    
    if('Josefin Sans, sans-serif' == get_theme_mod( 'theme_header_font', 'Raleway, sans-serif' ) )  
        wp_enqueue_style('athena-font-josefin', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700', array(), ATHENA_VERSION);
    
    if('Open Sans, sans-serif' == get_theme_mod( 'theme_header_font', 'Raleway, sans-serif' ) ) 
        wp_enqueue_style('athena-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700', array(), ATHENA_VERSION);    
    
    wp_enqueue_style('athena-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-bootstrap-theme', get_template_directory_uri() . '/inc/css/bootstrap-theme.min.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-fontawesome', get_template_directory_uri() . '/inc/css/font-awesome.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-main-style', get_template_directory_uri() . '/inc/css/style.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-camera-style', get_template_directory_uri() . '/inc/css/camera.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-animations', get_template_directory_uri() . '/inc/css/animate.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-slicknav', get_template_directory_uri() . '/inc/css/slicknav.min.css', array(), ATHENA_VERSION );
    wp_enqueue_style('athena-template', get_template_directory_uri() . '/inc/css/temps/' . esc_attr( get_theme_mod('theme_color', 'green') ) . '.css', array(), ATHENA_VERSION );
//    wp_enqueue_style('athena-wow', get_template_directory_uri() . '/inc/css/wow.min.css', array(), ATHENA_VERSION);
    
    wp_enqueue_script('athena-sticky', get_template_directory_uri() . '/inc/js/sticky.min.js', array('jquery'), ATHENA_VERSION, true );
    wp_enqueue_script('athena-easing', get_template_directory_uri() . '/inc/js/easing.js', array('jquery'), ATHENA_VERSION, true );
    wp_enqueue_script('athena-camera', get_template_directory_uri() . '/inc/js/camera.js', array('jquery'), ATHENA_VERSION, true );
    wp_enqueue_script('athena-carousel', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array('jquery'), ATHENA_VERSION, true );
    wp_enqueue_script('athena-slicknav', get_template_directory_uri() . '/inc/js/slicknav.min.js', array('jquery'), ATHENA_VERSION, true );
    wp_enqueue_script('athena-wow', get_template_directory_uri() . '/inc/js/wow.js', array('jquery'), ATHENA_VERSION, true );
    
    
    
    wp_enqueue_script('athena-script', get_template_directory_uri() . '/inc/js/script.js', array('jquery', 'jquery-ui-core','jquery-masonry'), ATHENA_VERSION );


}
add_action( 'wp_enqueue_scripts', 'athena_scripts' );

function athena_widgets_init() {
    
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'athena' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
    
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'athena' ),
		'id'            => 'sidebar-footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Overlay', 'athena' ),
		'id'            => 'sidebar-overlay',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-6">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
}
add_action( 'widgets_init', 'athena_widgets_init' );


function athena_get_image() {
    
    echo wp_get_attachment_url( $POST['id'] );
    
    exit();
    
}
add_action( 'wp_ajax_athena_get_image', 'athena_get_image' );



function athena_customize_nav( $items ) {
  
    return $items .= '<li><a href="#myModal" role="button" data-toggle="modal"><span class="fa fa-search"></span></a></li>';
  
}
add_filter( 'wp_nav_menu_items', 'athena_customize_nav' );



function athena_css() {
    ?>
    <style type="text/css">


        body{
            font-size: <?php echo esc_attr( get_theme_mod( 'font_size', 14 ) ); ?>px;
            font-family: <?php echo esc_attr( get_theme_mod('theme_font', 'Raleway, sans-serif') ); ?>;
            
            
        }
    </style>
    <?php
}
add_action('wp_head', 'athena_css');