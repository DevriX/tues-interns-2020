<?php 
/**
 * Template Name: Register
 *
 * Custom register template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>

<section class="section-fullwidth section-register">
	<div class="row">
		<div class="column small-12 medium-8">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <form method="POST" action="" class="register-form">
                        <h1>Create Account</h1>
                        
                        <input class="form-input"  type="email" name="email" id="email" placeholder="Email" required autofocus>
                        <input class="form-input"  type="text" name="name" id="name" placeholder="Name" required>
                        <input class="form-input"  type="password" name="password" id="password" placeholder="Password" required>
                        <input class="form-input"  type="password" name="confirm-password" id="confirm-password" placeholder="Confirm password" required>
                        <button type="submit" class="form-submit">Register</button>

                        <p class="form-suggestion">Already have an account? <a href="/login/">Login</a></p>
                    </form>
                </main><!-- #main -->
            </div><!-- #primary -->
		</div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth -->

<?php get_footer(); ?>
