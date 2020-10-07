<?php get_header(); ?>

<h1>Verhalen</h1>
<?php 
if ( have_posts() ) : 
while ( have_posts() ) : the_post(); 
?>
<!-- One -->
<section id="one">
    <div class="inner">
        <header>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>

        </header>
        
        <?php the_excerpt(); ?>
    </div>
</section>
<?php 
// Display post content
endwhile; 
endif; 
?>
<?php get_footer(); ?>