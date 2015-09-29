<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Athena
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'athena'); ?></a>

            <header id="masthead" class="site-header" role="banner">

                <div id="athena-header" class="<?php echo is_front_page() ? 'frontpage' : ''; ?>">

                    <div class="header-inner">

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="site-branding">
                                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                    <p class="site-description"><?php bloginfo('description'); ?></p>
                                </div><!-- .site-branding -->

                            </div>

                            <div class="col-sm-6 text-right">



                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'athena'); ?></button>
                                    <?php
                                    $menu = wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'menu_id' => 'primary-menu',
                                        'menu_class' => 'athena-nav',
                                            ));
                                    ?>


                                </nav><!-- #site-navigation -->
                                 
                                <div id="athena-search" class="noshow">
                                    <span class="fa fa-close"></span>
                                    <?php get_search_form( ); ?>
                                </div>
                                


                            </div>

                        </div>
                    </div>
                </div>

            </header><!-- #masthead -->

            <div id="content" class="site-content">
