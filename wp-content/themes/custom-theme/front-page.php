<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        /*
         * Include the post format-specific template for the content. If you want to
         * use this in a child theme, then include a file called called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );

    // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'custom-theme' ),
        'next_text'          => __( 'Next page', 'custom-theme' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'custom-theme' ) . ' </span>',
    ) );

    ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>