<?php get_header(); ?>

<div id="content">
    <h1><?php single_cat_title(); ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <p class="post-meta">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
        </div>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>