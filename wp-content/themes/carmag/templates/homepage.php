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
		<div class="row">
			<div class="columns small-12 medium-8">
				<div id="primary" class="content-area">
					<main id="latestoffers" class="site-latestoffers">
                        <div class="latestoffers" >
                            <?php
                                for($i = 0; $i < 5; $i++) :
                                    get_template_part( 'template-parts/content', 'card' );
                                endfor;
                            ?>
                        </div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .columns medium-8 -->
		</div><!-- .row -->
	</section><!-- .section-fullwidth section-main -->

<?php get_footer(); ?>
