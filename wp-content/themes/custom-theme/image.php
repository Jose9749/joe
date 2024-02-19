<?php
/**
 * The template for displaying image attachments
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'image' );

        the_post_navigation( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Image', 'custom-theme' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next Image', 'custom-theme' ) . '</span>',
        ) );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();