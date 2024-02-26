<?php
get_header(); ?>

<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>">Read More</a></p>
        </div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>