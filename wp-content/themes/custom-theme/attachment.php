<?php
/**
 * The template for displaying attachments.
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'attachment' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        the_post_navigation( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'custom-theme' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'custom-theme' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . custom_theme_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'custom-theme' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'custom-theme' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . custom_theme_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
        ) );

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();