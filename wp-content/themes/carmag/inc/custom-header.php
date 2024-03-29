<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package CarMag
 */

/**
 * Sample implementation of the Custom Header feature.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package CarMag
 */

function carmag_customiser_settings( $wp_customize ) {

	// Remove the default color settings.
	$wp_customize->remove_section( 'colors' );

	$wp_customize->add_section( 'carmag_settings' , array(
		'title'      => __( 'CarMag theme settings', 'carmag' ),
		'priority'   => 30,
	) );

	$wp_customize->add_setting( 'carmag_primary_color' , array(
		'default'     => '#00A7FF',
		'transport'   => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'carmag_primary_color', array(
			'label'      => __( 'Primary color', 'carmag' ),
			'section'    => 'carmag_settings',
			'settings'   => 'carmag_primary_color',
		)
	) );

	$wp_customize->add_setting( 'carmag_radio_option' , array(
		'type' 			=> 'theme_mod',
		'transport'   	=> 'refresh',
		'capability' 	=> 'edit_theme_options',
		'default'    	=> 'sans',
		'sanitize_callback' => 'carmag_sanitize_choices'
	));

	$wp_customize->add_control(
		'carmag_radio_option', array(
			'label'     => __( 'Example radio option', 'carmag' ),
			'description' => __( 'If you\'re a theme developer, remove or update this from inc/custom-header.php.', 'carmag' ),
			'section'   => 'carmag_settings',
			'settings'  => 'carmag_radio_option',
			'type'     	=> 'radio',
			'choices'	=> array(
				'option-1' => 'Option 1',
				'option-2' => 'Option 2',
			)
		)
	);

}
add_action( 'customize_register', 'carmag_customiser_settings' );

/**
 * A function that will deal with sanitization for radio input fields
 * 
 * @since v1.3.1
 */
function carmag_sanitize_choices( $input, $setting ) {
    global $wp_customize;

    $control = $wp_customize->get_control( $setting->id );

    if ( array_key_exists( $input, $control->choices ) ) {
        return esc_attr( $input );
    } else {
        return esc_attr( $setting->default );
    }
}

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses carmag_header_style()
 */
function carmag_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'carmag_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1920,
		'height'                 => 500,
		'flex-height'            => true,
		'wp-head-callback'       => 'carmag_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'carmag_custom_header_setup' );

if ( ! function_exists( 'carmag_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see carmag_custom_header_setup().
 */
function carmag_header_style() {
	$header_text_color = get_header_textcolor();

	// Get the primary color of the theme
	$carmag_primary_color = esc_attr ( get_theme_mod( 'carmag_primary_color', '#00A7FF' ) );

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description,
		.main-navigation .menu-item a,
		.main-navigation .page_item a,
		.main-navigation .menu-item a a,
		.main-navigation .page_item a a,
		.main-navigation .menu-toggle {
			color: <?php echo esc_attr ( $header_text_color ) ?>;
		}
	<?php endif; ?>

	</style>
	<?php
}
add_action( 'wp_head', 'carmag_header_style' );
endif;

// Add the padidng setting to the body. The stylings are added from the
// Sass code only, nothing from here.
function carmag_add_custom_body_class( $classes ) {
	// Grab an option from here and add class to the body tag if needed.
  // $classes[] = get_theme_mod( 'carmag_spacings' );
  return $classes;
}
add_filter( 'body_class','carmag_add_custom_body_class' );
