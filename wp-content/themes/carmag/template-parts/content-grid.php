<?php
/**
 * Template part for displaying results in a grid view.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CarMag
 */

?>

<article id="post-<?php the_ID(); ?>" class="columns small-12 medium-6 large-4" <?php post_class( 'entry' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php carmag_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
