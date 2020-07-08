<?php 
/**
 * Template Name: Contest
 *
 * Custom contest template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>
    
    <section class="section-fullwidth section-contest">
    <div class="row">
		<div class="column small-12 medium-12">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile; 
                ?>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth section-main -->

<?php get_footer(); ?>