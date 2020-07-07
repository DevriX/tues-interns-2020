<?php 
/**
 * Template Name: About
 *
 * Custom about template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>

<section class="section-fullwidth section-about">
    <div class="row">
		<div class="column small-12 medium-12">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1 class="about-title">About us</h1>
                    <div class="about-content">
                        <div class="content-text">
                            <p class="text">This website is prowdly created by the Interns at <strong>DevriX</strong>.</p>
                            <p class="text"><strong>DevriX</strong> was founded as a WordPress development company in 2010 by Mario Peshev as the next step of his freelancing career.</p>
                            <p class="text">Now <strong>DevriX</strong> is a leading technical WordPress development agency with WordPress SaaS and large multisite network expertise and experienced contributors in its team.</p>
                            <a href="" class="links">Privacy and Cookies Policy</a><br>
                            <a href="" class="links">Security Statement</a>
                        </div>
                        <img class="content-image" src="<?php echo get_bloginfo('template_url') ?>/assets/dist/images/devrix-mascot.svg" alt="devrix-mascot">
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth section-main -->
<section class="section-fullwidth section-contacts">
    <div class="row">
		<div class="column small-12 medium-7">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth section-main -->

<?php get_footer(); ?>
