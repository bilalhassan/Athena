<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
?>

<?php if (get_post_thumbnail_id($post->ID)) : ?>
    <div id="athena-page-jumbotron" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>">

        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

    </div>
<?php endif; ?>

<div class="row">
    <div class="col-sm-<?php echo (!is_active_sidebar('sidebar-right') ) ? '12' : '9'; ?>">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



            <div class="entry-content">

                <?php if (!get_post_thumbnail_id($post->ID)) : ?>

                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header><!-- .entry-header -->

                <?php endif; ?>


                <?php the_content(); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'athena'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php
                edit_post_link(
                        sprintf(
                                /* translators: %s: Name of current post */
                                esc_html__('Edit %s', 'athena'), the_title('<span class="screen-reader-text">"', '"</span>', false)
                        ), '<span class="edit-link">', '</span>'
                );
                ?>
            </footer><!-- .entry-footer -->



        </article><!-- #post-## -->
    </div>
    <?php if (is_active_sidebar('sidebar-right')) : ?>
        <div class="col-sm-3" id="athena-sidebar">
            <?php get_sidebar(); ?>
        </div>
    <?php endif; ?>

</div>

