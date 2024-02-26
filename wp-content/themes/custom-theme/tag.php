<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <header class="page-header">
        <h1 class="page-title">
            <?php single_tag_title(); ?>
        </h1>
    </header>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>

            <footer class="entry-footer">
                <?php edit_post_link( __( 'Edit', 'custom-theme' ), '<span class="edit-link">', '</span>' ); ?>
            </footer>
        </article>

    <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.', 'custom-theme' ); ?></p>

    <?php endif; ?>

</main>

<?php get_sidebar();
get_footer(); ?>