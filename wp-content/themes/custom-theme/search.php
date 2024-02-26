<?php
get_header(); ?>

<main id="content">
    <h1><?php printf( __( 'Search Results for: %s', 'custom-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; else: ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'custom-theme' ); ?></p>
    <?php endif; ?>

    <?php the_posts_pagination(); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>