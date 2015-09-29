<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (get_post_thumbnail_id($post->ID)) : ?>
        <div id="athena-posts-image">

            <?php echo the_post_thumbnail('large'); ?>

        </div>
    <?php endif; ?>

    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php athena_posted_on(); ?>
                <?php echo get_the_author() ? __('by: ', 'athena') . get_the_author() : ''; ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content(sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'athena'), array('span' => array('class' => array()))), the_title('<span class="screen-reader-text">"', '"</span>', false)
        ));
        ?>

        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'athena'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php athena_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
