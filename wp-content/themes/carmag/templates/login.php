<?php 
/**
 * Template Name: Login
 *
 * Custom login template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>

<!-- Left and right aligned image with text next to them -->
<section class="section-fullwidth section-login">
	<div class="row">
		<div class="column small-12 medium-8">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <form method="POST" action="<?php esc_url( plugins_url( 'register-user-class.php', __FILE__ ) ) ?>" class="login-form">
                        <h1>Login</h1>
                        
                        <input class="form-input" type="email" name="email" id="email" placeholder="Email" required autofocus>
                        <input class="form-input" type="password" name="password" id="password" placeholder="Password" required>
                        <button type="submit" class="form-submit">Login</button>

                        <p class="form-suggestion">Don't have an account? <a href="/register/">Register</a></p>
                    </form>
                </main><!-- #main -->
            </div><!-- #primary -->
		</div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth -->

<?php get_footer(); ?>
