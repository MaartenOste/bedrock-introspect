<?php get_header(); ?>

<h1>Detail bericht</h1>
<?php 
if ( have_posts() ) : 
while ( have_posts() ) : the_post(); 
?>
<!-- One -->
<section id="one">
    <div class="inner">
        <header>
            <h2><?php the_title(); ?></h2>
        </header>
        
        <?php the_content(); ?>
    </div>
</section>
<?php 
// Display post content
endwhile; 
endif; 
?>

<?php get_footer(); ?>