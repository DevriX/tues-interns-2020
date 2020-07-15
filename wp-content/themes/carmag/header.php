<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CarMag
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php // DXCheck is used to monitor our sites with our internal tools. Remove this if you don't need it ?>
<meta property="dxcheck:online" content="true" />

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href="https://fonts.googleapis.com/css2?family=Quantico:wght@400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'carmag' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="columns small-12">
				<div class="site-header-inner">
					<div class="site-branding">
						<?php if ( is_front_page() || is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );

						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->

					<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="main-navigation">
						<div class="menu-toggle" aria-expanded="false" onClick="toggleDrawer()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
						<div class="menu-container">
                            <?php
                            if ( is_user_logged_in() ) {
                                wp_nav_menu( array( 'theme_location' => 'profile', 'menu_id' => 'profile-menu' ) );
                            } else {
                                wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
                            }
                            ?>

						</div><!-- .menu-primary-container -->
					</nav><!-- #site-navigation -->
					<?php endif; ?>

				</div><!-- .site-header-inner -->
			</div><!-- /columns -->
		</div><!-- /row -->
	</header><!-- #site-header -->

	<div id="content" class="site-content">
