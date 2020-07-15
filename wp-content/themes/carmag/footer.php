<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CarMag	
 */

?>
	
	</div><!-- #content -->

	<footer id="colophon" class="site-footer section-fullwidth">
		<div class="site-info">
			<div class="footer-icons">
				<a href="https://www.facebook.com/DevriXLtd/" target="_blank" class="in">
					<i class="fab fa-facebook" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-circle"></i>
				</a>
				<a href="https://www.instagram.com/devrix/" target="_blank" class="in">
					<i class="fab fa-instagram" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>
				</a>
				<a href="https://github.com/DevriX/" target="_blank" class="in">
					<i class="fab fa-github" data-fa-mask="fas fa-circle"></i>
				</a>
			</div>
			<div class="footer-text">
				<?php printf( esc_html__( 'Copyright' ) ); ?>
				&copy; <?php echo date("Y") ?>
				<a href="<?php echo esc_url( __( 'https://devrix.com/jobs-and-internships/', 'carmag' ) ); ?>" target="_blank"><?php printf( esc_html__( '%s', 'carmag' ), 'DevriX Interns' ); ?></a>
				<span class="sep"> - </span>
				<?php printf( esc_html__( 'All rights reserved' ) ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
