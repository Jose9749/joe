<?php
get_header(); ?>

<main id="content">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'custom-theme' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'custom-theme' ); ?></p>

            <?php get_search_form(); ?>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #content -->

<?php
get_sidebar();
get_footer(); ?>