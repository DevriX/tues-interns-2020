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
                    <form method="POST" action="<?php echo admin_url('admin-post.php') ?>" class="register-form">
												<input type="hidden" name="action" value="process_register">
                        <h1>Create Account</h1>

                        <input class="form-input"  type="email" name="email" id="email" placeholder="Email" required autofocus>
                        <input class="form-input"  type="text" name="name" id="name" placeholder="Name" required>
                        <input class="form-input"  type="password" name="password" id="password" placeholder="Password" required>
                        <input class="form-input"  type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" required>
                        <button type="submit" class="form-submit">Register</button>

                        <p class="form-suggestion">Already have an account? <a href="/login/">Login</a></p>
                    </form>
                </main><!-- #main -->
            </div><!-- #primary -->
		</div><!-- .column -->
	</div><!-- .row -->
</section><!-- .section-fullwidth -->

<?php get_footer(); ?>
