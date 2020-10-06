<?php get_header(); ?>



<section id="news-archive">
    <h1>Actuele berichten</h1>
    <div class="posts">
        <?php 
    if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>
        <article class="inner">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Lees meer</a>
        </article>
        <?php 
    // Display post content
    endwhile; 
    endif; 
    ?>
    </div>
</section>

<?php get_footer(); ?>