<?php
/**
 * Template Name: >> All sections <<
 *
 * Use this for reference when developing your themes. There
 * are comments to help you out setitng up these sections. Feel free
 * to use get_template_part or copy-paste the markup for more freedom.
 *
 * @since  v1.0.0
 * @package DevriX_Starter
 */

get_header(); ?>

<!-- This is a large background image with text overlaying it. -->
<?php get_template_part( 'snippets/section', 'hero' ); ?>

<div class="section-fullwidth inverted">
	<div class="row">
		<div class="columns">
			<?php get_template_part( 'snippets/flex', 'grid' ); ?>
		</div><!-- .columns -->
	</div><!-- .row -->
</div><!-- .section-fullwidth -->

<!-- Left and right aligned image with text next to them -->
<section class="section-fullwidth">
	<div class="row">
		<div class="column">
			<?php get_template_part( 'snippets/section', 'heading' ); ?>
			<?php get_template_part( 'snippets/section', 'halfsplit' ); ?>
		</div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth -->

<div class="section-fullwidth border-top border-bottom">
	<div class="row">
		<div class="columns">
			<?php get_template_part( 'snippets/flex', 'grid' ); ?>
		</div><!-- .columns -->
	</div><!-- .row -->
</div><!-- .section-fullwidth -->

<!-- Basic fullwidth view. Open the file and grab what you need from there -->
<?php get_template_part( 'snippets/section', 'fullwidth-basic' ); ?>
<?php get_template_part( 'snippets/section', 'faq-large' ); ?>
<?php get_template_part( 'snippets/section', 'features-grid' ); ?>
<?php get_template_part( 'snippets/section', 'call-to-action' ); ?>
<?php get_template_part( 'snippets/section', 'welcome' ); ?>

<?php get_footer(); ?>
