<?php 
/**
 * Template Name: Homepage
 *
 * Custom homepage template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>

<section class="section-fullwidth section-latestoffers">
    <div class="row latestoffers-text">
        Check our latest deals
    </div><!-- .row -->
    <div class="view latestoffers-grid">
    <?php
        for($i = 0; $i < 6; $i++) :
            get_template_part( 'template-parts/content', 'card' );
        endfor;
    ?>
    
    </div>
</section><!-- .section-fullwidth section-main -->

<?php get_footer(); ?>
