<?php get_header(); ?>
<div class="container">
    <h1>All Wines</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="mb-4">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail('medium'); ?>
            <div><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; else: ?>
        <p>No wines found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
