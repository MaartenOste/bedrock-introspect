<?php 
    /* 
        Template Name: Content With Sidebar
        Template Post Type: page
    */
?>

<?php get_header(); ?>

<?php 
if ( have_posts() ) : 
while ( have_posts() ) : the_post(); 
?>
<!-- One -->
<section style="display: flex;">

    <div class="content" style="flex: 70% 1 1;">
        <header>
            <h2><?php the_title(); ?></h2>
        </header>
        
        <?php the_content(); ?>
    </div>
    
    <div class="sidebar" style="flex: 28% 1 1;">
        <h4>Dit is een fysieke sidebar</h4>
    </div>

</section>
<?php 
// Display post content
endwhile; 
endif; 
?>

<?php get_footer(); ?>