<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
get_header();
?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php athena_homepage(); ?>
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