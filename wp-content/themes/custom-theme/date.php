<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <header class="page-header">
        <h1 class="page-title">
            <?php
            if ( is_day() ) :
                printf( __( 'Daily Archives: %s', 'custom-theme' ), get_the_date() );

            elseif ( is_month() ) :
                printf( __( 'Monthly Archives: %s', 'custom-theme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'custom-theme' ) ) );

            elseif ( is_year() ) :
                printf( __( 'Yearly Archives: %s', 'custom-theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'custom-theme' ) ) );

            else :
                _e( 'Archives', 'custom-theme' );

            endif;
            ?>
        </h1>
    </header>

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', get_post_format() );

    endwhile;

    the_posts_navigation();

    else :

    get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

</main>

<?php
get_sidebar();
get_footer();