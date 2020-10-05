<?php get_header(); ?>

<section id="one">
    <div class="inner">
        <h1>404</h1>
        <?php 
            /*  __('label', 'textdomain'); <-- vertaalbaar label */ 
            /*  _e('label', 'textdomain'); <-- vertaalbaar label + printen */ 
        ?>
        <p><?php _e('Pagina niet gevonden', 'introspect') ?></p>
    </div>
</section>

<?php get_footer(); ?>