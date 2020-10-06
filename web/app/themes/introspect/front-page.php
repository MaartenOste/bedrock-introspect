<?php get_header(); ?>

<!-- Banner -->
<section id="banner"  style="background-image: url('<?php echo header_image(); ?>');">
    <div class="inner">
        <h1><?php echo get_bloginfo(); ?><br>
            <span><?php echo bloginfo( 'description' ); ?></span>
        </h1>
        <ul class="actions">
            <li><a href="#" class="button alt">...</a></li>
        </ul>
    </div>
</section>

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

<?php /*
<!-- Two -->
<section id="two">
    <div class="inner">
        <article>
            <div class="content">
                <header>
                    <h3>Pellentesque adipis</h3>
                </header>
                <div class="image fit">
                    <img src="images/pic01.jpg" alt="" />
                </div>
                <p>Cumsan mollis eros. Pellentesque a diam sit amet mi magna ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet lorem ipsum feugiat tempus.</p>
            </div>
        </article>
        <article class="alt">
            <div class="content">
                <header>
                    <h3>Morbi interdum mol</h3>
                </header>
                <div class="image fit">
                    <img src="images/pic02.jpg" alt="" />
                </div>
                <p>Cumsan mollis eros. Pellentesque a diam sit amet mi magna ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet lorem ipsum feugiat tempus.</p>
            </div>
        </article>
    </div>
</section>
*/?>

<!-- Three -->
<section id="three">
    <div class="inner">
        <article>
            <div class="content">
                <span class="icon fa-laptop"></span>
                <header>
                    <h3>Tempus Feugiat</h3>
                </header>
                <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna lorem ullamcorper laoreet, lectus arcu.</p>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </div>
        </article>
        <article>
            <div class="content">
                <span class="icon fa-diamond"></span>
                <header>
                    <h3>Aliquam Nulla</h3>
                </header>
                <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed.</p>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </div>
        </article>
        <article>
        <div class="content">
                <span class="icon fa-laptop"></span>
                <header>
                    <h3>Sed Magna</h3>
                </header>
                <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>