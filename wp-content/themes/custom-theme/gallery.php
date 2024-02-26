<?php
/**
 * The template for displaying gallery pages
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php
    if ( have_posts() ) :

        while ( have_posts() ) : the_post();

            $gallery_images = get_post_gallery_images( $post );

            if ( ! empty( $gallery_images ) ) {
                echo '<div class="gallery-container">';

                foreach ( $gallery_images as $image_url ) {
                    echo '<div class="gallery-item">';
                    echo '<img src="' . esc_url( $image_url ) . '" alt="">';
                    echo '</div>';
                }

                echo '</div>';
            }

        endwhile;

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

</main>

<?php
get_sidebar();
get_footer();