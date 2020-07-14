<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CarMag
 */

?>
<div class="cookie-banner">
    <div class="row">
        <div class="columns small-12">
            <div class="cookie-content">
                <div class="cookie-text">
                    <p>This website uses cookies to ensure you get the best experience on our website.
                    <a href="<?php echo esc_url('/privacy-policy'); ?>" target="_blank"><?php printf( esc_html__( '%s', 'carmag' ), 'More info' ); ?></a>
                    </p>
                </div>
                <div class="cookie-button">
                    <button>Got it!</button>
                </div>
            </div>
        </div>
    </div>
</div>