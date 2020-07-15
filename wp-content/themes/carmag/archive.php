<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CarMag
 */

get_header(); ?>

	<section class="section-fullwidth section-main">
		<div class="row">
			<div class="columns small-12 medium-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
						<h1 class="page-title">
							Results for <span class="colored-title">McLaren</span>
						</h1>
							<?php
								// the_archive_title( '<h1 class="page-title">', '</h1>' );

								get_template_part( 'template-parts/content', 'info');
							?>
						</header><!-- .page-header -->
						<div class="view">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'card' );

						endwhile;

						the_posts_navigation(); ?>

						</div>

					<?php
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .columns-->
		</div><!-- .row -->
	</section><!-- .section-fullwidth section-main -->

<?php
get_footer();

