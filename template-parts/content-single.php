<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
?>

<?php if (get_post_thumbnail_id($post->ID)) : ?>
    <div id="athena-page-jumbotron" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" >

        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

    </div>
<?php endif; ?>

<div class="row">
    <div class="col-sm-<?php echo (!is_active_sidebar('sidebar-right') ) ? '12' : '9'; ?>">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

            <div class="entry-meta">
                <div class="meta-detail">

                    <span><span class="fa fa-calendar"></span> <?php echo athena_posted_on(); ?></span>

                    <span class="author"><?php echo get_the_author() ? '<span class="fa fa-user"></span> ' . get_the_author() : ' '; ?></span>

                    <span><?php echo get_comments_number() == 0 ? '<span class="fa fa-comment"></span> ' . __('No comments yet', 'athena') : get_comments_number() . ' Comments'; ?></span>

                    <span><?php athena_entry_footer(); ?></span>

                </div>

            </div><!-- .entry-meta -->
            
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
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
            
            <?php the_post_navigation(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        </article><!-- #post-## -->

    </div>
    <?php if (is_active_sidebar('sidebar-right')) : ?>
        <div class="col-sm-3" id="athena-sidebar">
            <?php get_sidebar(); ?>
        </div>
    <?php endif; ?>

</div>